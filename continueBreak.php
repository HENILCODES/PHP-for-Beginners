<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i === 3) {
        echo "--------------" . "<br>";
        continue; //it skips the next statement
    }
    
    echo "Number : " . $i . "<br>";

    if ($i === 8) {
        echo "Break";
        break; //it will end the "for" loop
    }
}
?>