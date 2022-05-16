<?php
   foreach (glob("*") as $filename) {
      echo "$filename " . file_get_contents($filename) . "\n";
   }
?>
