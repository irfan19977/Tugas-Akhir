@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<div class="card-header" style="padding-left: 50px;">
    <strong> {{ __('Selamat Datang, ') }}{{ auth()->user()->name }}</strong>
</div>

 
                <div class="card-body"  style="padding-left: 50px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                     <strong> {{ __('You are logged in!') }} <a href="/dashboard"> <strong>Go to Dashboard </strong></a>  </strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
