<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Sekolah</title>

    <link href="{{ asset('hekel/assets/img/tut-wuri.png') }}" rel="icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>

<body style="background: #e2e8f0">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <!-- Registration Form -->
                                <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate="">
                                    @csrf
                                    <div class="form-group">
                                        <label>NAMA USER</label>
                                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama User"
                                            class="form-control @error('name') is-invalid @enderror" required>
                                        <span id="name-error" class="invalid-feedback" role="alert"></span>
                                        @error('name')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                
                                    <div class="form-group">
                                        <label>EMAIL</label>
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan Email"
                                            class="form-control @error('email') is-invalid @enderror" required>
                                        <span id="email-error" class="invalid-feedback" role="alert"></span>
                                        @error('email')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                
                                    <div class="form-group">
                                        <label>PASSWORD</label>
                                        <input type="password" name="password" value="{{ old('password') }}" placeholder="Masukkan Password"
                                            class="form-control @error('password') is-invalid @enderror" required>
                                        <span id="password-error" class="invalid-feedback" role="alert"></span>
                                        @error('password')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                
                                    <div class="form-group">
                                        <label>KONFIRMASI PASSWORD</label>
                                        <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"
                                            placeholder="Masukkan Konfirmasi Password" class="form-control" required>
                                        <span id="confirm-password-error" class="invalid-feedback" role="alert"></span>
                                    </div>
                                
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Register
                                        </button>
                                    </div>
                                </form>
                                
                                <div class="text-center">
                                    <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Custom Validation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.querySelector('form');

            form.addEventListener('submit', function (event) {
                var name = document.querySelector('input[name="name"]').value;
                var email = document.querySelector('input[name="email"]').value;
                var password = document.querySelector('input[name="password"]').value;
                var confirmPassword = document.querySelector('input[name="password_confirmation"]').value;

                var nameError = document.getElementById('name-error');
                var emailError = document.getElementById('email-error');
                var passwordError = document.getElementById('password-error');
                var confirmPasswordError = document.getElementById('confirm-password-error');

                if (!name) {
                    event.preventDefault();
                    nameError.textContent = 'Pelase fill out this field';
                } else {
                    nameError.textContent = '';
                }

                if (!email) {
                    event.preventDefault();
                    emailError.textContent = 'Pelase fill out this field';
                } else if (!email.includes('@')) {
                    event.preventDefault();
                    emailError.textContent = 'Please include an "@" in the email address. "a" is missing an "@". ';
                } else {
                    emailError.textContent = '';
                }

                if (!password) {
                    event.preventDefault();
                    passwordError.textContent = 'Pelase fill out this field';
                } else {
                    passwordError.textContent = '';
                }

                if (!confirmPassword) {
                    event.preventDefault();
                    confirmPasswordError.textContent = 'Pelase fill out this field';
                } else {
                    confirmPasswordError.textContent = '';
                }
            });
        });
    </script>
</body>

</html>
