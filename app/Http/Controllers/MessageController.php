<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:message.index|message.show|message.single']);
    }

    public function index()
    {
        $messages = Contact::latest()->get();
        return view('message.index', compact('messages'));
    }

    public function show($id)
    {
        $messages = Contact::findOrFail($id); // Gantilah 'Message' dengan model yang sesuai
        
        $whatsappNumber = $messages->no_wa;
        
        $messages->update(['status' => 'sudah dibaca']);

        return view('message.single', compact('messages', 'whatsappNumber')); // Sesuaikan dengan nama view dan variabel yang Anda gunakan
    }

    public function updateStatus(Request $request, $id)
    {
        // Validasi request
        $request->validate([
            'status' => 'required|in:dibalas', // Pastikan status yang diterima hanya "dibaca"
        ]);

        // Temukan pesan berdasarkan ID
        $message = Contact::find($id);

        // Perbarui status pesan menjadi "dibaca"
        $message->status = $request->status;
        $message->save();

        // Respon berhasil
        return response()->json(['message' => 'Status pesan berhasil diperbarui'], 200);
    }
}
