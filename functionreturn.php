<?php

function cube($i) {

        return $i * $i * $i;
}

echo "Masukan Angka : ";
$i = trim(fgets(STDIN));

echo cube($i);


?>