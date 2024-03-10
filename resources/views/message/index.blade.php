@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kontak masuk</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4>Daftar Pesan</h4>
                    <div class="card-header-action">
                        {{-- <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a> --}}
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Wa</th>
                                    <th>Status</th>
                                    <th>Waktu Pengiriman</th>
                                    <th>Aksi</th>
                                </tr>

                            </tbody>
                            @foreach ($messages as $message)
                              <tr>

                                  <td class="font-weight-600">{{ $message->name }}</td>
                                  <td>
                                    @php
                                        // Mengecek apakah nomor WhatsApp sudah memiliki kode negara
                                        $whatsappNumber = $message->no_wa;
                                        if (!preg_match('/^\+/', $whatsappNumber)) {
                                            // Jika tidak, tambahkan kode negara Indonesia
                                            $whatsappNumber = '+62' . ltrim($whatsappNumber, '0');
                                        }
                                    @endphp
                                    <a href="https://wa.me/{{ $whatsappNumber }}">{{ $message->no_wa }}</a>
                                </td>
                                
                                  @if ($message->status == 'belum dibaca')
                                  <td>
                                      <div class="badge badge-info">Pesan Belum Dibaca</div>
                                  </td>
                                  @elseif ($message->status == 'dibalas')
                                  <td>
                                      <div class="badge badge-success">Pesan Dibalas</div>
                                  </td>
                                  @else
                                  <td>
                                      <div class="badge badge-light">Pesan Dibaca</div>
                                  </td>
                                  @endif

                                  <td>{{ $message->created_at->diffForHumans() }}</td>
                                  <td>
                                      <a href="{{ route('message.show', $message->id) }}" class="btn btn-primary" onclick="markAsRead({{ $message->id }})">Detail</a>
                                  </td>

                              </tr> 
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @endsection
