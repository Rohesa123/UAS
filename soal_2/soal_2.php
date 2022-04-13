<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajihan</title>
    <link rel="stylesheet" href="css/style1.css">
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
                            <h2>Penggajihan Karyawan</h2>
                            <h1>PT. Selalu Makmur Jaya</h1>
                        </center>
                        <center>
                            <form action="proses.php" method="get">
                                <table cellpadding="7" class="tabel_1">
                                    <tr>
                                        <th style="text-align: left;"><label for="namab1">Nama Bendahara</label></th>
                                        <th>:</th>
                                        <td><input type="text" name="namab" id="namab1" required
                                                placeholder="Nama Bendahara"></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left;"><label for="namap1">Nama Pekerja</label></th>
                                        <th>:</th>
                                        <td><input type="text" name="namap" id="namap1" required
                                                placeholder="Nama Pekerja"></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left;">Jenis Kelamin</th>
                                        <th>:</th>
                                        <td><input type="radio" name="jk" value="Laki-laki" id="jk1" required><label for="jk1">&nbsp;Laki-laki</label>&nbsp;
                                            <input type="radio" name="jk" value="Perempuan" id="jk2" required><label for="jk2">&nbsp;Perempuan</label></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left;"><label for="tg1">Tanggal Gaji</label></th>
                                        <th>:</th>
                                        <td><input type="date" name="tg" id="tg1" required></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left;"><label for="j1">Jabatan</label></th>
                                        <th>:</th>
                                        <td><select name="j" id="j1" required>
                                            <option value="">--- Pilih Jabatan ---</option>
                                            <option value="Direktur">Direktur</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Sekertaris">Sekertaris</option>
                                            <option value="Karyawan">Karyawan</option>
                                            <option value="OB">OB</option>
                                        </select></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left;"><label for="pt1">Pendidikan Terakhir</label></th>
                                        <th>:</th>
                                        <td><select name="pt" id="pt1" required>
                                            <option value="">--- Pendidikan Terakhir ---</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                        </select></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left;">Status Pegawai</th>
                                        <th>:</th>
                                        <td><input type="radio" name="sp" value="Tetap" id="sp1" required><label for="sp1">&nbsp;tetap</label>&nbsp;
                                            <input type="radio" name="sp" value="Kontrak" id="sp2" required><label for="sp2">&nbsp;Kontrak</label></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left;"><label for="l1">Lembur</label></th>
                                        <th>:</th>
                                        <td><input type="number" name="l" id="l1" min="0" required>&nbsp;Hari/Rp. 20.000</td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left;"><label for="bpjs1">Potongan BPJS</label></th>
                                        <th>:</th>
                                        <td><input type="number" name="bpjs" min="0" required id="bpjs1"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><div class="row">
                                            <div class="col-5">
                                                <div class="tombol_ka"><span class="tombol_k"><button type="save" class="btn-primary"
                                                            name="save">KIRIM</button></span>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="tombol_ka1"><span class="tombol_k1"><button type="reset" class="btn-danger">RESET</button></span>
                                                </div>
                                            </div>
                                        </div></td>
                                    </tr>
                                </table>
                            </form>
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