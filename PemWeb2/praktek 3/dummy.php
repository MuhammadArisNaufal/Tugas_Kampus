<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>

<form action="#" method="POST">
    <label for="program_studi">Program Studi:</label>
    <select id="program_studi" name="program_studi">
        <?php
        $programStudi = [
            "SI" => "Sistem Informasi",
            "TI" => "Teknik Informatika",
            "BD" => "Bisnis Digital"
        ];

        foreach ($programStudi as $kode => $nama) {
            echo "<option value='$kode'>$nama</option>";
        }
        ?>
    </select>

    <fieldset>
        <legend>Skill Web Programming (Skor)</legend>
        <?php
        $skills = [
            "HTML" => 10,
            "CSS" => 10,
            "JavaScript" => 20,
            "RWD Bootstrap" => 20,
            "PHP" => 30,
            "Python" => 30,
            "Java" => 50
        ];

        foreach ($skills as $skill => $skor) {
            echo "<label><input type='checkbox' name='skills[$skill]' value='$skor'> $skill</label><br>";
        }
        ?>
    </fieldset>

    <label for="domisili">Domisili:</label>
    <select id="domisili" name="domisili">
        <?php
        $domisiliOptions = ["Jakarta", "Depok", "Bogor", "Tangerang", "Bekasi", "Lainnya"];

        foreach ($domisiliOptions as $domisili) {
            echo "<option value='$domisili'>$domisili</option>";
        }
        ?>
    </select>

    <input type="submit" value="Submit">
</form>

</body>
</html>
