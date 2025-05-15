<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pengaturan Akun</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4fbf9;
    }
    .profile-banner {
      background: #1a1a3f;
      padding: 40px 0;
      margin-bottom: -50px;
    }
    .profile-card {
      background: white;
      border-radius: 8px;
      padding: 20px;
      margin-top: -80px;
    }
    .form-section {
      padding: 30px 0;
    }
    .profile-photo {
      max-width: 200px;
      aspect-ratio: 1 / 1;
      object-fit: cover;
      border-radius: 8px;
    }
    .form-control:focus {
      box-shadow: none;
    }
    .footer {
      background-color: #1a1a1a;
      color: #ccc;
      padding: 10px 0;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-light bg-white border-bottom shadow-sm px-4">
  <a class="navbar-brand" href="#">To Do List</a>
  <form class="d-flex ms-auto me-3">
    <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
  </form>
  <span class="me-3">11 April 2025</span>
  <img src="https://via.placeholder.com/40" class="rounded-circle" alt="Profile">
</nav>

<!-- Profile Banner -->
<div class="profile-banner text-center"></div>

<!-- Profile Card -->
<div class="container">
  <div class="profile-card text-center">
    <img src="https://via.placeholder.com/80" class="rounded-circle mb-2" alt="Profile">
    <h5>Ahmad Kasim</h5>
    <p class="text-muted">ronaldo@gmail.com</p>
  </div>
</div>

<!-- Form Section -->
<div class="container form-section">
  <div class="row">
    <!-- Left: Upload Photo -->
    <div class="col-md-4 text-center">
      <img src="https://via.placeholder.com/200" class="profile-photo mb-3" alt="Upload">
      <div class="mb-2">
        <button class="btn btn-outline-dark btn-sm">Upload Photo</button>
      </div>
      <small class="text-muted">Ukuran gambar harus di bawah 1MB dan rasio gambar harus 1:1</small>
    </div>

    <!-- Right: Info Form -->
    <div class="col-md-8">
      <h5>Pengaturan Akun</h5>
      <div class="row mb-3">
        <div class="col">
          <label>Nama Lengkap</label>
          <input type="text" class="form-control" value="Ronaldo">
        </div>
        <div class="col">
          <label>Pascol</label>
          <input type="text" class="form-control" value="Pascol">
        </div>
      </div>
      <div class="mb-3">
        <label>Username</label>
        <input type="text" class="form-control" value="Ronaldo">
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control" value="ronaldo@gmail.com">
      </div>
      <div class="mb-3">
        <label>No Handphone</label>
        <input type="text" class="form-control" value="0812 2823 2292">
      </div>
      <button class="btn btn-primary">Simpan Perubahan</button>
    </div>
  </div>

  <!-- Password Change -->
  <div class="mt-5">
    <h5>Ganti Kata Sandi</h5>
    <div class="mb-3">
      <label>Kata Sandi Lama</label>
      <div class="input-group">
        <input type="password" class="form-control" placeholder="Kata Sandi Lama">
        <span class="input-group-text"><i class="bi bi-eye"></i></span>
      </div>
    </div>
    <div class="mb-3">
      <label>Kata Sandi Baru</label>
      <div class="input-group">
        <input type="password" class="form-control" placeholder="Kata Sandi">
        <span class="input-group-text"><i class="bi bi-eye"></i></span>
      </div>
    </div>
    <div class="mb-3">
      <label>Konfirmasi Kata Sandi</label>
      <div class="input-group">
        <input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi Baru">
        <span class="input-group-text"><i class="bi bi-eye"></i></span>
      </div>
    </div>
    <button class="btn btn-primary">Ubah Kata Sandi</button>
  </div>

  <!-- Logout -->
  <div class="text-end mt-4">
    <a href="{{ route('home') }}" class="btn btn-danger" >Keluar</></a>
  </div>
</div>

<!-- Footer -->
<footer class="footer text-center mt-5">
  <div class="container">
    <small>© 2021 - To Do List. Designed by <strong>TaskMate Designer</strong>. All rights reserved</small>
    <div class="mt-2">
      <select class="form-select d-inline-block w-auto">
        <option selected>Indonesia</option>
        <option>English</option>
      </select>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
