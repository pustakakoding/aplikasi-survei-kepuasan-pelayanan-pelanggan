<!-- Aplikasi Survei Kepuasan Pelayanan Pelanggan 
**************************************************
* Developer   : Indra Styawantoro
* Company     : Pustaka Koding
* Release     : Juli 2022
* Update      : -
* Website     : pustakakoding.com
* E-mail      : pustaka.koding@gmail.com
* WhatsApp    : +62-813-7778-3334
-->

<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi Survei Kepuasan Pelayanan Pelanggan">
    <meta name="author" content="Indra Styawantoro">

    <!-- Title -->
    <title>Aplikasi Survei Kepuasan Pelayanan Pelanggan</title>

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container pt-4">
            <div class="px-4 py-4 mb-4 bg-white rounded-2 shadow-sm">
                <!-- judul halaman -->
                <div class="d-flex align-items-center me-md-auto">
                    <i class="bi-people text-success me-3 fs-3"></i>
                    <h1 class="h5 pt-2">Survei Kepuasan Pelayanan Pelanggan</h1>
                </div>
            </div>

            <div class="row">
                <!-- survei sangat puas -->
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-start">
                                <div class="feature-icon-3 me-4">
                                    <i class="bi-emoji-heart-eyes text-success"></i>
                                </div>
                                <div>
                                    <!-- menampilkan jumlah data survei sangat puas -->
                                    <p id="jumlah-sangat-puas" class="fs-3 text-success mb-1"></p>
                                    <p class="mb-0 h6">SANGAT PUAS</p>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <!-- tombol tambah data survei sangat puas -->
                                <button id="btn-sangat-puas" type="button" class="btn btn-outline-success rounded-pill">Pilih</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- survei puas -->
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-start">
                                <div class="feature-icon-3 me-4">
                                    <i class="bi-emoji-laughing text-info"></i>
                                </div>
                                <div>
                                    <!-- menampilkan jumlah data survei puas -->
                                    <p id="jumlah-puas" class="fs-3 text-info mb-1"></p>
                                    <p class="mb-0 h6">PUAS</p>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <!-- tombol tambah data survei puas -->
                                <button id="btn-puas" type="button" class="btn btn-outline-info rounded-pill">Pilih</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- survei kurang puas -->
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-start">
                                <div class="feature-icon-3 me-4">
                                    <i class="bi-emoji-frown text-warning"></i>
                                </div>
                                <div>
                                    <!-- menampilkan jumlah data survei kurang puas -->
                                    <p id="jumlah-kurang-puas" class="fs-3 text-warning mb-1"></p>
                                    <p class="mb-0 h6">KURANG PUAS</p>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <!-- tombol tambah data survei kurang puas -->
                                <button id="btn-kurang-puas" type="button" class="btn btn-outline-warning rounded-pill">Pilih</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- survei tidak puas -->
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-start">
                                <div class="feature-icon-3 me-4">
                                    <i class="bi-emoji-angry text-danger"></i>
                                </div>
                                <div>
                                    <!-- menampilkan jumlah data survei tidak puas -->
                                    <p id="jumlah-tidak-puas" class="fs-3 text-danger mb-1"></p>
                                    <p class="mb-0 h6">TIDAK PUAS</p>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <!-- tombol tambah data survei tidak puas -->
                                <button id="btn-tidak-puas" type="button" class="btn btn-outline-danger rounded-pill">Pilih</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- menampilkan data survei dalam bentuk progress bars -->
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <!-- data survei sangat puas -->
                    <div class="h6">Sangat Puas</div>
                    <div id="progress-sangat-puas" class="progress rounded-pill mb-4" style="height: 30px;"></div>
                    <!-- data survei puas -->
                    <div class="h6">Puas</div>
                    <div id="progress-puas" class="progress rounded-pill mb-4" style="height: 30px;"></div>
                    <!-- data survei kurang puas -->
                    <div class="h6">Kurang Puas</div>
                    <div id="progress-kurang-puas" class="progress rounded-pill mb-4" style="height: 30px;"></div>
                    <!-- data survei tidak puas -->
                    <div class="h6">Tidak Puas</div>
                    <div id="progress-tidak-puas" class="progress rounded-pill mb-4" style="height: 30px;"></div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <!-- tombol reset data -->
                <button id="btn-reset" type="button" class="btn btn-outline-danger rounded-pill px-5">Reset</button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto py-4">
        <div class="container">
            <hr class="my-4">
            <!-- copyright -->
            <div class="copyright text-center mb-2 mb-md-0">
                &copy; 2022 - <a href="https://pustakakoding.com/" target="_blank" class="text-brand text-decoration-none">Pustaka Koding</a>. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- jQuery Core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // =========================== Onload ===========================
            // panggil fungsi "tampil_data" untuk menampilkan data survei
            tampil_data();

            // ============================ View ============================
            // fungsi tampil data survei
            function tampil_data() {
                // proses get data menggunakan ajax
                $.ajax({
                    url: "get_data.php",                // url file proses get data
                    dataType: "JSON",                   // tipe data JSON
                    success: function(result) {         // ketika proses get data selesai
                        // tampilkan data
                        $('#jumlah-sangat-puas').text(result.sangat_puas);
                        $('#jumlah-puas').text(result.puas);
                        $('#jumlah-kurang-puas').text(result.kurang_puas);
                        $('#jumlah-tidak-puas').text(result.tidak_puas);

                        // hitung jumlah total data survei
                        let total_data = eval(result.sangat_puas) + eval(result.puas) + eval(result.kurang_puas) + eval(result.tidak_puas);
                        // hitung persentase nilai
                        let sangat_puas = eval(result.sangat_puas) !== 0 ? (eval(result.sangat_puas) / total_data) * 100 : 0;
                        let puas = eval(result.puas) !== 0 ? (eval(result.puas) / total_data) * 100 : 0;
                        let kurang_puas = eval(result.kurang_puas) !== 0 ? (eval(result.kurang_puas) / total_data) * 100 : 0;
                        let tidak_puas = eval(result.tidak_puas) !== 0 ? (eval(result.tidak_puas) / total_data) * 100 : 0;

                        // tampilkan data pada progress bars
                        $('#progress-sangat-puas').html('<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: ' + sangat_puas + '%" aria-valuenow="' + sangat_puas + '" aria-valuemin="0" aria-valuemax="100">' + sangat_puas.toFixed(2) + '%</div>');
                        $('#progress-puas').html('<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: ' + puas + '%" aria-valuenow="' + puas + '" aria-valuemin="0" aria-valuemax="100">' + puas.toFixed(2) + '%</div>');
                        $('#progress-kurang-puas').html('<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: ' + kurang_puas + '%" aria-valuenow="' + kurang_puas + '" aria-valuemin="0" aria-valuemax="100">' + kurang_puas.toFixed(2) + '%</div>');
                        $('#progress-tidak-puas').html('<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: ' + tidak_puas + '%" aria-valuenow="' + tidak_puas + '" aria-valuemin="0" aria-valuemax="100">' + tidak_puas.toFixed(2) + '%</div>');
                    }
                });
            }

            // ============================ Insert ============================
            // insert data survei sangat puas
            $('#btn-sangat-puas').on('click', function() {
                // tentukan variabel nilai
                let nilai = 'Sangat Puas';

                // proses insert data menggunakan ajax
                $.ajax({
                    type: 'POST',                           // mengirim data dengan method POST
                    url: 'insert.php',                      // url file proses insert data
                    data: { nilai: nilai},                  // data yang dikirim
                    success: function(result) {             // ketika proses insert data selesai
                        // jika hasilnya "Sukses"
                        if (result === 'Sukses') {
                            // tampilkan data survei
                            tampil_data();
                        }
                    },
                });
            });

            // insert data survei puas
            $('#btn-puas').on('click', function() {
                // tentukan variabel nilai
                let nilai = 'Puas';

                // proses insert data menggunakan ajax
                $.ajax({
                    type: 'POST',                           // mengirim data dengan method POST
                    url: 'insert.php',                      // url file proses insert data
                    data: { nilai: nilai},                  // data yang dikirim
                    success: function(result) {             // ketika proses insert data selesai
                        // jika hasilnya "Sukses"
                        if (result === 'Sukses') {
                            // tampilkan data survei
                            tampil_data();
                        }
                    },
                });
            });

            // insert data survei kurang puas
            $('#btn-kurang-puas').on('click', function() {
                // tentukan variabel nilai
                let nilai = 'Kurang Puas';

                // proses insert data menggunakan ajax
                $.ajax({
                    type: 'POST',                           // mengirim data dengan method POST
                    url: 'insert.php',                      // url file proses insert data
                    data: { nilai: nilai},                  // data yang dikirim
                    success: function(result) {             // ketika proses insert data selesai
                        // jika hasilnya "Sukses"
                        if (result === 'Sukses') {
                            // tampilkan data survei
                            tampil_data();
                        }
                    },
                });
            });

            // insert data survei tidak puas
            $('#btn-tidak-puas').on('click', function() {
                // tentukan variabel nilai
                let nilai = 'Tidak Puas';

                // proses insert data menggunakan ajax
                $.ajax({
                    type: 'POST',                           // mengirim data dengan method POST
                    url: 'insert.php',                      // url file proses insert data
                    data: { nilai: nilai},                  // data yang dikirim
                    success: function(result) {             // ketika proses insert data selesai
                        // jika hasilnya "Sukses"
                        if (result === 'Sukses') {
                            // tampilkan data survei
                            tampil_data();
                        }
                    },
                });
            });

            // ============================ Delete ============================
            // delete data survei
            $('#btn-reset').on('click', function() {
                // proses delete data menggunakan ajax
                $.ajax({
                    url: 'delete.php',                      // url file proses delete data
                    success: function(result) {             // ketika proses delete data selesai
                        // jika hasilnya "Sukses"
                        if (result === 'Sukses') {
                            // tampilkan data survei
                            tampil_data();
                        }
                    },
                });
            });
        });
    </script>
</body>

</html>