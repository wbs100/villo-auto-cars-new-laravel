<?php

namespace App\Http\Controllers;

use App\Models\ImportInquiry;
use App\Models\Year;
use App\Models\Make;
use App\Models\Body;
use App\Models\Color;
use App\Models\Condition;
use App\Models\Transmission;
use Illuminate\Http\Request;

class ImportInquiryController extends Controller
{
    public function index()
    {
        $years = Year::orderBy('name', 'desc')->get();
        $makes = Make::orderBy('name')->get();
        $bodies = Body::orderBy('name')->get();
        $colors = Color::orderBy('name')->get();
        $conditions = Condition::orderBy('name')->get();
        $transmissions = Transmission::orderBy('name')->get();

        $inquiries = ImportInquiry::orderBy('created_at', 'desc')->paginate(15);

        // Use the layout wrapper page to include admin header, footer and CSS
        return view('admin-dashboard.new-admin-inquiries', compact('years', 'makes', 'bodies', 'colors', 'conditions', 'transmissions', 'inquiries'));
    }

    public function table()
    {
        $inquiries = ImportInquiry::orderBy('created_at', 'desc')->paginate(10);
        return view('admin-dashboard.partials.inquiry-table', compact('inquiries'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'brand' => 'required|string|max:255',
            'model' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:255',
            'condition' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        ImportInquiry::create($data);

        return response()->json(['message' => 'Inquiry created successfully.'], 201);
    }

    public function destroy($id)
    {
        $inquiry = ImportInquiry::findOrFail($id);
        $inquiry->delete();

        return response()->json(['message' => 'Inquiry deleted successfully.']);
    }
}

