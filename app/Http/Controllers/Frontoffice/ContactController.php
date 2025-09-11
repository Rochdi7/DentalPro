<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:30',
            'message' => 'required|string|max:1000',
        ]);

        $data = $request->only('name', 'email', 'phone', 'message');

        // Log des données reçues
        Log::info('📩 Contact form submission:', $data);

        try {
            // Envoi de l'email vers TON Gmail
            Mail::to('rochdi.karouali1234@gmail.com')->send(new ContactMail($data));

            Log::info('✅ Contact email sent successfully to rochdi.karouali1234@gmail.com');

            return back()->with('success', 'Votre message a été envoyé avec succès. Merci de nous avoir contactés !');
        } catch (\Exception $e) {
            // Log de l'erreur
            Log::error('❌ Contact email failed: ' . $e->getMessage());

            return back()->with('error', 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer plus tard.');
        }
    }
}
