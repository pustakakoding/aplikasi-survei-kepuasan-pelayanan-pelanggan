<?php
// pengecekan ajax request untuk mencegah direct access file, agar file tidak bisa diakses secara langsung dari browser
// jika ada ajax request
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
    // panggil file "database.php" untuk koneksi ke database
    require_once "config/database.php";

    // ambil data hasil post dari ajax
    $nilai = mysqli_real_escape_string($mysqli, $_POST['nilai']);

    // sql statement untuk insert data ke tabel "tbl_survei"
    $insert = mysqli_query($mysqli, "INSERT INTO tbl_survei(nilai) VALUES('$nilai')")
                                     or die('Ada kesalahan pada query insert : ' . mysqli_error($mysqli));
    // cek query
    // jika proses insert berhasil
    if ($insert) {
        // tampilkan pesan sukses
        echo "Sukses";
    }
}
