<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PengumumanCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $pengumuman;

    public function __construct($pengumuman)
    {
        $this->pengumuman = $pengumuman;
    }

    public function build()
    {
        $email = $this->subject('Pengumuman Baru')
                      ->view('pengumuman.email');

        // Lampirkan file jika ada
        if ($this->pengumuman->file_id) {
            $email->attach(storage_path('app/public/documents/' . $this->pengumuman->file_id));
        }

        return $email;
    }
}
