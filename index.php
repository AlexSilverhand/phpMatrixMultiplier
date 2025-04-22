<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Multiplication de matrices</title>
  <link rel="stylesheet" href="style.css">
<link rel="icon" href="./img/matrixfavicon.png" type="image/x-icon">
</head>
<body>
  <form action="matrixmult.php" method="POST">
    <div class="container">
      <h1>Multiplication de matrices</h1>
      <div>
        <?php
        echo"Matriz 1";
        for ($i = 0; $i < 3; $i++) {
          echo '<br>';
          for ($j=0; $j < 3; $j++) {
            echo '<input type="number" name="m['.$i.']['.$j.']" required>';
          }
        }
        ?>
      </div>
      <div>
        <?php
        echo"Matriz 2";
        for ($i = 0; $i < 3; $i++) {
          echo '<br>';
          for ($j=0; $j < 3; $j++) {
            echo '<input type="number" name="n['.$i.']['.$j.']" required>';
          }
        }
        ?>
      </div>
      <br>
      <input id="btnSubmit" type="submit" value="Multiplicar">
    </div>
  </form>
</body>
</html>