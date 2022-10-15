<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Message;
use App\Models\Portfolio;

class FrontendController extends Controller
{
    public function index()
    {
        $images = Image::all();
        $portfolios = Portfolio::all();
        $reviews = Client::all();
        $contact = Contact::findOrFail(1);
        return view('frontend.index', compact('images', 'portfolios', 'reviews', 'contact'));
    }

    public function messageList()
    {
        $messages = Message::all();
        return view('admin.message.index', compact('messages'));
    }

    public function message(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required'],
        ]);

        Message::create($validated);
        return redirect()->back()->with('success', 'Your message has been sent successfully');
    }
}
