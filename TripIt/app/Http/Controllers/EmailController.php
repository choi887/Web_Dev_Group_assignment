<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InquiryResponseMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendInquiryResponse(Request $request)
    {
        $validatedData = $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone-number' => 'nullable|string|max:20',
            'message' => 'required|string|max:5000',
        ]);

        $name = $validatedData['first-name'] . ' ' . $validatedData['last-name'];
        $response = 'Thank you for reaching out. We have received your inquiry and will get back to you shortly.';
        $enquiry_id = '123456';

        Mail::to($validatedData['email'])->send(new InquiryResponseMail($name, $response, $enquiry_id));

        return back()->with('success', 'Thank you for your inquiry. We will get back to you soon.');
    }
}
