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


    //12.Степени
    echo "<br>" . "<br>" . "Task 12" . "<br>";
    echo 8**2;
    

    //13.Операторы присвоения
    echo "<br>" . "<br>" . "Task 13" . "<br>";
    $my_num = 6;
    $answer = $my_num;
    $answer += 2;
    $answer *= 2;
    $answer -= 2;
    $answer /= 2;
    $answer -= $my_num;
    echo $answer;
    
    
    //14.Математические функции
    //14.1.Работа с %
    echo "<br>" . "<br>" . "Task 14" . "<br>";
    $a = 11;
    $b = 3;
    echo $a % $b;
    if(($a % $b) == 0)
        echo "<br>" . "Делится";
    else echo "<br>" . "Делится с остатком. Остаток = " . ($a % $b);

    //14.2.Работа со степенью и корнем
    $st = pow(2, 10);
    echo "<br>". $st;
    echo "<br>" . sqrt(245);
    $arr = [4, 2, 5, 19, 13, 0, 10];
    $s = 0;
    foreach ($arr as $item)
        $s += $item**2;
    echo "<br>" . sqrt($s);

    //14.3.Работа с функциями округления
    echo  "<br>" . round(sqrt(379),0) . "\n\n" ;
    echo round(sqrt(379), 1) . "\n\n" ;
    echo round(sqrt(379), 2);
    $arr1 = ["floor" => floor(sqrt(587)) , "ceil" => ceil(sqrt(587))];
    echo "<br>" . $arr1["floor"] . "<br>" . $arr1["ceil"];
    echo  "<br>" . round(sqrt(587), 0);

    //14.4.Работа с min и max
    echo "<br>" . min(4,-2, 5, 19, -130, 0, 10);
    echo "<br>" . max(4, -2, 5, 19, -130, 0, 10);

    //14.5.Работа с рандомом
    echo "<br>" . rand(1, 100) . "<br>";
    $arr2 = [];
    for($i = 0; $i < 10; $i++)
    {
        $arr[$i] = rand(1, 100);
        echo $arr[$i] . " ";
    }

    //14.6.Работа с модулем
    echo "<br>" . abs($a - $b) . "<br>";
    $arr3 = [1, 2, -1, -2, 3, -3];
    for($i = 0; $i < 6; $i++)
    {
        $arr3[$i] = abs($arr3[$i]);
        echo $arr3[$i] . " ";
    }
    echo "<br>";

    //14.7.Общее
    //Делители
    $num = 30;
    $arr4 = [];
    $k = 30;
    for($i = 0; $i < $num; $i++)
    {
        if(($num % $k) == 0)
        {
            $arr4[$i] = ($num / $k);
            echo $arr4[$i] . " ";
        }
        $k--;
    }

    //Сумма элементов
    $arr5 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $sum = 0;
    $count = 0;
    while($sum <= 10)
    {
        $sum += $arr5[$count];
        $count++;
    }
    echo "<br>" . $count;
    
    
    //15.Функции
    echo "<br>" . "<br>" . "Task 15" . "<br>";
    function printStringReturnNumber()
    {
        echo "String is printed! ";
        return 1;
    }
    $my_num = printStringReturnNumber();
    echo $my_num;


    //16.Функции
    //1
    echo "<br>" . "<br>" . "Task 16" . "<br>";
    function increaseEnthusiasm($str = "")
    {
        return $str . "!";
    }
    echo increaseEnthusiasm("Hello");

    //2
    echo "<br>";
    function repeatThreeTimes($str = "")
    {
        $i = 0;
        while($i < 3)
        {
            echo $str . " ";
            $i ++;
        }
    }

    //3
    echo repeatThreeTimes("Hallo");

    //4
    echo "<br>";
    echo increaseEnthusiasm(repeatThreeTimes("Bonjour"));

    //5
    echo "<br>";
    function cut($st = "", $num = 10)
    {
        return substr($st , 0, $num);
    }

    //6
    $arr6 = [1, 2, 3, 4, 5];
    function rec($arr6, $i)
    {
        if($i >= 5)
            return;
        echo $arr6[$i] . " ";
        $i ++;
        rec($arr6, $i);
    }
    echo rec($arr6, 0);

    //7
    function SumOfNumber($n)
    {
        $s = 0;
        while($n > 0)
        {
            $s += ($n % 10);
            $n /= 10;
        }
        if($s > 9)
            SumOfNumber($s);
        return $s;
    }
    

    //17.Массивы
    //1
    echo "<br>" . "<br>" . "Task 17" . "<br>";
    $arr7 = [];
    $x = "";
    for($i = 0; $i < 10; $i++)
    {
        $arr7[$i] = $x;
        $x .= "x";
    }
    for($i = 1; $i < 10; $i++)
        echo $arr7[$i] . "<br>";

    //2
    function arrayFill($v, $n)
    {
        $mas = [];
        for($i = 0; $i < $n; $i++)
        {
            $mas[$i] = $v;
            echo $mas[$i] . " ";
        }
        return $mas;
    }

    //3
    $arr8 = [[1, 2, 3],  [4, 5],  6];
    function ItemSum($arr)
    {
        $sum = array_sum($arr);
        foreach ($arr as $item)
        {
            if(is_array($item))
                $sum += ItemSum($item);
        }
        return $sum;
    }
    echo ItemSum($arr8);

    //4
    echo "<br>";
    $arr9 = [];
    for($i = 0; $i < 3; $i++)
    {
        $k = 0;
        for($j = 0; $j < 3 ; $j++)
        {
            $arr9[$i][$j] = $j + $k;
        }
        $k += 3;
    }
    print_r($arr9);

    //5
    echo "<br>";
    $arr10 = [2, 5, 3, 9];
    $result = 0;
    for($i = 0; $i < 4; $i+=2)
    {
        $result += $arr10[$i] * $arr10[$i+1];
    }
    echo $result;

    //6
    echo "<br>";
    $user = ['surname'=> 'Guseva', 'name' => 'Ksenia', 'patronymic' => 'Andreevna'];
    foreach ($user as $str)
        echo $str . " ";

    //7
    echo "<br>";
    $date = ['year' => 2022 , 'month' => 2 , 'day' => 12];
    foreach ($date as $value)
        echo $value . " ";

    //8
    echo "<br>";
    $arr11 = ['a', 'b', 'c', 'd', 'e'];
    echo count($arr11) . "<br>";

    //9
    echo $arr11[count($arr11) - 1] . " ";
    echo $arr11[count($arr11) - 2];
    

    //18. Конструкция if else
    //1
    echo "<br>" . "<br>" . "Task 18" . "<br>";
    function TwoNumSum($a , $b)
    {
        if(($a + $b) > 10)
            return true;
        else return false;
    }

    //2
    function TwoNumEq($a , $b)
    {
        if($a == $b)
            return true;
        else return false;
    }

    //3
    $test = 0;
    if ($test == 0)
    {
        echo 'верно';
    }

    //4
    echo "<br>";
    $age = 19;
    function DigitSum($n)
    {
        $s = 0;
        while($n > 0)
        {
            $s += $n % 10;
            $n = floor($n / 10);
        }
        return $s;
    }
    if($age < 10 || $age > 99)
        echo "Не входит в диапазон";
    else
    {
        if(DigitSum($age) < 10)
            echo "Сумма однозначна";
        else echo "Сумма двузначна";
    }

    //5
    echo "<br>";
    $arr12 = [1,2,3];
    if (count($arr12) == 3)
        echo array_sum($arr12);
    

    //19.Циклы
    echo "<br>" . "<br>" . "Task 19" . "<br>";
    $pyr = [];
    $x = "";
    for($i = 0; $i < 20; $i++)
    {
        $pyr[$i] = $x;
        $x .= "x";
    }
    for($i = 1; $i < 20; $i++)
        echo $pyr[$i] . "<br>";
