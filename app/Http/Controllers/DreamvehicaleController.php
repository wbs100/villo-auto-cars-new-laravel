<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Make;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactFormMail;
use App\Models\ImportInquiry;

class DreamvehicaleController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request (server-side)
        $rules = [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'brand' => 'required|string',
            'model' => 'nullable|string|max:255',
            'year' => 'nullable|string',
            'color' => 'nullable|string',
            'condition' => 'required|string',
            'message' => 'nullable|string',
        ];

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['success' => false, 'message' => 'Validation failed', 'errors' => $validator->errors()], 422);
            }
            return back()->withErrors($validator)->withInput();
        }
        $validated = $validator->validated();

        // Create the inquiry inside a transaction. Sending email should NOT prevent persistence;
        // if mail fails we'll log it but still return success to the user.
        try {
            DB::beginTransaction();
            $inquiry = ImportInquiry::create($validated);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Failed to create import inquiry: ' . $e->getMessage());

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['success' => false, 'message' => 'Failed to submit your inquiry. Please try again later.'], 500);
            }
            return back()->with('error', 'Failed to submit your inquiry. Please try again later.');
        }

        // Attempt to send notification email but do not fail the request if mailer is down.
        try {
            Mail::to('admin@example.com')->send(new ContactFormMail($validated)); // Adjust email as needed
        } catch (\Exception $e) {
            Log::error('Import inquiry saved but failed to send email notification: ' . $e->getMessage());
            // continue without interrupting the user flow
        }

        // If this is an AJAX request, return JSON; otherwise redirect back with success message
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Your import inquiry has been submitted successfully!']);
        }

        return back()->with('success', 'Your import inquiry has been submitted successfully!');
    }
}
