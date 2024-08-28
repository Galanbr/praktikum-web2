# Dokumentasi Jobsheet 1
### _Menggunakan Konsep Kelas dan Objek dalam PHP_
### 1. Intruksi Kerja
Mendefinisikan class Mahasiswa dengan properti/atribut nama, nim dan jurusan
```
<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
```
Method _construct_ dengan parameter nama, nim dan jurusan. Menginisialisasi properti/atribut 
```
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
Method _tampilkanData()_ untuk menampilkan data Mahasiswa 
```
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
```
Method _updateJurusan_ untuk melakukan pembaruan pada properti/atribut jurusan
```
    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
```
method _setNim_ untuk merubah value dari properti/atribut _$nim_
```
    public function setNim($nim) {
        $this->nim = $nim;
    }
}
```
Membuat objek baru dari class Mahasiswa dan akan memanggi method _construct_
```
$mahasiswa1 = new Mahasiswa("Galan", "230102011", "Komputer dan Bisnis");
```
Menampilkan data awal Mahasiswa 
```
echo "Sebelum Diubah:<br>";
$mahasiswa1->tampilkanData();
```
Melakukan perubahan value properti/atribut _$nim_ dan _$jurusan_
```
$mahasiswa1->setNim("32102011");
$mahasiswa1->updateJurusan("Rekayasa Mesin");
```
Menampilkan data Mahasiswa yang telah diubah
```
echo "<br> Setelah Diubah:<br>";
$mahasiswa1->tampilkanData();
?>
```

### 2. Tugas
Mendefinisikan sebuah class bernama Dosen dengan atribut/properti publik _$nama_, _$nip_ dan _$jurusan_
```
<?php
class Dosen {
    public $nama;
    public $nip;
    public $matkul;
```
Method Construct dengan parameter _$nama_, _$nip_ dan _$jurusan_. Menginisialisasi properti/atribut
```
    public function __construct($nama, $nip, $matkul) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matkul = $matkul;
    }
```
Method _tampilkanDosen()_  untuk menampilkan data Dosen dan mengembalikan string yang berisi nama, nip, dan matkul
```
    public function tampilkanDosen() {
        return "Nama : $this->nama<br> 
                NIP : $this->nip<br> 
                Mata Kuliah : $this->matkul";
    }
}
```
Membuat objek baru dari class Dosen
```
$Dosen1 = new Dosen ("Cahya", "230102011", "Rekayasa Perangkat Lunak");
```
Menampilkan data Dosen dengan memanggil method _tampilkanDosen()_ dan menampilkan ke layar
```
echo $Dosen1->tampilkanDosen();
?>
```
