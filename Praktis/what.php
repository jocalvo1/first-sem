<?php
#pede gali icomment ang hash sign
$x = 1;
# basta ara sa gwa sang function global na tawag.
function bobo() {
  global $x;
  // we need global nga keywoard to access global variables.
  static $y = 1;
  print $y;
  $y++;
}
echo "<h1>HELLO </h1>";
bobo();
echo "<br>";
bobo();
echo "<br>";
bobo();
echo "<br>";
bobo();
echo "<br>";
bobo();
// ga add up sa tungod ang nakastatic ang $y
# ang static daw gina save ya na ang before nga value so kung ang last nga value na addan ang next nga value kung addan mo is naaddan na nga daan. For example, kung ang una is 0+1 where 0 is initial value, kung wala na naka static ang value sina is 0 lang gd kung iprint mo liwat. whereas kung butangan mo static. kopyahon ya lang to ang last nga value kag kag amo na ang iya i output.
