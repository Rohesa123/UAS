<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
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
            <div class="col">
                <div class="garis">
                    <div class="latar"></div>
                    <div class="isi">
                        <center>
                            <h2>Form Pengulangan</h2>
                        </center>
                        <center>
                            <form action="soal_3.php" method="get">
                                <table cellpadding="7" class="tabel1">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <th style="text-align: left;">1. Deret Bilangan Ganjil</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <th style="text-align: left;">2. Segitiga Sama Kaki</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <th>3. Deret Bilangan Kelipatan 3</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left;"><label for="p1">Pilih</label></th>
                                        <th>:</th>
                                        <td><input type="number" name="p" id="p1" min="1" max="3" required></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left;"><label for="a1">Masukkan Angka</label></th>
                                        <th>:</th>
                                        <td><input type="number" name="a" id="a1" min="0" required></td>
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
                        </center>
                        <center>
<?php
    if (isset($_GET['save'])) {
        $p = $_GET['p'];
        $a = $_GET['a'];

        if ($p == 1) {
            echo "<b>Deret Bilangan Ganjil</b><br>";
            for ($b=1; $b <=$a;$b+=2) {
                echo "<b>$b</b> ";
            }
        } else if ($p == 2) {
            echo "<b>Segitiga Sama Kaki Terbalik</b><br>";
            for ($b=1;$b <= $a;$b++) {
                for ($c=$a;$b<=$c;$c--) {
                    echo " ";
                }
                for ($d=$b;$d<=$a;$d++) {
                    echo "<b>*</b> ";
                }
                echo "<br>";
            }
        } else {
            echo "<b>Deret Bilangan Kelipatan 3</b><br>";
            for ($b=3;$b <= $a;$b+=3) {
                echo "<b>$b</b> ";
            }
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
                        <h4>Program Persyaratan</h4>
                        <div class="soal_1">
                            <div class="tombol_1">
                                <a href="../soal_1/soal_1.php"><button class="tombol_soal1">Soal 1</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3">
                        <h4>Program Penggajihan</h4>
                        <div class="soal_2">
                            <div class="tombol_2">
                                <a href="../soal_2/soal_2.php"><button class="tombol_soal2">Soal 2</button></a>
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