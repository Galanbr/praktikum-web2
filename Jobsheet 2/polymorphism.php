<?php

// Kelas Pengguna sebagai kelas induk
class Pengguna {
    // Metode aksesFitur() didefinisikan di kelas induk, tetapi tidak ada implementasi
    public function aksesFitur() {
        // Implementasi dapat diisi oleh kelas turunan
    }
}

// Kelas Dosen yang merupakan turunan dari kelas Pengguna
class Dosen extends Pengguna {

    // Konstruktor kelas Dosen, saat ini tidak melakukan apa-apa
    public function __construct() {}

    // Metode aksesFitur() mengoverride metode dari kelas induk
    public function aksesFitur() {
        // Implementasi spesifik untuk Dosen bisa ditambahkan di sini
    }
}

// Kelas Mahasiswa yang juga merupakan turunan dari kelas Pengguna
class Mahasiswa extends Pengguna {

    // Konstruktor kelas Mahasiswa, saat ini tidak melakukan apa-apa
    public function __construct() {}

    // Metode aksesFitur() mengoverride metode dari kelas induk
    public function aksesFitur() {
        // Implementasi spesifik untuk Mahasiswa bisa ditambahkan di sini
    }
}

// Membuat objek Dosen
$dosen = new Dosen();

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa();

// Memanggil metode aksesFitur() dari objek Dosen
// Karena aksesFitur() kosong, hanya string "Dosen mengakses fitur administrasi." yang ditampilkan
echo "Dosen mengakses fitur administrasi." . $dosen->aksesFitur();
echo "<br>";
// Memanggil metode aksesFitur() dari objek Mahasiswa
// Karena aksesFitur() kosong, hanya string "Mahasiswa mengakses fitur pembelajaran." yang ditampilkan
echo "Mahasiswa mengakses fitur pembelajaran." . $mahasiswa->aksesFitur();

?>
