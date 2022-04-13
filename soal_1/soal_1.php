<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persyaratan</title>
    <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="row">
            <div class="container head">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="../halaman_awal/page.php"><b class="uas">UAS</b></a>
                        <button class="navbar-toggler hidden-lg-up fas fa-bars fa-2x" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
                            aria-controls="collapsibleNavId" aria-expanded="false"
                            aria-label="Toggle navigation"></button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                <div class="row">
                                    <div class="col">
                                        <li class="nav-item">
                                            <i class="soal1"><a href="../soal_1/soal_1.php"><button type="submit">Soal
                                                        1</button></a></i>
                                        </li>
                                    </div>
                                    <div class="col">
                                        <li class="nav-item">
                                            <i class="soal2"><a href="../soal_2/soal_2.php"><button type="submit">Soal
                                                        2</button></a></i>
                                        </li>
                                    </div>
                                    <div class="col">
                                        <li class="nav-item">
                                            <i class="soal3"><a href="../soal_3/soal_3.php"><button type="submit">Soal
                                                        3</button></a></i>
                                        </li>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="row">
            <div class="kolom">
                <div class="garis">
                    <div class="warna">
                    </div>
                    <div class="isi">
                        <center>
                            <h2 class="judul">Syarat Masuk Ke <span>MIKO MALL</span></h2>
                        </center>
                        <center>
                            <form action="soal_1.php" method="get">
                                <table cellpadding="4" class="tabel_1">
                                    <tr>
                                        <th style="text-align: left;"><label for="nama1">Nama</label></th>
                                        <th>:</th>
                                        <td><input type="text" name="nama" id="nama1" required
                                                placeholder="Masukkan Nama"></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left;"><label for="s1">Status Anda</label></th>
                                        <th>:</th>
                                        <td><select name="s" id="s1" required>
                                                <option value="">--- Status Vaksin ---</option>
                                                <option value="sudah">Sudah Vaksin</option>
                                                <option value="belum">Belum Vaksin</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="tombol_ka"><span class="tombol_k"><button type="save"
                                                                class="btn-primary" name="save">KIRIM</button></span>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="tombol_ka1"><span class="tombol_k1"><button type="reset"
                                                                class="btn-danger">RESET</button></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <?php
if (isset($_GET['save'])) {
    $nama = $_GET['nama'];
    $s = $_GET['s'];

    if ($s == "sudah") {
        echo "<table>";
        echo "<tr>";
        echo "<th>Nama</th>";
        echo "<th>:</th>";
        echo "<th>$nama</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Status</th>";
        echo "<th>:</th>";
        echo "<th>Sudah Vaksin</th>";
        echo "</tr>";
        echo "</table>";
        echo "<br><center><h4>Diizinkan</h4></center>";
    } else if ($s == "belum") {
        echo "<table>";
        echo "<tr>";
        echo "<th>Nama</th>";
        echo "<th>:</th>";
        echo "<th>$nama</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Status</th>";
        echo "<th>:</th>";
        echo "<th>Belum Vaksin</th>";
        echo "</tr>";
        echo "</table>";
        echo "<br><center><h4>Tidak Diizinkan</h4></center>";
        echo "<br><a href=https://www.pedulilindungi.id class=link>Silahkan Daftar Vaksin</a>";

    } else {
        echo "<br><h4>Maaf Pilihan Anda Error<br>Silahkan Pilih Kembali</h4>";
    }
}
?>
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="content_2">
                <h1 class="judul_2">
                    Soal :
                </h1>
                <div class="row">
                    <div class="col-3">
                        <h4>Program Penggajihan</h4>
                        <div class="soal_2">
                            <div class="tombol_1">
                                <a href="../soal_2/soal_2.php"><button class="tombol_soal2">Soal 2</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                    </div>
                    <div class="col-3">
                        <h4>Program Pengulangan</h4>
                        <div class="soal_3">
                            <div class="tombol_2">
                                <a href="../soal_3/soal_3.php"><button class="tombol_soal3">Soal 3</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="row">
            <div class="akhir">
                <section>
                    <div class="loader">
                        <div class="dot" style="--i:0;"></div>
                        <div class="dot" style="--i:1;"></div>
                        <div class="dot" style="--i:2;"></div>
                        <div class="dot" style="--i:3;"></div>
                        <div class="dot" style="--i:4;"></div>
                        <div class="dot" style="--i:5;"></div>
                        <div class="dot" style="--i:6;"></div>
                        <div class="dot" style="--i:7;"></div>
                        <div class="dot" style="--i:8;"></div>
                        <div class="dot" style="--i:9;"></div>
                        <div class="dot" style="--i:10;"></div>
                        <div class="dot" style="--i:11;"></div>
                        <div class="dot" style="--i:12;"></div>
                        <div class="dot" style="--i:13;"></div>
                        <div class="dot" style="--i:14;"></div>
                        <div class="dot" style="--i:15;"></div>
                        <div class="dot" style="--i:16;"></div>
                        <div class="dot" style="--i:17;"></div>
                        <div class="dot" style="--i:18;"></div>
                        <div class="dot" style="--i:19;"></div>
                    </div>
                    <h2>Copyright<span class="far fa-copyright fa-1x">Rohesa Sidiq Permana</span></h2>
                    <div class="loader">
                        <div class="dot" style="--i:0;"></div>
                        <div class="dot" style="--i:1;"></div>
                        <div class="dot" style="--i:2;"></div>
                        <div class="dot" style="--i:3;"></div>
                        <div class="dot" style="--i:4;"></div>
                        <div class="dot" style="--i:5;"></div>
                        <div class="dot" style="--i:6;"></div>
                        <div class="dot" style="--i:7;"></div>
                        <div class="dot" style="--i:8;"></div>
                        <div class="dot" style="--i:9;"></div>
                        <div class="dot" style="--i:10;"></div>
                        <div class="dot" style="--i:11;"></div>
                        <div class="dot" style="--i:12;"></div>
                        <div class="dot" style="--i:13;"></div>
                        <div class="dot" style="--i:14;"></div>
                        <div class="dot" style="--i:15;"></div>
                        <div class="dot" style="--i:16;"></div>
                        <div class="dot" style="--i:17;"></div>
                        <div class="dot" style="--i:18;"></div>
                        <div class="dot" style="--i:19;"></div>
                    </div>
                </section>
            </div>
        </div>
    </footer>

    <!-- Script -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>