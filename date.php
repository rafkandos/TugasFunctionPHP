<?php
    //#TASK 1
    echo date("l") ."<br><br>";

    //#TASK 2
    echo date("l, d-M-Y", 
        time() +
            60 * 60 * 60 * 24 + 100) ."<br><br>";
?>