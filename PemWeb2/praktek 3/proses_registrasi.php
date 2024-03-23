<?php

    $nim = $_POST['nim'];
    $namaLengkap = $_POST['namaLengkap'];
    $gender = $_POST['gender'];
    $programStudi = $_POST['prodi'];
    $domisili = $_POST['domisili'];
    $selectedSkills = $_POST['skills'] ?? [];
    $email = $_POST['email'];

    $totalSkor = array_sum($selectedSkills);

    // Menghitung skor dan menentukan predikat
    if ($totalSkor == 0) {
        $predikat = "Tidak Memadai";
    } elseif ($totalSkor <= 40) {
        $predikat = "Kurang";
    } elseif ($totalSkor <= 60) {
        $predikat = "Cukup";
    } elseif ($totalSkor <= 100) {
        $predikat = "Baik";
    } elseif ($totalSkor <= 150) {
        $predikat = "Sangat Baik";
    } else {
        $predikat = "Skor di luar jangkauan";
    }

    // Output hasil
    echo "NIM: $nim <br>";
    echo "Nama Lengkap: $namaLengkap <br>";
    echo "Gender: $gender <br>";
    echo "Program Studi: $programStudi <br>";
    echo "Domisili: $domisili <br>";
    foreach ($selectedSkills as $skill => $skor) {
        echo "$skill, ";
    }
    echo "Total Skor Skill: $totalSkor <br>";
    echo "Predikat: $predikat <br>";
    echo "Email: $email <br>";

?>
