<?php
    //#TASK 1
    echo date("l") ."<br><br>";

    //#TASK 2
    echo date("l, d-M-Y", 
        time() +
            60 * 60 * 60 * 24 + 100) ."<br><br>";

    //#TASK 3
    echo date("l, d-M-Y", mktime(0, 0, 0, date("m"), date("d") + 1000, date("Y"))) ."<br><br>";

    //#TASK 4
    echo date("l, d-M-Y", mktime(0, 0, 0, date("m"), date("d") - 500, date("Y"))) ."<br><br>";
?>