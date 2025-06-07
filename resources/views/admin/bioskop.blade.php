<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin Bioskop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row min-vh-100">
            
            <!-- Sidebar Component -->
            <x-sidebar />

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 py-4">
                <h1 class="mb-4">Selamat Datang di Dashboard Admin</h1>
                <p>Berikut adalah data jadwal film yang akan tayang:</p>

                <!-- Table -->
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Jadwal Tayang Film
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Film</th>
                                    <th>Tanggal Tayang</th>
                                    <th>Jam</th>
                                    <th>Studio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Avengers: Endgame</td>
                                    <td>2025-06-10</td>
                                    <td>18:30</td>
                                    <td>Studio 1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Spiderman: No Way Home</td>
                                    <td>2025-06-11</td>
                                    <td>20:00</td>
                                    <td>Studio 2</td>
                                </tr>
                                <!-- Tambahkan baris lainnya di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
