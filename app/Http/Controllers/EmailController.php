<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('home.contact');
    }

    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'no_wa' => 'required',
            'content' => 'required',
        ]);

        // Simpan data ke dalam database
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->no_wa = $request->no_wa;
        $contact->content = $request->content;
        $contact->save();

        // Jika data berhasil disimpan, kembalikan response dengan pesan sukses
        return redirect()->back()->with('message', 'Pesan Anda telah berhasil dikirim dan disimpan. Terima kasih!');
    }

}