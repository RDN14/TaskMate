<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Tugas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
      background-color: #f8f9fa;
    }

    main {
      flex: 1;
    }

    .edit-card {
      max-width: 700px;
      margin: 50px auto;
      background-color: #fff;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
    }

    .form-control, .form-select {
      border-radius: 0.5rem;
    }

    footer {
      background-color: #212529;
      color: white;
      padding: 15px 0;
      width: 100%;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light bg-white px-4 py-2 shadow-sm">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="{{ asset('images/logo-taskmate.png') }}" alt="Logo" class="logo" style="height: 32px;">
      <span class="ms-2 fw-bold fs-5">TaskMate</span>
    </a>
  </nav>

  <main>
    <div class="container">
      <div class="edit-card">
        <h4 class="mb-4 text-center">Edit Tugas</h4>
        <form>
          <div class="mb-3">
            <label for="judul" class="form-label">Judul Tugas</label>
            <input type="text" class="form-control" id="judul" value="">
          </div>

          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" rows="4"></textarea>
          </div>

          <div class="mb-4">
            <label for="priority" class="form-label">Priority</label>
            <select class="form-select" id="priority">
              <option>High</option>
              <option>Medium</option>
              <option>Low</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="deadline" class="form-label">Deadline</label>
            <input type="date" class="form-control" id="deadline" value="2025-05-10">
          </div>

          <div class="mb-4">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status">
              <option>Done</option>
              <option>Pending</option>
              <option>On Progress</option>
            </select>
          </div>

          <div class="d-flex justify-content-between">
            <a href="{{ route('detail') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
          </div>
        </form>
      </div>
    </div>
  </main>

  <footer>
    <div class="container text-center">
      <p class="mb-0">© 2025 - TaskMate. Designed by TaskMate Designer. All rights reserved</p>
    </div>
  </footer>
</body>
</html>
