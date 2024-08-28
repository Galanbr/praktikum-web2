<?php
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }

    // Metode untuk mengubah jurusan
    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // Metode setter untuk mengubah nilai NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }
}

// Instansiasi objek dari class Mahasiswa menggunakan constructor
$mahasiswa1 = new Mahasiswa("Galan", "230102011", "Komputer dan Bisnis");

// Tampilkan data mahasiswa sebelum perubahan
echo "Sebelum Diubah:<br>";
$mahasiswa1->tampilkanData();

// Ubah NIM menggunakan metode setNim()
$mahasiswa1->setNim("32102011");
$mahasiswa1->updateJurusan("Rekayasa Mesin");

// Tampilkan data mahasiswa setelah perubahan
echo "<br> Setelah Diubah:<br>";
$mahasiswa1->tampilkanData();
?>
