<?php
// pengecekan ajax request untuk mencegah direct access file, agar file tidak bisa diakses secara langsung dari browser
// jika ada ajax request
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
    // panggil file "database.php" untuk koneksi ke database
    require_once "config/database.php";

    // sql statement untuk menampilkan jumlah data masing-masing nilai pada tabel "tbl_survei"
    $query = mysqli_query($mysqli, "SELECT COUNT(IF(nilai = 'Sangat Puas', 1, NULL)) AS sangat_puas, COUNT(IF(nilai = 'Puas', 1, NULL)) AS puas, COUNT(IF(nilai = 'Kurang Puas', 1, NULL)) AS kurang_puas, COUNT(IF(nilai = 'Tidak Puas', 1, NULL)) AS tidak_puas 
                                    FROM tbl_survei")
                                    or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
    // ambil data hasil query
    $data = mysqli_fetch_assoc($query);

    // kirimkan data
    echo json_encode($data);
}
