<?php
//koneksi ke database
$conn = mysqli_connect("sql301.epizy.com", "epiz_28808440", "MIOZ7Lr1M1YVibd", "epiz_28808440_memorizehelper");


function query($query) {
    global $conn; //untuk bisa menggunakan variabel conn diluar
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;

    //ambil data dari tiap elemen dalam form
    $istilah = htmlspecialchars($data["istilah"]);
    $definisi = htmlspecialchars($data["definisi"]);

    //query insert data
    $query = "INSERT INTO cards
                VALUES
                ('', '$istilah', '$definisi')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

/* function selanjutnya($next) {

    global $conn;
    $query = "SELECT * FROM cards
    ORDER BY RAND()
    LIMIT 1;";

} */

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM cards WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>