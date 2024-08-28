<?php
class Dosen {
    public $nama;
    public $nip;
    public $matkul;

    public function __construct($nama, $nip, $matkul) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matkul = $matkul;
    }
    
    public function tampilkanDosen() {
        return "Nama : $this->nama<br> 
                NIP : $this->nip<br> 
                Mata Kuliah : $this->matkul";
    }
}

$Dosen1 = new Dosen ("Cahya", "230102011", "Rekayasa Perangkat Lunak");

echo $Dosen1->tampilkanDosen();

?>
