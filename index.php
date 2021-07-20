<?php
$arraymy = array('Lily' => $array('12.12.1985', '12.12.1990'), 'Niki', 'Olja', 'Nadja', 'Zaja', 'Lyda');



$pizza  = "Nazar,12.12.1985/Petro,12.12.1985";




function name_arrey ($pizza, $arraymy) {
    $pieces = explode(" ", $pizza);
    foreach ($pieces as $val) {
        $is_name = true;
        foreach ($arraymy as $value) {
            if ($val == $value) {
                $is_name = false;
            }
        }
        if ($is_name) {
            $arraymy [] = $val;
        }
    }

    echo '<pre>';
    var_dump($arraymy);
    echo '</pre>';
}




name_arrey ($pizza, $arraymy);




























echo '<br>';echo '<br>';echo '<br>';echo '<br>';

$namemy_txt = "Nikoja";
function one_two ($namemy_txt) {
    return $namemy_txt ." hello!!!!! ";
}
echo one_two ($namemy_txt);


$arraymy = array('Lily', 'Niki', 'Olja', 'Nadja', 'Zaja', 'Lyda');
$arraymy2 = array('Lily1', 'Niki2', 'Olja3', 'Nadja4', 'Zaja5', 'Lyda6');

function array_my ($arraymy) {

    foreach ($arraymy as $value) {
        echo $value;
        echo '<br>';
    }
}
array_my ($arraymy);
array_my ($arraymy2);

//$function_txt =  one_two ($namemy_txt);
//var_dump($function_txt);

function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}

recursion(5);








echo'<br>';
echo'Start foreach';
echo'<br>';

$a = array(
    "one"       => 1,
    "two"       => 2,
    "seventeen" => array(
        "bybluk0" => 'Lily',
        "bybluk1" => 'Niki',
        "bybluk2" => 'Olja',
        'Nadja',
        'Zaja',
        'Lyda',
                array(
                    "bybluk00" => 'Lily1',
                    "bybluk11" => 'Niki2',
                    "bybluk22" => 'Olja3',
                    'Nadja4',
                    'Zaja5',
                    'Lyda6'
                )
        ),
    "three"     => 3
);
//var_dump($a);

echo '<pre>';
//print_r($a);
echo '</pre>';

foreach ($a as $k => $v) {
    echo"$k +++ $v<br>";
    foreach ($v as $val => $val22){

        echo"$val --- $val22+++<br>";

        foreach ($val22 as $val222 => $val34){
            echo"$val222---$val34 <br>";
        }
    }


/*
    if ($k == "seventeen") {
        echo "$v\n";
        echo'<br>';
        break;
    }
    //echo "$k\n";
    echo'<br>';
    echo "my -  $v\n";
    echo'<br>';
*/
}















echo'End foreach';




echo'<br>';echo'<br>';
















$i = 0;
while ($i <= 10) {

    echo $arraymy[$i];
    echo'test<br>';
    echo $i++;
}



/* FOR */

/* пример 1 */
echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    //echo $i;
    //echo "<br>";
}

/* пример 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    //echo $i;
}
echo "<br>";

/**/


echo '<pre>';
echo count($arraymy);
//print_r($arraymy);
echo '</pre>';

for ($z = 0; $z < count($arraymy); $z++){
    echo $arraymy[$z];
    echo "<br>";
    echo $z;
    echo "<br>";

}

echo "<br>";
echo "<br>";

echo $arraymy[0];
echo "<br>";

echo $arraymy[1];
echo "<br>";




$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

//echo count($people);

for($i = 0, $size = count($people); $i < $size; ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
}
echo '<pre>';
print_r($people);
echo '</pre>';
























echo "Start <br>";

$test = 55;
$pereminna = 100;
echo $test;
echo $pereminna;
echo "<br>";
echo $test + $pereminna;
echo "<br>";

$test2 = "55";
$pereminna2 = "100";
echo $test2 ."test". $pereminna2;

/*Типи даних*/
$integer_pr     = 5;
$float_pr       = 5.5;
$string_pr      = 'string';
echo "<br>";
$array = array();
$array[] = 'Joni';
echo '<pre>';
print_r($array);
echo '</pre>';
echo "<br>";
$pereminna = array('Dana', 'Kira', 'Alla', 'Helen', 'Lana', 'John');
echo $pereminna[1];
/*Масив*/
var_dump($pereminna);
echo '<br>';
print_r ( $pereminna);
echo '<pre>';
print_r($pereminna);
echo '</pre>';

