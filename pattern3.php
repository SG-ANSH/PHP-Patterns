<?php
echo "\nPattern 3:\n";
$rows = 3; 
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo "- ";
    }
    echo "*\n"; // Print star
}
?>
