<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Log-In Form</h1>
  <hr>
  <form action="LogIn.php" method="get">
    Username: <input type="text" name="Username">
    <br>
    Password: &nbsp<input type="text" name="Password">
    <br>
    <input type="submit">
  </form>
  <br>
  <?php
  echo "Your Username is ", $_GET["Username"];
  echo "<br>Your Password is ", $_GET["Password"]
  ?>
</body>

</html>