<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }} - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('dashboard-template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('dashboard-template/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        .auth-image-container {
            height: 100%;
            min-height: 500px;
            position: relative;
            overflow: hidden;
        }
        .auth-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.5s ease;
        }
        .auth-image:hover {
            transform: scale(1.03);
        }
        .auth-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
        }
        .auth-logo {
            position: absolute;
            top: 30px;
            left: 30px;
            z-index: 2;
            max-height: 50px;
        }
        .form-container {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }
        .auth-title {
            font-weight: 700;
            margin-bottom: 2rem;
            color: #2d3748;
        }
        .btn-login {
            padding: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
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
        .auth-footer {
            margin-top: 2rem;
            text-align: center;
            font-size: 0.9rem;
            color: #718096;
        }
        .auth-link {
            color: #667eea;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s;
        }
        .auth-link:hover {
            color: #5a67d8;
            text-decoration: underline;
        }
        @media (max-width: 991.98px) {
            .auth-image-container {
                min-height: 300px;
            }
            .form-container {
                padding: 2rem;
            }
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
                        <div class="col-lg-6 d-none d-lg-block p-0"> <!-- p-0 removes padding -->
                            <div class="auth-image-container">
                                <img src="{{ asset('dashboard-template/img/login-1390241095-2048x2048.jpg') }}" alt="Login Visual" class="auth-image">
                            </div>
                        </div>
                        

                        {{-- <div class="col-lg-6 d-none d-lg-flex p-0"> <!-- Changed to d-flex -->
                            <div class="auth-image-container w-100">
                                <img src="{{ asset('dashboard-template/img/login-1390241095-2048x2048.jpg') }}" alt="Login Visual" class="auth-image">
                            </div>
                        </div> --}}

                        <!-- Form Section -->
                        <div class="col-lg-6">
                            <div class="form-container">
                                <div class="text-center mb-5">
                                    <h1 class="h3 auth-title">Welcome Back!</h1>
                                    <p class="text-muted">Sign in to continue to your account</p>
                                </div>

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email -->
                                    <div class="mb-4">
                                        <label for="email" class="form-label text-dark">Email Address</label>
                                        <input type="email" class="form-control form-control-user"
                                            id="email" name="email"
                                            value="{{ old('email') }}"
                                            placeholder="Enter your email"
                                            required autofocus>
                                        @error('email')
                                            <div class="text-danger mt-2 small">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-4">
                                        <label for="password" class="form-label text-dark">Password</label>
                                        <input type="password" class="form-control form-control-user"
                                            id="password" name="password"
                                            placeholder="Enter your password"
                                            required>
                                        @error('password')
                                            <div class="text-danger mt-2 small">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                            <label class="form-check-label text-dark" for="remember_me">
                                                Remember Me
                                            </label>
                                        </div>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="auth-link small">
                                            Forgot Password?
                                        </a>
                                        @endif
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" class="btn btn-primary btn-login btn-block w-100 mb-4">
                                        <i class="fas fa-sign-in-alt me-2"></i> Login
                                    </button>
                                    

                                    <!-- Social Login (Optional) -->
                                    <div class="text-center mb-4">
                                        <p class="text-muted small">Or sign in with</p>
                                        <div>
                                            <a href="#" class="btn btn-outline-primary btn-sm me-2">
                                                <i class="fab fa-google"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-primary btn-sm me-2">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-primary btn-sm">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Register Link -->
                                    @if (Route::has('register'))
                                    <div class="auth-footer">
                                        Don't have an account?
                                        <a href="{{ route('register') }}" class="auth-link">Create one</a>
                                    </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('dashboard-template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard-template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard-template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('dashboard-template/js/sb-admin-2.min.js') }}"></script>
</body>
</html>


