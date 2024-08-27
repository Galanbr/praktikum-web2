<?php

// Kelas Pengguna yang berfungsi sebagai kelas induk
class Pengguna {
    // Properti yang dilindungi (protected), dapat diakses oleh kelas ini dan kelas turunannya
    protected $nama;

    // Konstruktor untuk menginisialisasi properti $nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nilai dari properti $nama
    public function getNama() {
        return $this->nama;
    }
}

// Kelas Dosen yang merupakan turunan dari kelas Pengguna
class Dosen extends Pengguna {
    // Properti yang bersifat private, hanya dapat diakses dalam kelas ini saja
    private $matkul;

    // Konstruktor untuk menginisialisasi properti $nama dan $matkul
    public function __construct($nama, $matkul) {
        // Memanggil konstruktor dari kelas induk (Pengguna) untuk menginisialisasi $nama
        parent::__construct($nama);
        // Menginisialisasi properti $matkul
        $this->matkul = $matkul;
    }

    // Metode untuk mendapatkan nilai dari properti $matkul
    public function getmatkul() {
        return $this->matkul;
    }
}

// Membuat objek Dosen dengan nama dan mata kuliah yang diampu
$dosen = new Dosen("Riyadi Purwanto S.T, M.Eng", "Etika Profesi");

// Menampilkan nama dosen menggunakan metode getNama() dari kelas Pengguna
echo "Nama Dosen : " . $dosen->getNama() . "<br>";

// Menampilkan mata kuliah yang diampu dosen menggunakan metode getmatkul() dari kelas Dosen
echo "Mata Kuliah : " . $dosen->getmatkul();

?>
