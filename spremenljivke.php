<?php
  $ime = 'Aleksander'; // ime spremenljivke (variable) je $ime. Ko kličeš $ime, se izpiše 'Aleksander'

  echo 'Moje ime je ' . $ime . "<br>";

  // Malo matematike
  $a = 7;
  $b = 6;
  echo $a + $b . "<br>";

  // Uporaba globalnih in lokalnih spremenljivk:
  $x = 10; // Globalno

  function test() {
    // Klicanje x-a znotraj funkcije mi vrne error
    echo "<p>Spremenljivka x znotraj funkcije test je: $x</p>";
  }
  test();
  echo "<p>Spremenljivka x izven funkcije test je: $x</p>";

  // Če spremenljivko uporabim v funkciji, jo pa potem lahko kličem samo v tej funckiji - taki spremenljivki rečemo tudi lokalna spremenljivka
  function test2() {
    $y = 5;
    echo "<p>Spremenljivka x znotraj funckije test2 je: $y</p>";
  }
  test2();
  echo "<p>Spremenljivka x zunaj funkcije test2 je: $y</p>";

  // Ko funkcija pride do konca oz., ko se izvede, se običajno izbrišejo tudi vse njene spremenljivke. Včasih pa to spremenljivko potrebujem za nadaljnje delo. V tem primeru, ko prvič deklariram spremenljivko moram uporabiti ključno besedo static.
  function test3() {
    static $x = 8;
    echo $x . "<br>";
    $x++; // vsak krog prištej +1
  }
  test3();
  test3();
  test3();
?>
