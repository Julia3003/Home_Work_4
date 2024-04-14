<?php

//boolean-integer несуворе
$value = false;
$value_2 = 5;

$result = $value == $value_2;
var_dump($result);

//boolean-integer cуворе
$value = false;
$value_2 = 5;

$result = $value === $value_2;
var_dump($result);

//boolean-float несуворе
$value = true;
$value_2 = 5.01;

$result = $value == $value_2;
var_dump($result);

//boolean-float cуворе
$value = true;
$value_2 = 5.01;

$result = $value === $value_2;
var_dump($result);

//boolean-string несуворе
$value = true;
$value_2 = 'text';

$result = $value == $value_2;
var_dump($result);

//boolean-string суворе
$value = true;
$value_2 = 'text';

$result = $value === $value_2;
var_dump($result);

//boolean-null несуворе
$value = false;
$value_2 = null;

$result = $value == $value_2;
var_dump($result);

//boolean-null суворе
$value = false;
$value_2 = null;

$result = $value === $value_2;
var_dump($result);

//integer-boolean- несуворе
$value = 1;
$value_2 = true;

$result = $value == $value_2;
var_dump($result);

//integer-boolean cуворе
$value = 1;
$value_2 = false;

$result = $value === $value_2;
var_dump($result);

//integer-float несуворе
$value = 10;
$value_2 = 5.01;

$result = $value == $value_2;
var_dump($result);

//integer-float cуворе
$value = 4;
$value_2 = 5.01;

$result = $value === $value_2;
var_dump($result);

//integer-string несуворе
$value = 5;
$value_2 = 'article';

$result = $value == $value_2;
var_dump($result);

//integer-string суворе
$value = 12;
$value_2 = 'article';

$result = $value === $value_2;
var_dump($result);

//integer-null несуворе
$value = 0;
$value_2 = null;

$result = $value == $value_2;
var_dump($result);

//integer-null суворе
$value = 0;
$value_2 = null;

$result = $value === $value_2;
var_dump($result);

//float-boolean- несуворе
$value = 1.15;
$value_2 = true;

$result = $value == $value_2;
var_dump($result);

//float-boolean-cуворе
$value = 1.25;
$value_2 = false;

$result = $value === $value_2;
var_dump($result);

//float-integer несуворе
$value = 2.54;
$value_2 = 5;

$result = $value == $value_2;
var_dump($result);

//float-integer cуворе
$value = 3.99;
$value_2 = 1;

$result = $value === $value_2;
var_dump($result);

//float-string несуворе
$value = 10.04;
$value_2 = 'book';

$result = $value == $value_2;
var_dump($result);

//float-string суворе
$value = 12.02;
$value_2 = 'article';

$result = $value === $value_2;
var_dump($result);

//float-null несуворе
$value = 0.08;
$value_2 = null;

$result = $value == $value_2;
var_dump($result);

//float-null суворе
$value = 11.04;
$value_2 = null;

$result = $value === $value_2;
var_dump($result);

//string-boolean несуворе
$value = 'text';
$value_2 = true;

$result = $value == $value_2;
var_dump($result);

//string-boolean cуворе
$value = 'text';
$value_2 = false;

$result = $value === $value_2;
var_dump($result);

//string-integer несуворе
$value = '123';
$value_2 = 123;

$result = $value == $value_2;
var_dump($result);

//string-integer cуворе
$value = 'book';
$value_2 = 5;

$result = $value === $value_2;
var_dump($result);

//string-float несуворе
$value = 'text';
$value_2 = 5.28;

$result = $value == $value_2;
var_dump($result);

//string-float cуворе
$value = 'text';
$value_2 = 14.01;

$result = $value === $value_2;
var_dump($result);

//string-null несуворе
$value = 'tower';
$value_2 = null;

$result = $value == $value_2;
var_dump($result);

//string-null суворе
$value = 'title';
$value_2 = null;

$result = $value === $value_2;
var_dump($result);

//null-boolean- несуворе
$value = null;
$value_2 = false;

$result = $value == $value_2;
var_dump($result);

//null-boolean cуворе
$value = null;
$value_2 = false;

$result = $value === $value_2;
var_dump($result);

//null-integer несуворе
$value = null;
$value_2 = 543;

$result = $value == $value_2;
var_dump($result);

//null-integer cуворе
$value = null;
$value_2 = 532;

$result = $value === $value_2;
var_dump($result);

//null-float несуворе
$value = null;
$value_2 = 4.43;

$result = $value == $value_2;
var_dump($result);

//null-float cуворе
$value = null;
$value_2 = 14.11;

$result = $value === $value_2;
var_dump($result);

//null-string несуворе
$value = null;
$value_2 = '';

$result = $value == $value_2;
var_dump($result);

