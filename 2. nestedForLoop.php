<?php
echo "<pre>";
for ($i = 1; $i <= 50; $i += 10) {
    for ($j = $i; $j < $i + 10; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
?>