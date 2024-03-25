<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nama = $_POST['nama'];
        $rank1 = $_POST['rank1'];
        $rank2 = $_POST['rank2'];
        $rank3 = $_POST['rank3'];
        $rank4 = $_POST['rank4'];
        $rank5 = $_POST['rank5'];

        include "proses.php";

        $RakedGame = new RankedGame($nama, $rank1, $rank2, $rank3, $rank4, $rank5);
        $total = $RakedGame->getTotalScore();
        $feed1 = $RakedGame->getAnswerFeed1();
        $feed2 = $RakedGame->getAnswerFeed2();
        $feed3 = $RakedGame->getAnswerFeed3();
        $feed4 = $RakedGame->getAnswerFeed4();
        $feed5 = $RakedGame->getAnswerFeed5();
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
 
<div class="container p-2">

  <table class="table mt-5">
    <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">1st</th>
      <th scope="col">2nd</th>
      <th scope="col">3rd</th>
      <th scope="col">4th</th>
      <th scope="col">5th</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?= $nama ?></td>
      <td><?= 'Your answer is' .' '. $feed1?></td>
      <td><?= 'Your answer is' .' '. $feed2 ?></td>
      <td><?= 'Your answer is' .' '. $feed3 ?></td>
      <td><?= 'Your answer is' .' '. $feed4 ?></td>
      <td><?= 'Your answer is' .' '. $feed5 ?></td>
      <td><?= $total ?></td>
    </tr>
  </tbody>
</table>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>