//null-string суворе
$value = null;
$value_2 = '';

$result = $value === $value_2;
var_dump($result);



//Приведення типів
//boolean-integer несуворе
$value = false;
$value_2 = (int)'text';

$result = $value == $value_2;
var_dump($result);

//boolean-integer cуворе
$value = false;
$value_2 = (int)'text';

$result = $value === $value_2;
var_dump($result);

//float-integer несуворе
$value = 5.00;
$value_2 = (int) '5text';

$result = $value == $value_2;
var_dump($result);

//float-integer cуворе
$value = 5.00;
$value_2 = (int) '5text';

$result = $value === $value_2;
var_dump($result);

//boolean-integer несуворе
$value = (bool) 'false';
$value_2 = 1;

$result = $value == $value_2;
var_dump($result);

//boolean-integer cуворе
$value = (bool) 'false';
$value_2 = 1;

$result = $value === $value_2;
var_dump($result);

//boolean-float несуворе
$value = (bool) '0.0';
$value_2 = 1;

$result = $value == $value_2;
var_dump($result);

//boolean-float cуворе
$value = (bool) '0.0';
$value_2 = 1;

$result = $value === $value_2;
var_dump($result);

//boolean-string несуворе
$value = true;
$value_2 = (string) 5;

$result = $value == $value_2;
var_dump($result);

//boolean-string суворе
$value = true;
$value_2 = (string) 5;

$result = $value === $value_2;
var_dump($result);

//boolean-null несуворе
$value = boolval(0);
$value_2 = null;

$result = $value == $value_2;
var_dump($result);

//boolean-null суворе
$value = boolval(0);
$value_2 = null;

$result = $value === $value_2;
var_dump($result);

//integer-boolean- несуворе
$value = 1;
$value_2 = boolval(1);

$result = $value == $value_2;
var_dump($result);

//integer-boolean cуворе
$value = 1;
$value_2 = boolval(1);

$result = $value === $value_2;
var_dump($result);

//integer-float несуворе
$value = 10;
$value_2 = floatval (10);

$result = $value == $value_2;
var_dump($result);

//integer-float cуворе
$value = 10;
$value_2 = floatval (10);

$result = $value === $value_2;
var_dump($result);

//integer-string несуворе
$value = 5;
$value_2 = (string) 5;

$result = $value == $value_2;
var_dump($result);

//integer-string суворе
$value = 5;
$value_2 = (string) 5;

$result = $value === $value_2;
var_dump($result);

//integer-null несуворе
$value = intval('0');
$value_2 = null;

$result = $value == $value_2;
var_dump($result);

//integer-null суворе
$value = intval('0');
$value_2 = null;

$result = $value === $value_2;
var_dump($result);

//float-boolean- несуворе
$value = floatval(1);
$value_2 = boolval('true');

$result = $value == $value_2;
var_dump($result);

//float-boolean-cуворе
$value = floatval(1);
$value_2 = boolval('true');

$result = $value === $value_2;
var_dump($result);

//float-integer несуворе
$value = 2.54;
$value_2 = intval('5');

$result = $value == $value_2;
var_dump($result);

//float-integer cуворе
$value = 2.54;
$value_2 = intval('5');

$result = $value === $value_2;
var_dump($result);

//float-string несуворе
$value = floatval(10);
$value_2 = (string) 10;

$result = $value == $value_2;
var_dump($result);

//float-string суворе
$value = floatval(10);
$value_2 = (string) 10;

$result = $value === $value_2;
var_dump($result);

//float-null несуворе
$value = floatval(0);
$value_2 = null;

$result = $value == $value_2;
var_dump($result);

//float-null суворе
$value = floatval(0);
$value_2 = null;

$result = $value === $value_2;
var_dump($result);

//string-boolean несуворе
$value = (string) 1;
$value_2 = true;

$result = $value == $value_2;
var_dump($result);

//string-boolean cуворе
$value = (string) 1;
$value_2 = true;

$result = $value === $value_2;
var_dump($result);

//string-integer несуворе
$value = (string) 123;
$value_2 = 123;

$result = $value == $value_2;
var_dump($result);

//string-integer cуворе
$value = (string) 123;
$value_2 = 123;

$result = $value === $value_2;
var_dump($result);

//string-float несуворе
$value = '5';
$value_2 = floatval(5);

$result = $value == $value_2;
var_dump($result);

//string-float cуворе
$value = '5';
$value_2 = floatval(5);

$result = $value === $value_2;
var_dump($result);

//string-null несуворе
$value = (string) 0;
$value_2 = null;

$result = $value == $value_2;
var_dump($result);

//string-null суворе
$value = (string) 0;
$value_2 = null;

$result = $value === $value_2;
var_dump($result);
