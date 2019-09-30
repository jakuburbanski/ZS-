<?php
$potęga = 2 ** 10;
echo $potęga;

$a = 1;
$b = 1.0;

if ($a == $b)
{
  echo "$a jest równa $b<br>";
}
else
{echo "$a nie jest równa $b<br>";
}


if ($a == $b)
{
  echo "$a jest identyczna $b<br>";
}
else
  {
    echo "$a nie jest identyczna $b<br>";
  }
  echo gettype($a);
  echo gettype($b),'<hr>';

  $x = 1;
  $y = 1;
  $result = $x <=> $y;
  echo $result,'<hr><hr>';

  $x = 2;
  echo $x++;
  echo ++$x;
  echo $x;
  $y = $x++;
  echo $y;
  $y = ++$x;
  echo $y;
  echo ++$y,'<hr>';


  $text1 = '123abc';
  $text1 = (int)$text1;
  echo $text1,'<br>';

  $text2 = 0;
  $text2 = (bool)$text2;
  echo $text2,'<br>';
  echo @gettype($text2);

  $text3 = 123;
  $text3 = (unset)$text3;
  echo $text3,'<br>';
  echo @gettype($text3),'<hr>';


  $x = 10;
  echo is_string($x);
  echo is_bool($x);
  echo is_float($x);
  echo is_int($x);
  echo is_null($x),'<hr>';



  $w;
  echo @gettype($w),'<hr>';


  echo $_SERVER['SERVER_PORT'],'<br>';
  echo $_SERVER['SERVER_NAME'],'<br>';
  echo $_SERVER['SCRIPT_NAME'],'<br>';
  echo $_SERVER['SERVER_PROTOCOL'],'<br>';
  echo $_SERVER['DOCUMENT_ROOT'],'<br>';


  $localfile = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'].'<br>';

  echo $localfile, '<hr>';


  define('NAZWISKO', 'Kowalski');
  echo NAZWISKO,'<br>';


  define('imie', 'Janusz');
  echo imie,'<br>';


  define('surname', 'Nowak', true);
  echo surname,'<hr>';



  echo PHP_VERSION,'<br>';
  echo gettype(PHP_VERSION),'<br>';

  if(PHP_VERSION > 5.6)
  {
    echo 'Nowa wersja';
  }
  else {
    echo 'stara wersja','<br>';
  }


  echo PHP_OS,'<br>';
  echo __LINE__,'<br>';
  echo __FILE__,'<br>';
  










 ?>
