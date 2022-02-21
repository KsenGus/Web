<?php
    /* Imagine a lot of code here */

    //1.Доступ по ссылке
    echo "Task 1" . "<br>";
    $very_bad_unclear_name = "15 chicken wings";
    // Write your code here:
    $order = &$very_bad_unclear_name;
    $order .= " and coffee";
    //Don't change the line below
    echo "\nYour order is: $very_bad_unclear_name.";
