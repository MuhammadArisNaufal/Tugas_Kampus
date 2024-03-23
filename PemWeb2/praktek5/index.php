<?php
    class Manusia {
        public $nama;
        public $umur;

        public function setNama($nama) {
            $this->nama = $nama;
        }

        public function setUmur($umur) {
            $this->umur = $umur;
        }

        public function getInfo() {
            return "Nama: " . $this->nama . ", Umur: " . $this->umur;
        }
    }

    $ariskun = new Manusia();
    $ariskun->setNama("Takanashi Aris");
    $ariskun->setUmur(20);
    echo $ariskun->getInfo();

    echo "<br>";

    $rikka = new Manusia();
    $rikka->setNama("Takanashi Rikka");
    $rikka->setUmur(20);
    echo $rikka->getInfo();
?>