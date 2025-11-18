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

// vehicle listings public route
Route::get('/vehicle-listings', function () {
    $vehicles = Vehicle::orderBy('created_at', 'desc')->paginate(9);
    $viewMode = session('view_mode', 'grid');
    return view('public-site.vehicle-listings', compact('vehicles', 'viewMode'));
})->name('vehicle-listings');

Route::get('/contact', function () {
    $vehicles = Vehicle::get();
    return view('public-site.contact', compact('vehicles'));
})->name('contact');

 Route::get('/vehicle/{id}', function ($id) {
    $vehicle = Vehicle::findOrFail($id);
    $vehicles = Vehicle::get();
    return view('public-site.vehicle-details', compact('vehicle', 'vehicles'));
});

Route::post('/set-view-mode', function (Request $request) {
    session(['view_mode' => $request->view_mode]);
    return response()->json(['status' => 'ok']);
})->name('set.view.mode');


Route::get('/listings-filter', function (Request $request) {
    $viewMode = session('view_mode', 'grid');

    $vehicles = Vehicle::query();

    if ($request->filled('year')) {
        $vehicles->whereIn('year', $request->year);
    }

    if ($request->filled('condition')) {
        $vehicles->whereIn('condition', $request->condition);
    }

    if ($request->filled('body')) {
        $vehicles->whereIn('body', $request->body);
    }

    if ($request->filled('make')) {
        $vehicles->whereIn('make', $request->make);
    }

    if ($request->filled('transmission')) {
        $vehicles->whereIn('transmission', $request->transmission);
    }

    if ($request->filled('exterior_color')) {
        $vehicles->whereIn('exterior_color', $request->exterior_color);
    }

    if ($request->filled('interior_color')) {
        $vehicles->whereIn('interior_color', $request->interior_color);
    }

    $vehicles = $vehicles->paginate($request->input('per_page', 9))->appends($request->query());

    return request()->ajax()
    ? view('public-site.partials.vehicle-results', compact('vehicles', 'viewMode'))
    : view('public-site.listings', compact('vehicles', 'viewMode'));
});

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
    $vehicles = $query->paginate(request('per_page', 9))->appends(request()->query());

    return request()->ajax()
    ? view('public-site.partials.vehicle-results', compact('vehicles', 'viewMode'))
    : view('public-site.listings', compact('vehicles', 'viewMode'));

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
