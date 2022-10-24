<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktis!</title>
</head>
<body>
  <?php
  $phrase = "North Negros";
  echo $phrase;
  echo "<br>";
  echo $phrase[0];
  echo "<br>";
  echo strtolower($phrase);
  echo "<br>";
  echo strtoupper($phrase[2]);
  echo "<br>";
  echo str_replace("Nor", "Sou", $phrase);
  echo "<br>";
  echo strtoupper($phrase);
  echo "<br>";
  echo strlen($phrase);
  echo "<br>";
  $phrase[0] = "F";
  echo $phrase;
  echo "<br>";
  echo substr($phrase, 6, 5);
  echo "<br>";
  echo $noob = "bobo";
  echo "<br>";
  echo $noob[0];
  echo "<br>";
  echo $phrase;
  echo "<hr>";
  
  echo -69.420;
  echo "<br>";
  echo 100 - 33;
  echo "<br>";
  echo 10 % 3;
  echo "<br>";
  $numb = 69;
  echo $numb++;
  echo "<br>";
  echo $numb;
  echo "<br>";
  echo $numb += 21;
  echo "<br>";
  $numb = -3232;
  echo abs($numb);
  echo "<br>";
  echo sqrt(49);
  echo "<br>";
  echo pow(3, 4);
  echo "<br>";
  $num1 = 69;
  $num2 = 420;
  echo max($num1, $num2);
  echo "<br>";
  echo min($num1, $num2);
  echo "<br>";
  echo round(68.6);
  echo "<br>";
  echo ceil(4.3);
  echo "<br>";
  echo floor(6.9);


  ?>
</body>
</html>