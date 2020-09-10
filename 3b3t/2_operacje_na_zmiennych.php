<?php
    // wersja PHP
    echo PHP_VERSION,'<br>';
    //  echo phpinfo();

    $pow = 2**8;
    echo $pow,'<br>'; // 255

    echo 'a','b','c'; // abc
    echo '<br>';
    echo 'a'.'b'.'c'; // a+b+c => abc

    // operatory bitowe
    // and &, or |, xor ^, noy ~, <<, >>
    $x = 0b1010;
      echo "<hr>$x<br>";
      $x = $x << 2; //101000 (2) => 8+32=40
      echo "$x<br>";
      $x = $x >> 1; //10100 (2) => 4+16=20
      echo "$x<br>";

      // porównanie <=>
      $x = 10;
      $y = 20;

      echo $x <=> $y,'<br>';
      $result = $x <=> $y;
      echo $result;
 ?>
