<?php

$a = 0;
while ($a <= 3) {
    echo "<p>$a in while </p>";
    $a++;
}
$b=0;
do {
    echo "<p>$b in do...while </p>";
    $b++;
} while ($b <= 3);

for ($i=0; $i < 4; $i++) { 
    echo "<p>$i in for </p>";
}
?>