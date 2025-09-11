<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterSubscribedMail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        $newsletter = Newsletter::create([
            'email' => $request->email,
        ]);

        // ✅ Envoi du mail de confirmation
        Mail::to($newsletter->email)->send(new NewsletterSubscribedMail($newsletter->email));

        return back()->with('success', 'Merci pour votre inscription ! Un email de confirmation vous a été envoyé.');
    }
}

