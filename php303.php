<?php
$x = 100;
$y = 100;
$z = '100';

echo "<h1>PHP Comparison Operators</h1>";
echo "<h1> x = $x <br /></h1>";
echo "<hr color='red' size='4px' />";

echo "x == z : ", var_dump($x == $z),"<br />";//$x == $z //Not good
echo "x === z : ", var_dump($x === $z),"<br />";//$x === $z //ok
echo "x <=> y : ", var_dump($x <=> $z),"<br />";//$x <=> $z//ERROR
echo "x <=> y : ", var_dump($x <=> $y),"<br />";//$x <=> $y
echo "x > y : ", var_dump($x > $y),"<br />";
echo "x < y : ", var_dump($x < $y),"<br />";
echo "x >= y : ", var_dump($x >= $y),"<br />";
echo "x <= y : ", var_dump($x <= $y),"<br />";
echo "x != y : ", var_dump($x != $y),"<br />";
echo "x == z : ", var_dump($x == $z),"<br />";//error
echo "x !== z : ", var_dump($x !== $z),"<br />";//ok
