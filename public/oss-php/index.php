<?php

echo '<pre>';

// echo 'Hello world';

// $a = true;
// $b = 'chaine';
// $d = 42;
// $e = [1, 2, 3];
// $f = [];
// $f[] = 4;
// $f[] = 5;

// $g = '2';


// var_dump($a, $b, $c, $d, $e, $f);
// var_dump($g + $d);

// $convertedInteger = (int) $g;

// var_dump($g, $convertedInteger);

// $convertedBool = (bool) $d;

// var_dump($b, $convertedBool);

// $myvar = 'rewjdghsjds';

// var_dump($myvar);

// unset($myvar);

// var_dump($myvar);

// $z = 42;
// $suffix = '12 trucs';

// var_dump($z + $suffix);

// $a = 'tesy';

// echo $a.'3rwekfsdjbs';


// $myVar12 = true;

// $init = '';

// var_dump($_SERVER, $_GET, $_POST);


// $a = 42;

// function display42()
// {
//     global $a;
//     $a = 12;

//     var_dump($a);
// }

// display42();
// var_dump($a);

// $a = 'bonjour';
// // $bonjour = 'monde';

// $$a = 'monde';

// var_dump($a, $bonjour, "$a ${$a}");

// const MY_AWESOME_CONST = 'eqweq';

// var_dump(__FILE__.__LINE__);

// $a = 'value';
// $b = &$a;

// var_dump($a, $b);

// $b = 'an other value';

// var_dump($a, $b);

// $a = 42;

// function increment(&$number)
// {
//     $number++;
// }

// echo $a;
// increment($a);
// echo $a;

// $a = 'bonjour';

// function &getGoodOne()
// {
//     global $a;

//     return $a;
// }

// $b = &getGoodOne();

// var_dump($a, $b, getGoodOne());

// // $a = 'aurevoir';

// var_dump($a, $b);

// 1 + 2 => 3

// !true => false

// 42++ => 43

// $a = 42;

// $a += 20;

// $bool ? echo 'vrai' : echo 'faux';

// if ($bool) {
//     echo 'vrai';
// } else {
//     echo 'faux';
// }

// var_dump(round(3/2));

// $qwerty = 3;
// '0011';
// '0001';
// '0110';

// var_dump($qwerty << 1);

// $enabled = 1;

// $a = 0;

// var_dump(++$a);

// if (isset($a) || isset($b)) {

// }

// $array = [];

// $array[] = 'jdhgjdhg';
// $array[] = 'fsgdshbds';

// $array = ['key' => ['subkey' => ['subsubkey' => 'subvalue']]];
// $array['key']['subkey'][] = 'test';

// var_dump($array['key']['subkey']['subsubkey'] === 'subvalue');

// class MyObject extends MyOtherObject {}

// class MyOtherObject {}

// $object = new MyObject();

// var_dump($object instanceof MyOtherObject);

// $fruits = ['apple', 'pear', 'banana'];

// var_dump($fruits);

// foreach ($fruits as $fruit) {
//     if ('pear' === $fruit) {
//         continue;
//     }

//     var_dump($fruit);
// }

// function mafonction()
// {
//     return '3';
// }

// $qwerty = mafonction();

// var_dump(include __DIR__.'/lib.php');

// var_dump('qui ne sera pas affiche');

// echo '</pre>';

// $a = 'q q';
// $var = str_replace(' ', '', $a);

// function qwerty($argMandatiry, ...$lerestemanfou)
// {
//     var_dump($argMandatiry, $lerestemanfou);
// }

// qwerty(1);

// function strict($arg1, $arg2 = 24)
// {
//     echo 'jshsdj';
// }

// strict(1);

// function qwerty()
// {
//     return 'qwerty';
// }

// echo qwerty();

// if (false) {
//     $function = 'qwerty';
// } else {
//     $function = 'qwerty2';
// }

// echo "\n";

$test = 'test';

$asdfgh = function ($a, $b) use ($test) {
    $test == true;

    return $a + $b;
};

echo $asdfgh(2, 3);
