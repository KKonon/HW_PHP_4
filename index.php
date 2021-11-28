<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Kirill_Kononovich" />
        <title>HW-PHP-2</title>
        
    </head>

    <body>
        <?php 

            echo "<hr />";
            echo '<b>Задание 1</b> | Дана строка - london is the capital of great britain. Сделайте из нее строку - London Is The Capital Of Great Britain.';
            echo "<hr />";

            $string = "london is the capital of great britian";

            echo ucwords($string);

            echo "<hr />";
            echo '<b>Задание 2</b> | Дана строка html <b>css</b> php. Удалите теги из этой строки. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.';
            echo "<hr />";

            $string = "html <b>css</b> php";
            $string2 = strip_tags($string);
            $arr = explode(" ", $string2);
            
            var_dump($arr);

            echo "<hr />";
            echo '<b>Задание 3</b> | Дана строка. Перемешайте символы этой строки в случайном порядке.';
            echo "<hr />";

            $string = "text random";

            echo ("Исходное значение строки: $string <br />");
            echo str_shuffle($string);

            echo "<hr />";
            echo '<b>Задание 4</b> | Найдите количество дней в текущем месяце. Скрипт должен работать
            независимо от месяца, в котором он запущен.';
            echo "<hr />";

            echo date("t");

            echo "<hr />";
            echo '<b>Задание 5</b> | Выведите текущую дату-время в форматах 2025-12-31, 31.12.2025, 31.12.13, 12:59:59, timestamp.';
            echo "<hr />";

            echo date("Y-n-j ");
            echo date("j.n.Y ");
            echo date("j.n.y ");
            
            echo date("G:i:s");

            echo "<hr />";
            echo '<b>Задание 6</b> | В переменной $date лежит дата в формате 2025-12-31. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.';
            echo "<hr />";

            $date = date("Y-n-j ");
            $date1 = date("Y-n-j", strtotime($date."+ 2 days"));
            $date3 = date("Y-n-j", strtotime($date."+ 1 month + 3 days"));
            $date4  = date("Y-n-j", strtotime($date."+ 1 year"));
            $date5  = date("Y-n-j", strtotime($date4."- 3 days"));

            echo ("Текущая дата: $date <br />");
            echo ("Дата с прибавление двух дней: $date1 <br />");
            echo ("Дата с прибавление месяца и дней: $date3 <br />");
            echo ("Добавили год: $date4 <br />");
            echo("Отняли от даты выше 3 дня: $date5");

            echo "<hr />";
            echo '<b>Задание 7</b> | Дана строка с буквами и цифрами, например, 1a2b3c4b5d6e7f8g9h0. Удалите из нее все цифры. То есть в нашем случаи должна получится строка abcbdefgt.';
            echo "<hr />";

            $string = "1a2b3c4b5d6e7f8g9h0";
            $regexp = "/([0-9])/";
            $result = preg_replace($regexp, " ", $string);

            echo $result;

            echo "<hr />";
            echo '<b>Задание 8</b> | Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное число.';
            echo "<hr />";

            $arr = [4, -2, 5, 19, -130, 0, 10];
            $max = max($arr);
            $min = min($arr);

            print_r($arr);
            print_r("<br />Максимальное число в массиве: $max <br />");
            print_r("Минимальное число в массиве: $min");

            echo "<hr />";
            echo '<b>Задание 9</b> | Выведите на экран случайное число от 1 до 100.';
            echo "<hr />";
       
            echo mt_rand(1,100);

            echo "<hr />";
            echo '<b>Задание 10</b> | Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.). Выведите на экран текущий день недели.';
            echo "<hr />";
            
            $arr = ["1"=>"Понедельник", "2"=>"Вторник", "3"=>"Среда", "4"=>"Четверг", "5"=>"Пятница", "6"=>"Суббота", "7"=>"Воскресенье"];
            echo $arr[date("N")];

            echo "<hr />";
            echo '<b>Задание 11</b> | Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]]. Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным.';
            echo "<hr />";

            $arr = [[1, 2, 3], [4, 5], [6]];
            $arr2 = (($arr[0][0]+$arr[0][1]+$arr[0][2]) + ($arr[1][0]+$arr[1][1]) + $arr[2][0]);
            echo ($arr2);

            echo "<hr />";
            echo '<b>Задание 13</b> | Используя ассоциативный массив, добавить на страницу навигационное';
            echo "<hr />";
            
            $arr = ["Home"=>"home.php",
                    "About"=>"about.php",
                    "Services"=>"services.php",
                    "Catalog"=>"catalog.php",
                    "Contacts"=>"contacts.php",        
                    ];
            
            foreach ($arr as $key => $value){
                echo ("<a href=" . $value .">" . $key . "</a><br />");
            }

            echo "<hr />";
            echo '<b>Задание 17</b> | Сделайте функцию, которая будет генерировать случайный цвет в hex (dechex) формате (типа #ffffff).';
            echo "<hr />";
            
            $color = substr(md5(rand()), 0, 6);

            echo ("<p style='color: #$color'>ЦВЕТ</p>") ;


            
         ?>
    </body>
</html>