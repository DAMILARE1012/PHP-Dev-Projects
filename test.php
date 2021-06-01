<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- library dice -->
    <link href = "./dice/dice-1.0.min.css" rel="stylesheet">
    <link href = "./try.css" rel="stylesheet">

    <title><?php echo "Random Circle"; ?></title>
  </head>
  <body>
    <div class="container">
      <!-- Content here -->
      <h1>Random Number Circle</h1>
      <p>random it until you die!</p>
      <form action = "" method="POST">
          <div class="mb-3">
              <label for="diceNum"  class="form-label">Circle to roll : </label>
              <input type="number" class="form-control" id="diceNum" name="diceNum" placeholder="0">
          </div>
          <div class="mb-3">
              <label for="diceSide" class="form-label">Sides of Circle : </label>
              <select class="form-select" aria-label="Default select example" id="diceSide" name="diceSide">
                  <option selected>Open this select circle</option>
                  <option value="4">c4</option>
                  <option value="6">c6</option>
                  <option value="8">c8</option>
                  <option value="10">c10</option>
                  <option value="12">c12</option>
                  <option value="20">c20</option>
              </select>
          </div>
          <div class="mb-3">
            <input class="btn btn-success btn-sm" type="submit" role="button"></input>
          </div>
      </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
          $numDice = $_POST["diceNum"];
          $sideDice = $_POST["diceSide"];
          echo "<p>There are ".$numDice ." circle.</p>";

          $totalNilaiDice = 0;
          for($x=1; $x<=$numDice; $x++){
              $randDice = rand(1, $sideDice);
              // echo $randDice;
              $totalNilaiDice += $randDice;

              $diceMod = fmod($randDice, 6); 
              echo '
              <span class="round-'.$diceMod.'">'.$randDice.'</span>
              ';
              
          }
          echo"<br>";
          echo "<p>Total Number Circle is  ".$totalNilaiDice."</p>";
          
      }

  ?>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  </body>
</html>