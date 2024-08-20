<?php
/*
Escreva um script que imprima qual o maior número.
Use IF
*/
$a = 10;
$b = 1;
$c = 40;

if ($a > $b && $a > $c){
	echo "a é o maior" . PHP_EOL;
} 

if ($a < $b && $b > $c){
	echo "b é o maior" . PHP_EOL;
} 

if ($c < $b && $c > $a){
	echo "c é o maior" . PHP_EOL;
} 
?>