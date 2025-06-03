<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Sneakers | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome & Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Tailwind + Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
            background: linear-gradient(to bottom, #ef4444, #000000);
        }
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="py-3 bg-white shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="logo d-flex align-items-center text-decoration-none" href="{{ url('/') }}">
                <img src="{{ asset('home_asset/img/logo.png') }}" alt="logo" style="height: 40px;" class="me-2">
                <span class="fw-bold fs-4 text-black">E-Sneakers</span>
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div id="loginCard" class="card shadow-sm transition-all duration-700"
                         style="opacity: 0; transform: translateY(2rem); transition: opacity 0.6s ease-out, transform 0.6s ease-out;">
                        <div class="card-body p-4">
                            <h2 class="text-center mb-4 text-danger fw-bold">Log in to your account</h2>

                            <!-- Session Status -->
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <!-- Form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email') }}" required autofocus>
                                    @error('email')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                                    @error('password')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" name="remember" id="remember_me">
                                    <label class="form-check-label" for="remember_me">Remember me</label>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    @if (Route::has('password.request'))
                                        <a class="text-decoration-none text-muted" href="{{ route('password.request') }}">
                                            Forgot password?
                                        </a>
                                    @endif

                                    <button type="submit" class="btn btn-danger px-4">
                                        <i class="fas fa-sign-in-alt me-1"></i> Log In
                                    </button>
                                </div>
                            </form>

                            <div class="mt-4 text-center">
                                <small class="text-muted">Don't have an account?</small>
                                <a href="{{ route('register') }}" class="text-danger text-decoration-none ms-1">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer fijo abajo -->
    <footer class="text-center py-4 bg-dark text-white mt-auto">
        <small>&copy; {{ date('Y') }} E-Sneakers. All rights reserved.</small>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const card = document.getElementById('loginCard');
            if (card) {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100);
            }
        });
    </script>
</body>
</html>