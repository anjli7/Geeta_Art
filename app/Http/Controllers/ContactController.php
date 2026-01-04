<?php

namespace App\Http\Controllers;

use App\Services\HeroBannerService;
use App\Models\Contact;
use App\Models\HeroBanner;  
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        // FORM SUBMIT (POST)
        if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'number' => 'nullable|string',
                'message' => 'required|string|min:5',
            ]);

            Contact::create([
                'name'    => $request->name,
                'email'   => $request->email,
                'number'   => $request->number,
                'message' => $request->message,
            ]);

            // PAGE RELOAD + SUCCESS MESSAGE
            return redirect()->route('contact');
        }
        // HERO from SERVICE
        $hero = HeroBannerService::get('contact');

        return view('pages.contact', compact('hero'));
    }
}
