<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
$name = 'Janusz';
echo "twoje imię: $name<br>";
echo "twoje imię:",$name. '<br>';
echo "twoje imię:".$name.'<br>';

$x = 10;
$hex = 0xA;
$oct = 021;
$bin = 0b1011;

echo $hex,'<br>';
echo $oct,'<br>';
echo $bin,'<hr>';

$name = 'Anna';
$surname = 'Kowal';

echo <<< ETYKIETA
imię: $name<br>
Nazwisko: $surname<hr>
ETYKIETA;

$x = <<< ETYKIETA
Heredoc<br>
imię: $name<br>
Nazwisko: $surname<hr>
ETYKIETA;


echo $x;

echo <<< 'E'
Nowdoc<br>
imię: $name<br>
Nazwisko: $surname<hr>
E;

$x = 20;
echo "nazwa zmiennej: \$x ma wartosc  $x";




     ?>

  </body>
</html>
