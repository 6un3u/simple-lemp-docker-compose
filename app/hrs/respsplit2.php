<?php
$a=$_GET['lang'];
if (strcmp($a,'EN') == 0){
    echo "Language selected is English";
} elseif (strcmp($a,'KOR') == 0){
    echo "Language selected is Korean";
} else{
    echo "No valid language selected :)";
}
?>