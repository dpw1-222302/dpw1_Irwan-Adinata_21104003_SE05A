<?php
for ($i = 1; $i <= 100; $i++) {
    if (isPrima($i)) {
        echo "$i adalah bilangan prima";
        echo "<br>";
    }
}

function isPrima($i)
{
    $z = 0;
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $z++;
        }
    }
    if ($z == 2) {
        return true;
    }

    return false;
}
?>