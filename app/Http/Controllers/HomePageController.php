<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function ourOperations()
    {
        return view('pages.operations');
    }

    public function sustainability()
    {
        return view('pages.sustainability');
    }

    public function innovationTechnology()
    {
        return view('pages.innovationTechnology');
    }

    public function investorRelations()
    {
        return view('pages.investorRelations');
    }

    public function newsMedia() 
    {
        return view('pages.news');
    }

    public function careers() 
    {
        return view('pages.careers');
    }

    public function contactUs() 
    {
        return view('pages.contactUs');
    }

    public function submit(Request $request)
    {
        // Honeypot check
        if (!empty($request->input('website'))) {
            return response()->json([
                'status' => 'error',
                'message' => 'Spam detected.'
            ], 403);
        }

        // Validate input
        $validator = Validator::make($request->all(), [
            'name'            => 'required|string|max:100',
            'email'           => 'required|email|max:150',
            'subject'         => 'nullable|string|max:150',
            'message'         => 'nullable|string|max:1000',
            // 'recaptcha_token' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Verify reCAPTCHA token
        // $recaptchaSecret = env('RECAPTCHA_SECRET_KEY');
        // $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'secret'   => $recaptchaSecret,
        //     'response' => $request->recaptcha_token,
        //     'remoteip' => $request->ip(),
        // ]);

        // $recaptcha = $recaptchaResponse->json();
        // if (!$recaptcha['success'] || $recaptcha['score'] < 0.5) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'reCAPTCHA validation failed.'
        //     ], 403);
        // }

        // Save to database or send email here...

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you! Your message has been sent.'
        ]);
    }

}
