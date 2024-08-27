<?php
// Mendefinisikan sebuah class bernama Mahasiswa
class Mahasiswa {
    // Deklarasi properti publik
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor yang akan dipanggil saat objek baru dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Menginisialisasi properti nama dengan nilai parameter $nama
        $this->nama = $nama;
        // Menginisialisasi properti nim dengan nilai parameter $nim
        $this->nim = $nim;
        // Menginisialisasi properti jurusan dengan nilai parameter $jurusan
        $this->jurusan = $jurusan;
    }
    
    // Method publik untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Mengembalikan string yang berisi nama, nim, dan jurusan
        return "Nama: $this->nama<br> Nim: $this->nim<br> Jurusan: $this->jurusan";
    }
}

// Membuat objek baru dari class Mahasiswa
$mahasiswa = new Mahasiswa ("Galan", "230102011", "Komputer dan Bisnis");

// Menampilkan data mahasiswa dengan memanggil method tampilkanData() dan mencetaknya ke layar
echo $mahasiswa->tampilkanData();

?>
