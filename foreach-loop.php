<!-- foreach loop-i delujejo samo za array-e in se
uporablja za to, da loop-a skozi vrednosti v danem array-u. -->

<?php
  $barve = array('zelena', 'rdeča', 'rumena', 'modra', 'rjava');
  
  foreach ($barve as $vrednost) {
    echo "$vrednost <br>";
  }
?>
