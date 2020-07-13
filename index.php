<?php
 $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
 in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
 $modifica = $_GET["badword"];
 $testo_modificato = str_replace($modifica,"***",$testo);
?>
<h2> <?php echo $testo ?> </h2>
<h3>La lunghezza del testo è <?php echo strlen($testo) ?> </h3>
<h2>Il testo modificato è: <br> <?php echo $testo_modificato ?></h2>
