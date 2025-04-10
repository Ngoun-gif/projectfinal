<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register - SB Admin 2</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('dashboard-template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('dashboard-template/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        .auth-image-container {
            height: 100%;
            min-height: 500px;
            position: relative;
            overflow: hidden;
            padding: 0;
            margin: 0;
        }

        .auth-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.5s ease;
            display: block;
        }

        .form-container {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        @media (max-width: 991.98px) {
            .auth-image-container {
                min-height: 300px;
            }
            .form-container {
                padding: 2rem;
            }
        }

        .btn-register {
            padding: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            font-size: 0.85rem;
        }

        .form-control-user {
            border-radius: 0.5rem;
            padding: 1rem;
            border: 1px solid #e2e8f0;
            transition: all 0.3s;
        }

        .form-control-user:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
        }

        .auth-title {
            font-weight: 700;
            margin-bottom: 1rem;
            color: #2d3748;
        }
    </style>
</head>

<body class="bg-gradient-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-xl-10 col-lg-12">
                <div class="card overflow-hidden shadow-lg">
                    <div class="row g-0">
                        <!-- Image Section -->
                        <div class="col-lg-6 d-none d-lg-block p-0">
                            <div class="auth-image-container">
                                <img src="{{ asset('dashboard-template/img/login-1390241095-2048x2048.jpg') }}" alt="Register Visual" class="auth-image">
                            </div>
                        </div>

                        <!-- Form Section -->
                        <div class="col-lg-6">
                            <div class="form-container">
                                <div class="text-center mb-4">
                                    <h1 class="h3 auth-title">Create an Account!</h1>
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control form-control-user"
                                               name="name" value="{{ old('name') }}"
                                               placeholder="Full Name" required>
                                        @error('name')
                                            <div class="text-danger mt-2 small">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group mb-4">
                                        <input type="email" class="form-control form-control-user"
                                               name="email" value="{{ old('email') }}"
                                               placeholder="Email Address" required>
                                        @error('email')
                                            <div class="text-danger mt-2 small">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                   name="password" placeholder="Password" required>
                                            @error('password')
                                                <div class="text-danger mt-2 small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                   name="password_confirmation" placeholder="Repeat Password" required>
                                        </div>
                                    </div>

                                    <!-- Language Selector -->
                                    {{-- <div class="form-group mb-4">
                                        <select id="language" name="language" class="form-control form-control-user" required>
                                            <option value="" disabled selected>Select Language</option>
                                            <option value="kh" {{ old('language') == 'kh' ? 'selected' : '' }}>Khmer</option>
                                            <option value="en" {{ old('language') == 'en' ? 'selected' : '' }}>English</option>
                                        </select>
                                        @error('language')
                                            <div class="text-danger mt-2 small">{{ $message }}</div>
                                        @enderror
                                    </div> --}}

                                    <!-- Redesigned Language Selector -->
                                    <div class="form-group mb-4">
                                        <select id="language" name="language" class="form-control form-control-user" required style="height: calc(1.5em + 1.5rem + 2px); padding: 0.75rem 1rem; color: #6e707e; border: 1px solid #d1d3e2; font-size: 0.9rem;">
                                            <option value="" disabled selected>Select Language</option>
                                            <option value="kh" {{ old('language') == 'kh' ? 'selected' : '' }}>Khmer</option>
                                            <option value="en" {{ old('language') == 'en' ? 'selected' : '' }}>English</option>
                                        </select>
                                        @error('language')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-register btn-block mb-4">
                                        Register Account
                                    </button>
                                </form>

                                <hr>


                                <div class="text-center">
                                    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('dashboard-template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard-template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard-template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('dashboard-template/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
