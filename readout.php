<?php
   foreach (glob("*.txt") as $filename) {
      echo "$filename " . file_get_contents($filename) . "\n";
   }
?>
