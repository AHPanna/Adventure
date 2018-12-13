<?php
$arr = ['Setting Up the map...','Reading youre commands....','Adding all mobs....',' Rising up Adventure','Are you ready ?','Let s Gow.... ','Finished U dead noob'];
foreach($arr as $value) {
    session_start();
    $_SESSION["progress"]=$value;
    session_write_close();
    sleep(2);
}