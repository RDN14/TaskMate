<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah To Do List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .shadow-box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .footer {
            background: #111;
            color: white;
            padding: 20px 0;
            margin-top: 60px;
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" width="30" alt="Logo">
                <span class="ms-2 fw-bold">To Do List</span>
            </a>
            <form class="d-flex ms-4 w-50">
                <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
            </form>
            <div class="ms-auto d-flex align-items-center">
                <span class="me-3">📞 +62 1234 123</span>
                <span class="me-3">📧 kelompok17@gmail.com</span>
                <span class="me-3">📅 11 April 2025</span>
                <img src="https://i.pravatar.cc/30" class="rounded-circle" alt="Avatar">
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 shadow-box">
                <h4 class="text-center mb-4">Tambah to do list</h4>
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name_task" class="form-label">Name Task</label>
                        <input type="text" class="form-control" id="name_task" name="name_task" required>
                    </div>
                    <div class="mb-3">
                        <label for="priority" class="form-label">Priority</label>
                        <input type="text" class="form-control" id="priority" name="priority">
                    </div>
                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" class="form-control" id="deadline" name="deadline">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" class="form-control" id="status" name="status">
                    </div>
                    <div class="mb-3">
                        <label for="note" class="form-label">Catatan</label>
                        <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-5">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer text-center">
        <div class="container">
            <p class="mb-1">© 2021 - To Do List. Designed by <strong>TaskMate Designer</strong>. All rights reserved</p>
            <select class="form-select w-auto mx-auto" style="display:inline-block;">
                <option selected>Indonesia</option>
                <option value="en">English</option>
            </select>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
