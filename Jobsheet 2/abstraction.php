<?php

// Kelas abstrak Pengguna
abstract class Pengguna {
    // Metode abstrak
    abstract public function aksesFitur();
}

// Kelas Mahasiswa yang mengimplementasikan Pengguna
class Mahasiswa extends Pengguna {
    // Implementasi metode aksesFitur untuk Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa mengakses fitur Jadwal.";
    }
}

// Kelas Dosen yang mengimplementasikan Pengguna
class Dosen extends Pengguna {
    // Implementasi metode aksesFitur untuk Dosen
    public function aksesFitur() {
        return "Dosen mengakses fitur Nilai.";
    }
}

// Demonstrasi penggunaan
$mahasiswa = new Mahasiswa();
$dosen = new Dosen();

echo $mahasiswa->aksesFitur(); // Output: Mahasiswa mengakses fitur pembelajaran.
echo "<br>";
echo $dosen->aksesFitur(); // Output: Dosen mengakses fitur pengajaran dan penilaian.

?>
