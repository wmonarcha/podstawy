<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zmienne</title>
  </head>
  <body>
    <?php
    $name='Janusz';
    $surname='Nowak';
    echo 'Imię: $name<br>';
    echo "Imię: $name<br>";
    // konkatenacja .
    echo "Imię: $surname".'<hr>';

    // typy danych
    // boolean

    $prawda = true;
    $fałsz = false;
    echo $prawda; //1
    echo $fałsz,'<br>'; //nic nie wyswietli

    //integer

    $bin = 0b1010; //10
    $oct = 010; //8
    $dec = 20; //20
    $hex = 0xB; //11

    echo $hex,'<hr>';

    //skladnia heredoc
    $name='Krystyna';
    $text = <<< ETYKIETA
    Imię: $name<br>
    Nazwisko: $surname<hr>
ETYKIETA;

  echo $text;

    echo <<< E
      Heredoc 2<br>
      Imię: $name<hr>
  E;
    // skladnia nowadoc

    echo <<< 'E'
    Nowadoc<br>
    Imię: $name<hr>
  E;

    $city='Poznań';
    echo "Nazwa zmiennej: \$city,
    wartość: $city";
    ?>

  </body>
</html>
