<?php
// hollow triangle pattern
$size = 5;
for($i = 1; $i <= $size; $i++) {
    for($j = 0; $j < $i; $j++) {
        // not last row
        if($i != $size) {
            if($j == 0 || $j == $i - 1) {
                echo "*";
            }
            else {
                echo "&nbsp;&nbsp;";
            }
        }
        // last row
        else {
            echo "*";
        }
    }
    echo "<br>";
}
?>