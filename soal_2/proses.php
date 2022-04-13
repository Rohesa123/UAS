<?php
if (isset($_GET['save'])) {
    $nb = $_GET['namab'];
    $np = $_GET['namap'];
    $jk = $_GET['jk'];
    $tg = $_GET['tg'];
    $j = $_GET['j'];
    $pt = $_GET['pt'];
    $sp = $_GET['sp'];
    $l = $_GET['l'];
    $bpjs = $_GET['bpjs'];

    if ($j == "Direktur") {
        $ju=10000000;
    } else if ($j == "Manager") {
        $ju=7500000;
    } else if ($j == "Sekertaris") {
        $ju=5000000;
    } else if ($j == "Karyawan") {
        $ju=3000000;
    } else if ($j == "OB") {
        $ju=1500000;
    } else {
        $ju=0;
    }

    if ($pt == "SD") {
        $ptu = 200000;
    } else if ($pt == "SMP") {
        $ptu = 500000;
    } else if ($pt == "SMA") {
        $ptu = 1000000;
    } else if ($pt == "S1") {
        $ptu = 1500000;
    } else if ($pt == "S2") {
        $ptu = 2000000;
    } else {
        $ptu = 0;
    }

    if ($sp == "Tetap") {
        $spu=500000;
    } else {
        $spu=0;
    }

    $lu=$l*20000;
    $gaji = ($ju+$ptu+$lu+$spu)-$bpjs;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji</title>
    <link rel="stylesheet" href="css/style_1.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
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
                    <div class="latar"></div>
                    <div class="isi">
                        <center>
                            <h2>Struk Gaji Karyawan</h2>
                            <hr>
                        </center>
                        <div class="tanggal"><b>
                                <?php echo "Tanggal : $tg"; ?>
                            </b></div>
                        <table cellpadding="1" class="tabel_1">
                            <tr>
                                <th style="padding-bottom: 10px;">
                                    <h4>Gaji Pokok</h4>
                                </th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">Nama karyawan</th>
                                <th style="padding-right: 5px;">:</th>
                                <th><?php echo "$np"; ?></th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">Jenis Kelamin</th>
                                <th>:</th>
                                <th><?php echo "$jk"; ?></th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">Pendidikan Terakhir</th>
                                <th>:</th>
                                <th><?php echo "$pt"; ?></th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">Jabatan</th>
                                <th>:</th>
                                <th><?php echo "$j"; ?></th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">Gaji</th>
                                <th>:</th>
                                <th><?php echo "Rp. ". number_format($ju,0,".","."); ?></th>
                            </tr>
                            <tr>
                                <th style="padding: 10px 0 10px 0;"><h4>Tunjangan</h4></th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">Tunjangan Pendidikan</th>
                                <th>:</th>
                                <th><?php echo "Rp. ". number_format($ptu,0,".","."); ?></th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">Vakasi Lembur</th>
                                <th>:</th>
                                <th><?php echo "Rp. ". number_format($lu,0,".","."); ?></th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">Bonus Status Kerja</th>
                                <th>:</th>
                                <th><?php echo "Rp. ". number_format($spu,0,".","."); ?></th>
                            </tr>
                            <tr>
                                <th style="padding: 10px 0 10px 0;"><h4>Potongan</h4></th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">Potongan BPJS</th>
                                <th>:</th>
                                <th><?php echo "Rp. ". number_format($bpjs,0,".","."); ?></th>
                            </tr>
                            <tr>
                                <th style="padding: 20px 0 10px 0;"><h4 style="text-align: left;">Total Gaji</h4></th>
                                <th>:</th>
                                <th><h4><?php echo "Rp. ". number_format($gaji,0,".","."); ?></h4></th>
                            </tr>
                        </table>
                        <div class="namab"><b>
                            <?php echo "Bendahara : $nb"; ?>
                        </b></div>
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
                    <div class="col-1">
                    </div>
                    <div class="col-3">
                        <h4>Program Pengulangan</h4>
                        <div class="soal_3">
                            <div class="tombol_3">
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