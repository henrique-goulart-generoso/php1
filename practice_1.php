<?php

//here I want to practice some kind of variables, such as arrays, printing names of variables in the page, var dumps, super globals arrays, functions, objects. its just basic things right now, as I upload they are going to get more complexive

$name ="Dillinger";


echo "wow I love $name escape plan";

echo "</br>";

var_dump($name);

echo "</br>";

$myFavoriteBand = array("Death" , "Gojira", "cryptopsy", "Analepsy");

echo "My favrotie band is $myFavoriteBand[0]";

echo "</br>";

$date = new DateTime();

var_dump($date);

echo "</br>";

$arquivo = fopen("exemplo-03.php", "r");

var_dump($arquivo);

echo "</br>";

$nome = (int)$_GET["a"];

//var_dump($nome);

echo "</br>";

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

echo "</br>";

$name2 = "Henrique";

function Test()
{
	global $name2;
	echo $name2;
}

function test2() {
 global $nome2;
 echo $nome2. " ". "now on 2";

}

test();

echo "</br>";


test2();

?>