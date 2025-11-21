<?php

use Illuminate\Support\Facades\Route;
use App\Models\Year;
use App\Models\Color;
use App\Models\Make;
use App\Models\Condition;
use App\Models\Body;
use App\Models\Transmission;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\VehicleController;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MakeController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TransmissionController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\BodyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
==========================
    Public Site Routes
==========================
*/

Route::get('/', function () {
    $vehicles = Vehicle::get();
    return view('public-site.home', compact('vehicles'));
})->name('home');

Route::get('/about', function () {
    $vehicles = Vehicle::get();
    return view('public-site.about', compact('vehicles'));
})->name('about');

Route::get('/all-services', function () {
    $vehicles = Vehicle::get();
    return view('public-site.services', compact('vehicles'));
})->name('services');

Route::resource('vehicles', VehicleController::class);

Route::get('/gallery', function () {
    $vehicles = Vehicle::get();
    return view('public-site.gallery', compact('vehicles'));
})->name('gallery');

// listings page (static route pointing to the listings view)
Route::get('/listings', function () {
    $vehicles = Vehicle::orderBy('created_at', 'desc')->paginate(4);
    $viewMode = session('view_mode', 'grid');
    return view('public-site.car-details', compact('vehicles', 'viewMode'));
})->name('listings');

// vehicle listings public route
// Route::get('/vehicle-listings', function () {
//     $vehicles = Vehicle::orderBy('created_at', 'desc')->paginate(4);
//     $viewMode = session('view_mode', 'grid');
//     return view('public-site.vehicle-listings', compact('vehicles', 'viewMode'));
// })->name('vehicle-listings');

// car details route (static view)
Route::get('/car-details', function () {
    $vehicles = Vehicle::get();
    return view('public-site.car-details', compact('vehicles'));
})->name('car-details');

Route::get('/contact', function () {
    $vehicles = Vehicle::get();
    return view('public-site.contact', compact('vehicles'));
})->name('contact');

 Route::get('/vehicle/{id}', function ($id) {
    $vehicle = Vehicle::findOrFail($id);
    $vehicles = Vehicle::get();

    // Build related vehicles list: try same make or body, exclude current, include similar price range
    $query = Vehicle::where('id', '!=', $vehicle->id);
    $query->where(function($q) use ($vehicle) {
        if (!empty($vehicle->make)) {
            $q->orWhere('make', $vehicle->make);
        }
        if (!empty($vehicle->body)) {
            $q->orWhere('body', $vehicle->body);
        }
        if (!empty($vehicle->price)) {
            $min = max(0, $vehicle->price * 0.8);
            $max = $vehicle->price * 1.2;
            $q->orWhereBetween('price', [$min, $max]);
        }
    });

    $related = $query->orderBy('created_at', 'desc')->take(3)->get();

    // Prepare component items array
    $relatedItems = $related->map(function($v) {
        $img = $v->main_image ?? $v->image_2 ?? $v->image_3 ?? $v->image_4 ?? $v->image_5;
        $imagePath = $img ? 'uploads/vehicles/' . $img : 'NewAssts/media/widget-post/1.jpg';
        $title = trim(($v->make ?? '') . ' ' . ($v->model ?? '')) ?: 'Vehicle';
        $price = $v->price ? 'Rs. ' . number_format($v->price, 0) : 'N/A';
        $description = isset($v->description) ? \Illuminate\Support\Str::limit(strip_tags($v->description), 45) : '';
        return [
            'image' => $imagePath,
            'title' => $title,
            'price' => $price,
            'description' => $description,
            'route' => route('vehicle.details', $v->id),
        ];
    })->toArray();

    // If no related items, leave empty to show fallback
    if (empty($relatedItems)) {
        $relatedItems = [];
    }

    // Use the existing car-details view, passing single vehicle and relatedItems
    return view('public-site.car-details', compact('vehicle', 'vehicles', 'relatedItems'));
})->name('vehicle.details');

// Remove view-mode toggle route - feature removed in UI


Route::get('/vehicle-listings', [VehicleController::class, 'publicListingsFilter'])->name('vehicle-listings');

Route::get('/listings-top-filter', function () {
    $viewMode = session('view_mode', 'grid');

    $query = Vehicle::query();

    // Search
    if ($search = request('search')) {
        $query->where('model', 'like', "%$search%");
    }

    // Price Range (expected format: "0 - 40000000000")
    if ($range = request('price_range')) {
        [$min, $max] = explode('-', str_replace(',', '', $range));
        $query->whereBetween('price', [floatval($min), floatval($max)]);
    }

    // Sorting
    switch (request('sort')) {
        case 'price_asc':
            $query->orderBy('price', 'asc');
            break;
        case 'price_desc':
            $query->orderBy('price', 'desc');
            break;
        case 'name_asc':
            $query->orderBy('model', 'asc');
            break;
        case 'name_desc':
            $query->orderBy('model', 'desc');
            break;
    }

    // Pagination
    $vehicles = $query->paginate(request('per_page', 4))->appends(request()->query());

    return request()->ajax()
    ? view('public-site.partials.vehicle-results', compact('vehicles', 'viewMode'))
    : view('public-site.car-details', compact('vehicles', 'viewMode'));

});


