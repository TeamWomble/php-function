<?php
echo "Insert Number : ";
$c = trim(fgets(STDIN));



function recursion($c){
    
    if ($c <= 10){
        echo "Nilai : $c\n";
        recursion($c + 1);
    }
}


recursion($c);



?>