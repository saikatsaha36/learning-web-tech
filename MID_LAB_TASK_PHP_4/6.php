<?php

    $arr= [5,'asd','!@#$'];
    $desiredElement=5;

    foreach($arr as $val)
    {
        if($val==$desiredElement)
        {
            echo"$desiredElement are in the array.\n";
        }
    }

?>