<!-- UTF-8 trenutno nima supporta na Windowsih, zato se namesto tega vpiše "three letter string code". Za slovenščino tega string code-a nisem našel, zato je spodaj zapisan način, ki je napisan tudi na php.net -->
<?php
  setlocale(LC_TIME, 'sl_SI.UTF-8');
  echo 'Danes je: ' . strftime("%A, %e. %B. %Y") . "<br>";
  echo 'Časovna razlika: ' . strftime("%z");
?>

<!-- Spodaj pa uporabim še "date" -->
<!-- Razlika med date in strftime je ta, da "date" ne moremo lokalizirat, medtem, ko strftime lahko lokaliziramo v poljuben jezik. -->
Leto:
<?php echo date ('Y'); ?>
<br>
Mesec:
<?php echo date ('m'); ?>
<br>
Dan:
<?php echo date ('d'); ?>
<br>
Evropski zapis datuma:
<?php echo date ('d.m.Y'); ?>
<br>
Slovenski zapis datuma:
<?php echo date ('d. ' . 'm. ' . 'Y'); ?>
<br>
<hr>
Danes je <?php echo date ("l, " 'd. ' . 'm. ' . 'Y'); ?>
