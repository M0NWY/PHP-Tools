<?php 

  $mydir = './posts'; 

  $myfiles = array_diff(scandir($mydir), array('.', '..')); 

  print_r($myfiles); 

  $mydir = './Dockerfile'; 

  $myfiles = array_diff(scandir($mydir), array('.', '..')); 

  print_r($myfiles); 

?> 
