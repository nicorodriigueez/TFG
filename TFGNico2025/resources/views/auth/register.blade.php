<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Sneakers | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome & Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            min-height: 100vh;
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
                    <div id="registerCard" class="card shadow-sm"
                         style="opacity: 0; transform: translateY(2rem); transition: opacity 0.6s ease-out, transform 0.6s ease-out;">
                        <div class="card-body p-4">
                            <h2 class="text-center mb-4 text-danger fw-bold">Create an Account</h2>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input id="password" type="password" name="password" required class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Confirm Password -->
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input id="password_confirmation" type="password" name="password_confirmation" required class="form-control">
                                </div>

                                <!-- Submit -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('login') }}" class="text-muted text-decoration-none">
                                        Already registered?
                                    </a>
                                    <button type="submit" class="btn btn-danger px-4">
                                        <i class="fas fa-user-plus me-1"></i> Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center py-4 bg-dark text-white mt-auto">
        <small>&copy; {{ date('Y') }} E-Sneakers. All rights reserved.</small>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const card = document.getElementById('registerCard');
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