<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - TaskMate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-box {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            padding: 30px;
        }
        .login-img {
            max-width: 100%;
        }
    </style>
</head>
<body>
<div class="container login-container">
    <div class="row w-100">
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="login-box w-75">
                <div class="text-center mb-4">
                    <h2><strong>Login</strong></h2>
                    <p class="text-muted">Masuk untuk mengakses akun TaskMate Anda</p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required autofocus>
                        @error('email')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <div class="mt-3 text-center">
                    <span>Tidak Punya Akun TaskMate? <a href="/register" class="text-danger">Daftar</a></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center">
            <img src="{{ asset('images/login-image.png') }}" alt="Login Illustration" class="login-img">
        </div>
    </div>
</div>
</body>
</html>
