<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index()
    {
        // Get the first contact or create a default one if table is empty
        $contact = Contact::first();
        if (!$contact) {
            $contact = Contact::create([
                'name' => 'Global Contact',
                'phone' => '628115239999',
                'message' => 'Halo Admin Tokabe',
            ]);
        }
        return view('admin.contact.index', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'phone' => 'required|string',
            'email' => 'nullable|email',
            'location' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        $contact = Contact::findOrFail($id);
        
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->location = $request->location;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->route('contact-admin')->with('success', 'Pengaturan Kontak berhasil diperbarui');
    }
}
