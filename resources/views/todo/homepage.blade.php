<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar-brand {
      font-weight: bold;
    }
    .task-card {
      border-radius: 1rem;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .btn-add {
      border-radius: 0.5rem;
    }
  </style>
</head>
<body>

  <nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/Logo (1).png" alt="Bootstrap" width="200" height="50">
    </a>
  </div>
</nav>

  <!-- Content -->
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4>Daftar Tugas</h4>
      <a href="#" class="btn btn-primary btn-add">+ Tambah Tugas</a>
    </div>

    <!-- List of Tasks -->
    <div class="row g-3">
      <div class="col-md-6">
        <div class="card task-card p-3">
          <h5 class="card-title"> TUGAS MULU </h5>
          <p class="card-text text-muted mb-1">Deadline: 10 Mei 2025</p>
          <div class="d-flex justify-content-between">
            <span class="badge bg-success">Selesai</span>
            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card task-card p-3">
          <h5 class="card-title">Laporan RPL</h5>
          <p class="card-text text-muted mb-1">Deadline: 12 Mei 2025</p>
          <div class="d-flex justify-content-between">
            <span class="badge bg-warning text-dark">Belum Selesai</span>
            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>