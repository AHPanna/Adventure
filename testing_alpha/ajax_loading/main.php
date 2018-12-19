<?php
$arr = ['Setting Up the map...','Reading youre commands....','Adding all mobs....',' Rising up Adventure','Are you ready ?','Let s Gow.... '
,'Finished dead'];
//$arr2=['.','test','.','.','hey','.','.','suc','.','end'];

//using finishing lines

foreach($arr as $value) {
    session_start();
    $_SESSION["map"]=$value;//value
    
    session_write_close();
    //ob_end_clean();
    sleep(1);
    
}
flush();

?>