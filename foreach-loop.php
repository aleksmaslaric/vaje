<!-- foreach loop-i delujejo samo za array-e in se
uporablja za to, da loop-a skozi vrednosti v danem array-u. -->

<?php
  $barve = array('zelena', 'rdeča', 'rumena', 'modra', 'rjava');

  foreach ($barve as $vrednost) {
    echo "$vrednost <br>";
  }

  $starost = array("Aleksandra" => "27", "Anja" => "24", "Miha" => "22", "Željko" => "32");

  foreach ($starost as $x => $vrednost) {
    echo "$x = $vrednost<br>";
  }
?>
