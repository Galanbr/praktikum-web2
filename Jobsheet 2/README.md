# Dokumentasi Jobsheet 2
### _Mampu Mengidentifikasi dan Menjelaskan Prinsip Dasar OOP_
Materi yang ada pada dokumentasi ini meliputi :
- Class dan Object
- Encapsulation 
- Inheritance
- Polymorphism
- Abstraction


### 1. Class dan Object
Mendefinisikan sebuah class bernama Mahasiswa dengan atribut/properti publik nama, kelas dan jurusan
```
<?php
class Mahasiswa {
    // Deklarasi properti publik
    public $nama;
    public $nim;
    public $jurusan;
```
Constructor yang akan dipanggil saat objek baru dibuat, melakukan inisialisasi properti nama, nim dan jurusan
```
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
Fungsi/method _tampilkanData()_ untuk menampilkan data mahasiswa dan mengembalikan string yang berisi nama, nim, dan jurusan
```
    public function tampilkanData() {
        return "Nama: $this->nama<br> 
                Nim: $this->nim<br> 
                Jurusan: $this->jurusan";
    }
}
```
Membuat objek baru dari class Mahasiswa
```
$mahasiswa = new Mahasiswa ("Galan", "230102011", "Komputer dan Bisnis");
```
Menampilkan data mahasiswa dengan memanggil method _tampilkanData()_ dan mencetaknya ke layar
```
echo $mahasiswa->tampilkanData();
?>
```
outputnya sebagai berikut :

### 2. Encapsulation
Mendefinisikan sebuah class bernama Mahasiswa dengan atribut/properti private nama, kelas dan jurusan
```
<?php
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;
```
Constructor yang akan dipanggil saat objek baru dibuat, melakukan inisialisasi properti nama, nim dan jurusan
```
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
Getter untuk mengambil nilai properti _$nama_ yang bersifat private
```
    public function getNama() {
        return $this->nama;
    }
```
Setter untuk mengubah nilai properti _$nama_ yang diambil getter
```
    public function setNama($nama) {
        $this->nama = $nama;
    }
```
Getter untuk mengambil nilai properti _$nim_ yang bersifat private
```
    // Getter untuk properti nim
    public function getNim() {
        return $this->nim;
    }
```
Setter untuk mengubah nilai properti _$nim_ yang diambil getter
```
    public function setNim($nim) {
        $this->nim = $nim;
    }
```
Getter untuk mengambil nilai properti _$jurusan_ yang bersifat private
```
    // Getter untuk properti jurusan
    public function getJurusan() {
        // Mengembalikan nilai properti jurusan
        return $this->jurusan;
    }
```
Setter untuk mengubah nilai properti _$jurusan_ yang diambil getter
```
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
```
Method untuk menampilkan data mahasiswa dan menampilkan nilai properti/atribut menggunakan getter 
```
    public function tampilkanData() {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "NIM: " . $this->getNim() . "<br>";
        echo "Jurusan: " . $this->getJurusan() . "<br>";
    }
}
```
Membuat objek baru dari class Mahasiswa dengan data awal
```
$mahasiswa1 = new Mahasiswa("Galan", "230102011", "Komputer dan Bisnis");
```
Menampilkan data awal mahasiswa 
```
$mahasiswa1->tampilkanData();
```
Mengubah nilai properti _$nama, $nim,_ dan _$jurusan_ menggunakan setter
```
$mahasiswa1->setNama("Reswara");
$mahasiswa1->setNim("110201032");
$mahasiswa1->setJurusan("Bisnis dan Komputer");
```
Menampilkan baris kosong dan pesan bahwa data telah diubah
```
echo "<br>";
echo "Setelah dirubah : <br>";
```
Menampilkan data mahasiswa setelah perubahan
```
$mahasiswa1->tampilkanData();
?>
```

Outputnya sebagai berikut :


### 3. Inheritance

Mendefinisikan class Pengguna yang berfungsi sebagai kelas induk dengan atribut/properti _$nama_ yang dilindungi
```
<?php
class Pengguna {
    protected $nama;
```
Constructor untuk menginisialisasi properti _$nama_
```
    public function __construct($nama) {
        $this->nama = $nama;
    }
```
Method untuk mendapatkan nilai dari properti _$nama_
```
    public function getNama() {
        return $this->nama;
    }
}
```
Class Dosen yang merupakan turunan dari Class Pengguna dan properti _$matkul_ yang bersifat private
```
class Dosen extends Pengguna {
    private $matkul;
```
Constructor dengan parameter _$nama_ dan _$matkul_ untuk menginisialisasi properti _$nama_ dan _$matkul_. _parent::_ memanggil constructor dari class Pengguna untuk menginisialisasi _$nama_  
```
    public function __construct($nama, $matkul) {
        parent::__construct($nama);
        $this->matkul = $matkul;
    }
```
Metode untuk mendapatkan nilai dari properti _$matkul_
```
    public function getmatkul() {
        return $this->matkul;
    }
}
```
Membuat objek Dosen dengan nama dan mata kuliah yang diampu
```
$dosen = new Dosen("Riyadi Purwanto S.T, M.Eng", "Etika Profesi");
```
Menampilkan nama dosen menggunakan metode _getNama()_ dari class Pengguna
```
echo "Nama Dosen : " . $dosen->getNama() . "<br>";
```
Menampilkan mata kuliah yang diampu dosen menggunakan metode _getmatkul()_ dari class Dosen
```
echo "Mata Kuliah : " . $dosen->getmatkul();
?>
```
 Outputnya sebagai berikut :
 
### 4. Polymorphism
```
<?php
// Kelas Pengguna sebagai kelas induk
class Pengguna {
    // Metode aksesFitur() didefinisikan di kelas induk, tetapi tidak ada implementasi
    public function aksesFitur() {
        // Implementasi dapat diisi oleh kelas turunan
    }
}
```
```
// Kelas Dosen yang merupakan turunan dari kelas Pengguna
class Dosen extends Pengguna {
```
```
    // Konstruktor kelas Dosen, saat ini tidak melakukan apa-apa
    public function __construct() {}
```
```
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
echo "Dosen mengakses fitur Penilaian." . $dosen->aksesFitur();
echo "<br>";
// Memanggil metode aksesFitur() dari objek Mahasiswa
// Karena aksesFitur() kosong, hanya string "Mahasiswa mengakses fitur pembelajaran." yang ditampilkan
echo "Mahasiswa mengakses fitur Jadwal." . $mahasiswa->aksesFitur();
?>
```
outputnya sebagai berikut :
### 5. Abstraction

```
<?php
// Kelas abstrak Pengguna
abstract class Pengguna {
    // Metode abstrak
    abstract public function aksesFitur();
}
```
```
// Kelas Mahasiswa yang mengimplementasikan Pengguna
class Mahasiswa extends Pengguna {
    // Implementasi metode aksesFitur untuk Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa mengakses fitur Jadwal.";
    }
}
```
```
// Kelas Dosen yang mengimplementasikan Pengguna
class Dosen extends Pengguna {
    // Implementasi metode aksesFitur untuk Dosen
    public function aksesFitur() {
        return "Dosen mengakses fitur Penilaian.";
    }
}
```
```
// Demonstrasi penggunaan
$mahasiswa = new Mahasiswa();
$dosen = new Dosen();
```
```
echo $mahasiswa->aksesFitur(); 
echo "<br>";
echo $dosen->aksesFitur(); 
?>
```
outputnya sebagai berikut :