/*Асоціативні масиви*/
$pereminna_asociatuvnuj = array(
    'Dana'  => 500,
    'Kira'  => 1000,
    'Alla'  => 444,
    'Helen' => 50000,
    'Lana'  => 60000,
    'John'  => 400
);
echo $pereminna_asociatuvnuj['Lana'];

echo '<pre>';
print_r($pereminna_asociatuvnuj);
echo '</pre>';
/*Багатовимірні масиви масиви*/
$pereminna_bahato_vumirn = array(
    'Dana'  => array(
        'arg'       => 25,

        'family'    => 'Mina',
    ),
    'Kira'  => 'Nensi',
    'Alla'  => 'Dolli',
    'Helen' => 'Roberts',
    'Lana'  => 'Simson',
    'John'  => 'Smith'
);
echo '<pre>';
print_r($pereminna_bahato_vumirn['Dana']['family']);
echo '</pre>';
/*БУлеві значення*/
$is_true = true;
$is_false = false;
/*Різниця між “txt $a” - як перемінна   ‘txt $a’ - як текст*/




$a = 'bubluk';
echo 'Як текст $a <br>';
echo "Як перемінна $a";
echo '<br>';




/*Конкатенація - об'єднання стрічки*/
$b = 'один';
$c = 'два';

echo $b.$c;
echo "Як перемінна ".$a;
echo '<br>';

$string_txt = array('Test 1', 'Test 2', 'Test 3', 'Test 4', 'Test 5', 'Test 6');
echo $string_txt[0].' - '. $b . '<br>'.$string_txt[1].' - '. $c;


/* + - * / % - оператори*/
echo '<br>';
$d = 7;
$f = 3;

echo $d + $f;
echo '<br>';

echo $d - $f;
echo '<br>';

echo $d * $f;
echo '<br>';

echo $d / $f;
echo '<br>';

echo $d % $f;
echo '<br>';

/* Умови If <> == != >= <=  or - або, and - і */

$g = 7;
$k = 7;
if ($g >= $k) {
    echo '$g > $k';
    echo '<br>';
}

if ($g > $k) {
    echo '$g > $k';
    echo '<br>';
} else {
    echo '$g < $k';
    echo '<br>';
}

if ($g > $k) {
    echo '$g > $k';
    echo '<br>';
} else if ($g == $k) {
    echo '$g = $k';
    echo '<br>';
} else {
    echo '$g < $k';
    echo '<br>';
}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
/* && || ! */

$s = 25;
if ($s != "") {
    echo "true";
}

echo '<br>';

if (10 < $s && $s < 20 ){
    echo "більше 10 - ".$s." менше 20";
}


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';



$t = "dfgdfdfg";

echo '<br>';

if ( $t != "") {
    /*менше 10*/
    if ( $t < 10) {
        echo 'число '. $t. ' менше 10';
    }
    /*більше 10 менше 20*/
    if ($t > 10 && $t < 20) {
        echo 'число '. $t. ' більше 10 менше 20';
    }
    /*число більше 20 і менше 30*/
    if ($t > 20 && $t < 30){
        echo 'число '.$t. ' число більше 20 і менше 30';
    }
    /*більше 30*/
    if ($t > 30){
        echo 'число '.$t. ' більше 30';
    }
} else {
    echo 'ВВЕДІТЬ ЧИСЛО';
}



echo '<br>';
$v = 1;
$r = (1 == $v) ? 'Yes' : 'No'; // $r is set to 'Yes'
$r = (3 == $v) ? 'Yes' : 'No'; // $r is set to 'No'
echo $r ;










echo '<br>';
echo '<br>';






$zzzz = 1;
$zzzz = $zzzz + 1;

echo $zzzz;
$zzzz += 1;
echo '<br>';
echo $zzzz;
$zzzz++;
echo '<br>';
echo $zzzz;
echo '<br>';
$zzzz--;

echo $zzzz;
echo '<br>';

























































/*while*/

$i = 1;
while ($i <= 10) {
    echo $i++;  /* выводиться будет значение переменной
                   $i перед её увеличением
                   (post-increment) */
}

/* пример 2 */

$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;



/*foreach*/

/* Пример 1: только значение */

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Текущее значение переменной \$a: $v.\n";
}

/* Пример 2: значение (для иллюстрации массив выводится в виде значения с ключем) */

$a = array(1, 2, 3, 17);

$i = 0; /* только для пояснения */

foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}

/* Пример 3: ключ и значение */

$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v.\n";
}

/* Пример 4: многомерные массивы */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

/* Пример 5: динамические массивы */

foreach (array(1, 2, 3, 4, 5) as $v) {
    echo "$v\n";
}


/*function*/
function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Пример функции.\n";
   // return $retval;
}

//explode

//rand



















