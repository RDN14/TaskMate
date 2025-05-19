<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskMate - Pengaturan Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .header-bg {
            background-color: #24225a;
            height: 130px;
            position: relative;
        }
        
        .dot-pattern {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 300px;
            opacity: 0.2;
            background-image: radial-gradient(circle, #ffffff 2px, transparent 2px);
            background-size: 15px 15px;
        }
        
        .profile-picture {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
        }
        
        .profile-section {
            margin-top: -65px;
        }
        
        .app-logo {
            width: 40px;
            height: 40px;
            background-color: #6c5ce7;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
        }
        
        .password-field {
            position: relative;
        }
        
        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }
        
        .btn-primary {
            background-color: #6c5ce7;
            border-color: #6c5ce7;
        }
        
        .btn-danger {
            background-color: #ff4d4d;
            border-color: #ff4d4d;
        }
        
        .profile-header {
            display: flex;
            align-items: center;
        }
        
        .profile-avatar {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .upload-btn {
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(108, 92, 231, 0.8);
            color: white;
            border: none;
            border-radius: 4px;
            padding: 4px 10px;
            font-size: 14px;
        }
    </style>
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
              <img src="{{ asset('images/logo-taskmate.png') }}" alt="Logo" class="logo" style="height: 32px;">
              <span class="ms-2 fw-bold fs-5">TaskMate</span>
            </a>
            <div class="d-flex align-items-center ms-auto">
                <span class="me-3 text-muted">11 April 2025</span>
                <div class="dropdown">
                    <img src="https://i.pravatar.cc/150?img=12" class="rounded-circle" width="32" height="32" alt="User" data-bs-toggle="dropdown">
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="header-bg">
        <div class="dot-pattern"></div>
    </div>

    <!-- Main Content -->
    <div class="container profile-section">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-sm mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://i.pravatar.cc/150?img=12" class="profile-avatar" alt="Profile">
                            <div>
                                <h5 class="mb-0">Ahmad Kasim</h5>
                                <p class="text-muted mb-0">ronaldo@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Account Settings -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Pengaturan Akun</h5>
                        <form>
                            <div class="position-relative mb-4">
                                <div class="text-center mb-3">
                                    <img src="https://i.pravatar.cc/150?img=12" class="profile-picture" alt="Profile Picture">
                                    <button type="button" class="upload-btn">
                                        <i class="fas fa-upload me-1"></i> Upload Photo
                                    </button>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="firstName" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="firstName" value="Ronaldo">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Nama Belakang</label>
                                    <input type="text" class="form-control" id="lastName" value="Pascol">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" value="Ronaldo">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="ronaldo@gmail.com">
                            </div>

                            <div class="mb-4">
                                <label for="phone" class="form-label">No Handphone</label>
                                <input type="tel" class="form-control" id="phone" value="0812 2823 2292">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Password Change -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Ganti Kata Sandi</h5>
                        <form>
                            <div class="mb-3">
                                <label for="currentPassword" class="form-label">Kata Sandi Lama</label>
                                <div class="password-field">
                                    <input type="password" class="form-control" id="currentPassword">
                                    <i class="fas fa-eye eye-icon"></i>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="newPassword" class="form-label">Kata Sandi Baru</label>
                                <div class="password-field">
                                    <input type="password" class="form-control" id="newPassword">
                                    <i class="fas fa-eye eye-icon"></i>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="confirmPassword" class="form-label">Konfirmasi Kata Sandi</label>
                                <div class="password-field">
                                    <input type="password" class="form-control" id="confirmPassword">
                                    <i class="fas fa-eye eye-icon"></i>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Ubah Kata Sandi</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="text-end mb-5">
                    <button class="btn btn-danger">Keluar</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-4 bg-dark text-center text-white-50">
        <div class="container">
            <small>&copy; 2025 - TaskMate. Designed by TaskMate Designer</a>. All rights reserved</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.eye-icon').forEach(icon => {
            icon.addEventListener('click', function() {
                const input = this.previousElementSibling;
                if (input.type === 'password') {
                    input.type = 'text';
                    this.classList.remove('fa-eye');
                    this.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    this.classList.remove('fa-eye-slash');
                    this.classList.add('fa-eye');
                }
            });
        });
    </script>
</body>
</html>