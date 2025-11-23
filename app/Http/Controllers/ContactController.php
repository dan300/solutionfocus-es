<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'required|string',
        ]);

        // Send email notification
        try {
            Mail::send('emails.contact', $validated, function ($message) use ($validated) {
                $message->to(config('mail.from.address'))
                    ->subject('New Contact Form Submission from ' . $validated['name']);
                $message->replyTo($validated['email'], $validated['name']);
            });

            return back()->with('success', '¡Gracias! Tu mensaje ha sido enviado correctamente.');
        } catch (\Exception $e) {
            return back()->with('error', 'Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.');
        }
    }
}
