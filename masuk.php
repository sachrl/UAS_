<?php
require 'function.php';
require 'cek.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Barang Keluar</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.php">ATK JAYA</a>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.php">Barang Masuk</a>
                        <a class="nav-link" href="masuk.php">Barang Keluar</a>
                        <a class="nav-link" href="logout.php">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Barang Keluar</h1>
                    <div class="card mb-4">
                    <div class="card-header">
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Barang</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM barangmasuk";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['kode_barang'] . "</td>";
                                        echo "<td>" . $row['nama_barang'] . "</td>";
                                        echo "<td>" . $row['jumlah_barang'] . "</td>";
                                        echo "<td>";
                                        echo "<form method='POST' action='masuk.php'>";
                                        echo "<input type='hidden' name='kode_barang' value='" . $row['kode_barang'] . "'>";
                                        echo "<input type='number' name='jumlah_kurang' placeholder='Jumlah' min='1' max='" . $row['jumlah_barang'] . "'                                           required>";
                                        echo "<button type='submit' class='btn btn-danger btn-sm'>Kurang</button>";
                                        echo "</form>";
                                        echo "<form method='POST' action='delete.php' style='display:inline;'>";
                                        echo "<input type='hidden' name='kode_barang' value='" . $row['kode_barang'] . "'>";
                                        echo "<button type='submit' class='btn btn-warning btn-sm'>Hapus</button>";
                                        echo "</form>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                           </div>
                </footer>
        </div>
    </div
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    
</body>
</html>
