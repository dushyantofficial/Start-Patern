<?php
// downward triangle pattern
$size = 5;
for($i = 0; $i < $size; $i++) {
    // print stars
    for($j = 0; $j < $size - $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>