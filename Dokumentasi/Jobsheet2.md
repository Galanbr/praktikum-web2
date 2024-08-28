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

![classobject2](https://github.com/user-attachments/assets/2361e281-f4c1-495f-ab4d-d1e15a4a15b0)

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
    public function getJurusan() {
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

![encapsulation](https://github.com/user-attachments/assets/14f4aab8-c9c3-431b-9821-873f87812d67)


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

![inheritance](https://github.com/user-attachments/assets/503340c2-443b-4bd7-8d36-006df4d3bcc9)
 
### 4. Polymorphism
Mendefinisikan class Pengguna 
```
<?php
class Pengguna {
    public function aksesFitur() {
    }
}
```
Mendefinisikan class Dosen yang merupakan turunan dari Class Pengguna
```
class Dosen extends Pengguna {
    public function __construct() {}
```

```
    public function aksesFitur() {
        return "mengakses fitur Penilaian.";
    }
}
```
Mendefinisikan class Mahasiswa yang juga merupakan turunan dari class Pengguna
```
class Mahasiswa extends Pengguna {
    public function __construct() {}

    public function aksesFitur() {
        return "mengakses fitur Jadwal.";
    }
}
```
Membuat objek Dosen dan Mahasiswa
```
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();
```
Memanggil metode _aksesFitur()_ dari objek Dosen
```
echo "Dosen " . $dosen->aksesFitur();
echo "<br>";
```
Memanggil metode _aksesFitur()_ dari objek Mahasiswa
```
echo "Mahasiswa " . $mahasiswa->aksesFitur();
?>
```
outputnya sebagai berikut :

![polymorphism](https://github.com/user-attachments/assets/d5eab03e-7ebc-4ba0-8f77-32a89ca0551d)


### 5. Abstraction
Mendefinisikan class Abstract Pengguna
```
<?php
abstract class Pengguna {
    abstract public function aksesFitur();
}
```
Class Mahasiswa yang mengimplementasikan Pengguna
```
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        return "Mahasiswa mengakses fitur Jadwal.";
    }
}
```
Class Dosen yang mengimplementasikan Pengguna
```
class Dosen extends Pengguna {
    public function aksesFitur() {
        return "Dosen mengakses fitur Penilaian.";
    }
}
```
Membuat objek Mahasiswa dan Dosen
```
$mahasiswa = new Mahasiswa();
$dosen = new Dosen();
```
Memanggil metode _aksesFitur()_ dari objek mahasiswa dan dosen
```
echo $mahasiswa->aksesFitur(); 
echo "<br>";
echo $dosen->aksesFitur(); 
?>
```
outputnya sebagai berikut :

![abstraction](https://github.com/user-attachments/assets/bcab0e6d-acc7-4758-a549-64303be1806e)

