<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Tugas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .task-card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      padding: 20px;
      margin-top: 40px;
    }
    .btn-primary {
      background-color: #6366f1;
      border: none;
    }
    .btn-disabled {
      background-color: #d3d3d3;
      border: none;
      cursor: not-allowed;
      color: white;
    }
    .comment-box {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 10px;
    }
    .footer {
      background-color: #1a1a1a;
      color: #ccc;
      padding: 10px 0;
      position: absolute;
      width: 100%;
      bottom: 0;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-light bg-white border-bottom shadow-sm px-4">
  <a class="navbar-brand" href="#">To Do List</a>
  <form class="d-flex ms-auto me-3">
    <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
  </form>
  <span class="me-3">11 April 2025</span>
  <img src="https://via.placeholder.com/40" class="rounded-circle" alt="Profile">
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h4 class="mt-4">Desain UI Landing Page</h4>
      <div class="task-card">
        <ul class="list-unstyled">
          <li><strong>Status:</strong> ⏳ Belum Selesai</li>
          <li><strong>Deadline:</strong> 📅 14 April 2025, 17:00</li>
          <li><strong>Prioritas:</strong> 🚩 Tinggi</li>
          <li><strong>Kategori:</strong> 🎨 Desain</li>
          <li><strong>Dibuat oleh:</strong> Ardy Febriansyah</li>
          <li><strong>Tanggal dibuat:</strong> 9 April 2025</li>
        </ul>
        <h6 class="mt-3">Deskripsi Tugas</h6>
        <p>
          Desain halaman landing untuk aplikasi mental health Peacebuddy. Fokus pada:
          <ul>
            <li>Section Hero, Fitur, dan Call to Action</li>
            <li>Gunakan warna calming (biru, hijau muda)</li>
            <li>Harus responsive untuk mobile & desktop</li>
          </ul>
        </p>
        <div class="text-end">
          <button class="btn btn-light border"><i class="bi bi-pencil"></i></button>
        </div>
      </div>
      <div class="mt-3">
        <button class="btn btn-secondary btn-disabled" disabled>Edit Tugas</button>
        <button class="btn btn-primary">Simpan</button>
      </div>
    </div>
    <div class="col-md-4 mt-4">
      <h6>Komentar</h6>
      <div class="comment-box mb-2">
        <textarea class="form-control" placeholder="Type your comment here"></textarea>
        <div class="text-end mt-2">
          <button class="btn btn-sm btn-primary">Publish</button>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer text-center mt-5">
  <div class="container">
    <small>© 2021 - To Do List. Designed by <strong>TaskMate Designer</strong>. All rights reserved</small>
  </div>
</footer>

<!-- Bootstrap Icons (optional) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
