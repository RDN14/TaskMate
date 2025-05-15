<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Tugas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .detail-card {
      max-width: 700px;
      margin: 50px auto;
      background-color: #fff;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
    }
    .btn-back {
      border-radius: 0.5rem;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light bg-white px-4 py-3 shadow-sm">
      <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="{{ asset('images/logo-taskmate.png') }}" alt="Logo" class="logo">
          <span class="ms-2 fw-bold">TaskMate</span>
      </a>
  </nav>

  <div class="container">
    <div class="detail-card">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Detail Tugas</h4>
        <a href="{{ route('home') }}" class="btn btn-outline-secondary btn-sm btn-back">Kembali</a>
      </div>

      <h5 class="fw-bold">TUGAS MULU</h5>
      <p class="text-muted">Deadline: 10 Mei 2025</p>
      <div class="row g-3">
        <div class="mb-3">
        <span class="badge bg-success">Selesai</span>
        </div>
      </div>
      
      <p> MALAZ </p>

      <div class="d-flex justify-content-end">
        <a href="{{ route('edit') }}" class="btn btn-primary">Edit Tugas</a>
      </div>
    </div>
  </div>

</body>
</html>