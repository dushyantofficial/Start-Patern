<?php
// left triangle pattern
$size = 5;
for($i = 0; $i < $size; $i++) {
    // print column
    for($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>