/*
============================
    Table Loading Routes
============================
*/

// vehicle table loading (admin dash)
Route::get('/vehicle-table', function () {
    return view('admin-dashboard.partials.vehicle-table', ['vehicles' => Vehicle::orderBy('created_at', 'desc')->paginate(30)]);
})->name('vehicle.table');

// year table loading (admin dash)
Route::get('/years-table', function () {
    return view('admin-dashboard.partials.attribute-table', ['attributes' => Year::all()]);
})->name('year.table');

// condition table loading (admin dash)
Route::get('/conditions-table', function () {
    return view('admin-dashboard.partials.attribute-table', ['attributes' => Condition::all()]);
})->name('condition.table');

// make table loading (admin dash)
Route::get('/makes-table', function () {
    return view('admin-dashboard.partials.attribute-table', ['attributes' => Make::all()]);
})->name('make.table');

// transmission table loading (admin dash)
Route::get('/transmissions-table', function () {
    return view('admin-dashboard.partials.attribute-table', ['attributes' => Transmission::all()]);
})->name('transmission.table');

// body table loading (admin dash)
Route::get('/bodies-table', function () {
    return view('admin-dashboard.partials.attribute-table', ['attributes' => Body::all()]);
})->name('body.table');

// color table loading (admin dash)
Route::get('/colors-table', function () {
    return view('admin-dashboard.partials.attribute-table', ['attributes' => Color::all()]);
})->name('color.table');

/*
============================
    Email Testing Routes
============================
*/

// test email sending
Route::get('/test-email', function () {
    $testData = [
        'first_name' => 'First',
        'last_name' => 'Last',
        'email_address' => 'udaraneminda@gmail.com',
        'special_requests' => 'This is a test email.',
        'phone_number' => '91991',
        'preferred_date' => '20-07-2025',
        'preferred_time' => '09:00 AM',
    ];

    try {
        Mail::to('udaraneminda@gmail.com')->send(new BookingConfirmation($testData));
        return 'Email sent successfully!';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});

/*
=====================
      middleware
=====================
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        $vehicles = Vehicle::orderBy('created_at', 'desc')->paginate(10);
        return view('admin-dashboard.new-admin', compact('vehicles'));
    })->name('dashboard');

    Route::get('/attributes-manager', function () {
        $attributes = Year::get();
        return view('admin-dashboard.new-admin-attributes', compact('attributes'));
    })->name('dashboard');

    Route::get('/admin/attributes/fetch', function (Request $request) {
        $type = $request->input('type');

        $attributes = match ($type) {
            'makes' => Make::all(),
            'conditions' => Condition::all(),
            'transmissions' => Transmission::all(),
            'bodies' => Body::all(),
            'years' => Year::all(),
            'colors' => Color::all(),
            default => collect(),
        };

        return response()->json($attributes);
    });


    Route::get('/account', function () {
        return view('admin-dashboard.new-admin-account');
    })->name('dashboard.account');

    Route::put('/account/update', [UserController::class, 'update'])->name('account.update');

    Route::get('/makes', [MakeController::class, 'index']);
    Route::post('/makes', [MakeController::class, 'store']);
    Route::put('/makes/{id}', [MakeController::class, 'update']);

    Route::get('/bodies', [BodyController::class, 'index']);
    Route::post('/bodies', [BodyController::class, 'store']);
    Route::put('/bodies/{id}', [BodyController::class, 'update']);

    Route::get('/transmissions', [TransmissionController::class, 'index']);
    Route::post('/transmissions', [TransmissionController::class, 'store']);
    Route::put('/transmissions/{id}', [TransmissionController::class, 'update']);

    Route::get('/conditions', [ConditionController::class, 'index']);
    Route::post('/conditions', [ConditionController::class, 'store']);
    Route::put('/conditions/{id}', [ConditionController::class, 'update']);

    Route::get('/colors', [ColorController::class, 'index']);
    Route::post('/colors', [ColorController::class, 'store']);
    Route::put('/colors/{id}', [ColorController::class, 'update']);

    Route::get('/years', [YearController::class, 'index']);
    Route::post('/years', [YearController::class, 'store']);
    Route::put('/years/{id}', [YearController::class, 'update']);
});
