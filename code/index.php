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
    

    //2.Числа
    echo "<br>" . "<br>" . "Task 2" . "<br>";
    $var1 = 1;
    echo $var1 . "<br>";
    $var2 = 2;
    echo $var2 . "<br>";
    $var3 = 5.28;
    echo $var3 . "<br>";
    echo 3*4 . "<br>";
    $last_month = 1187.23;
    $this_month = 1089.98;
    echo $last_month - $this_month;
    

    //11.Умножение и деление
    echo "<br>" . "<br>" . "Task 11" . "<br>";
    $num_languages = 4;
    $months = 11;
    $days = 16;
    $days_per_language = ($days * $months) / $num_languages;
    echo $days_per_language;
