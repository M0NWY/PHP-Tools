<?php
 foreach(glob('*') as $file) {
 echo file_get_contents( $file );   
}
?>
