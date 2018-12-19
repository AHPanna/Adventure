<?php
// a.php (this file should never display anything)
/*
ob_start();
include('b.php');
ob_end_clean();
echo "after clean";
include('b.php');
*/


ob_start();
function test($var) {
    if ($var === 0) { echo "Hello "; }
    if ($var === 1) { echo "World"; }
    if ($var < 0 || $var > 1) { 
        ob_clean(); 
        echo "Number is too big";        
    }
}

test(0);
test(1);
test(666);
ob_end_flush();

