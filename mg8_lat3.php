
<?php
function factorial ($n){
    if ($n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
echo "Hasil faktorial dari 5 = ".factorial(5);
?>