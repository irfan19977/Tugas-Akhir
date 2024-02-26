<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('home.contact');
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
        $contact->status = 'belum dibaca';
        $contact->content = $request->content;
        $contact->save();

        // Jika data berhasil disimpan, kembalikan response dengan pesan sukses
        return redirect()->back()->with('message', 'Pesan Anda telah berhasil dikirim dan disimpan. Terima kasih!');
    }

    public function markAsRead($id)
    {
        // Temukan pesan berdasarkan ID
        $message = Contact::findOrFail($id);
        
        // Ubah status pesan menjadi "sudah dibaca"
        $message->status = 'sudah dibaca';
        $message->save();

        // Kirim respons kembali ke klien
        return response()->json(['message' => 'Pesan telah ditandai sebagai sudah dibaca']);
    }

}
