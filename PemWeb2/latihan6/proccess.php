<?php
include 'connect.php';

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$st = $_POST['st'];
$dt = $_POST['dt'];

$query = "INSERT INTO timer(nama, tanggal, startat, doneat) VALUES ('$nama', '$tanggal', '$st', '$dt')";

if($conn->query($query)){
    header("location: index.php");
}else {
    echo "Error: " . $query. "<br>". $conn->error ;
}

$conn->close();

?>