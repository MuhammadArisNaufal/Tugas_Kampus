<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container pt-5 ">

        <form method="post" action="jawaban.php">
            <h1>Most Popular Game All The Time Is</h1>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
          <input id="nama" name="nama" type="text" class="form-control">
        </div>
    </div>
      <div class="form-group row">
        <label class="col-4 col-form-label" for="rank1">Rank #1st</label> 
        <div class="col-8">
          <select id="rank1" name="rank1" class="custom-select" required="required">
              <option value="minecraft">Minecraft</option>
            <option value="pubg">PUBG</option>
            <option value="gta5">GTA V</option>
            <option value="tetris">Tetris</option>
            <option value="wiisports">Wii Sports</option>
        </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="rank2" class="col-4 col-form-label">Rank #2nd</label> 
        <div class="col-8">
          <select id="rank2" name="rank2" class="custom-select" required="required">
              <option value="pubg">PUBG</option>
              <option value="tetris">Tetris</option>
              <option value="gta5">GTA V</option>
              <option value="wiisports">Wii Sports</option>
              <option value="minecraft">Minecraft</option>
          </select>
        </div>
      </div> 
      <div class="form-group row">
        <label for="rank3" class="col-4 col-form-label">Rank #3rd</label> 
        <div class="col-8">
          <select id="rank3" name="rank3" class="custom-select" required="required">
              <option value="tetris">Tetris</option>
              <option value="minecraft">Minecraft</option>
              <option value="pubg">PUBG</option>
              <option value="gta5">GTA V</option>
              <option value="wiisports">Wii Sports</option>
          </select>
        </div>
      </div> 
      <div class="form-group row">
        <label for="rank4" class="col-4 col-form-label">Rank #4th</label> 
        <div class="col-8">
          <select id="rank4" name="rank4" class="custom-select" required="required">
            <option value="minecraft">Minecraft</option>
            <option value="wiisports">Wii Sports</option>
            <option value="gta5">GTA V</option>
            <option value="tetris">Tetris</option>
            <option value="pubg">PUBG</option>
          </select>
        </div>
      </div> 
      <div class="form-group row">
        <label for="rank5" class="col-4 col-form-label">Rank #5th</label> 
        <div class="col-8">
            <select id="rank5" name="rank5" class="custom-select" required="required">
                <option value="wiisports">Wii Sports</option>
                <option value="pubg">PUBG</option>
                <option value="minecraft">Minecraft</option>
                <option value="tetris">Tetris</option>
            <option value="gta5">GTA V</option>
          </select>
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>
  </body>
</html>
