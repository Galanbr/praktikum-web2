<?php

// Mendefinisikan sebuah class bernama Mahasiswa
class Mahasiswa {
    // Deklarasi properti dengan akses private untuk enkapsulasi
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor yang akan dipanggil saat objek baru dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Menginisialisasi properti nama dengan nilai parameter $nama
        $this->nama = $nama;
        // Menginisialisasi properti nim dengan nilai parameter $nim
        $this->nim = $nim;
        // Menginisialisasi properti jurusan dengan nilai parameter $jurusan
        $this->jurusan = $jurusan;
    }

    // Getter untuk properti nama
    public function getNama() {
        // Mengembalikan nilai properti nama
        return $this->nama;
    }

    // Setter untuk properti nama
    public function setNama($nama) {
        // Mengubah nilai properti nama
        $this->nama = $nama;
    }

    // Getter untuk properti nim
    public function getNim() {
        // Mengembalikan nilai properti nim
        return $this->nim;
    }

    // Setter untuk properti nim
    public function setNim($nim) {
        // Mengubah nilai properti nim
        $this->nim = $nim;
    }

    // Getter untuk properti jurusan
    public function getJurusan() {
        // Mengembalikan nilai properti jurusan
        return $this->jurusan;
    }

    // Setter untuk properti jurusan
    public function setJurusan($jurusan) {
        // Mengubah nilai properti jurusan
        $this->jurusan = $jurusan;
    }

    // Method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Menampilkan nilai properti nama menggunakan getter getNama()
        echo "Nama: " . $this->getNama() . "<br>";
        // Menampilkan nilai properti nim menggunakan getter getNim()
        echo "NIM: " . $this->getNim() . "<br>";
        // Menampilkan nilai properti jurusan menggunakan getter getJurusan()
        echo "Jurusan: " . $this->getJurusan() . "<br>";
    }
}

// Membuat objek baru dari class Mahasiswa dengan data awal
$mahasiswa1 = new Mahasiswa("Galan", "230102011", "Komputer dan Bisnis");

// Menampilkan data mahasiswa pertama kali
$mahasiswa1->tampilkanData();

// Mengubah nilai properti nama, nim, dan jurusan menggunakan setter
$mahasiswa1->setNama("Reswara");
$mahasiswa1->setNim("110201032");
$mahasiswa1->setJurusan("Bisnis dan Komputer");

// Menampilkan baris kosong dan pesan bahwa data telah diubah
echo "<br>";
echo "Setelah dirubah : <br>";

// Menampilkan data mahasiswa setelah perubahan
$mahasiswa1->tampilkanData();

?>
