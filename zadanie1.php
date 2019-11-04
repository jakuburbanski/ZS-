<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="number" name="liczba1" placeholder="liczba 1"><br><br>
      <input type="number" name="liczba2" placeholder="liczba 2"><br><br>
      <input type="radio" name="dzialanie" value="s" >suma
      <input type="radio" name="dzialanie" value="p">przedzial
      <input type="submit" name="button" value="Zatwierdz">
    </form>

    <?php
function przedzial($x,$y){
  while ($x<=$y){
    echo $x,'<br>';
    $x++;
  }
}
    $dzialanie = $_POST['dzialanie'];
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'] ;
    switch ($dzialanie) {
      case 's';
        $dzialanie= 'suma';
        break;
      case 'p';
        $dzialanie= 'przedzial';
        break;

    }
    if ($dzialanie=='suma')
{echo $liczba1+$liczba2;
}
else if($dzialanie=='przedzial')
{
  przedzial($liczba1,$liczba2);
}

     ?>
  </body>
</html>
