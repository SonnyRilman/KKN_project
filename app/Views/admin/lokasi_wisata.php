<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lokasi Wisata - Admin Dashboard</title>
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .main-content h2 {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white" href="/admin">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/admin/lokasi_wisata/create">Tambah Lokasi Wisata</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/auth/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container mt-4">
            <h2>Data Lokasi Wisata</h2>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($wisata) && is_array($wisata)): ?>
                            <?php foreach ($wisata as $item): ?>
                                    <tr>
                                        <td><?= esc($item['nama']); ?></td>
                                        <td><?= esc($item['deskripsi']); ?></td>
                                        <td><?= esc($item['alamat']); ?></td>
                                        <td>
                                            <a href="/admin/lokasi_wisata/edit/<?= esc($item['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="/admin/lokasi_wisata/delete/<?= esc($item['id']); ?>" method="post" style="display:inline-block;">
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php endforeach; ?>
                    <?php else: ?>
                            <tr>
                                <td colspan="4">Tidak ada data</td>
                            </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
