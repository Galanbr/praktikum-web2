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
        // Implementasi spesifik untuk Dosen
        return "mengakses fitur Penilaian.";
    }
}

// Kelas Mahasiswa yang juga merupakan turunan dari kelas Pengguna
class Mahasiswa extends Pengguna {

    // Konstruktor kelas Mahasiswa, saat ini tidak melakukan apa-apa
    public function __construct() {}

    // Metode aksesFitur() mengoverride metode dari kelas induk
    public function aksesFitur() {
        // Implementasi spesifik untuk Mahasiswa
        return "mengakses fitur Jadwal.";
    }
}

// Membuat objek Dosen
$dosen = new Dosen();

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa();

// Memanggil metode aksesFitur() dari objek Dosen
echo "Dosen " . $dosen->aksesFitur();
echo "<br>";

// Memanggil metode aksesFitur() dari objek Mahasiswa
echo "Mahasiswa " . $mahasiswa->aksesFitur();

?>
