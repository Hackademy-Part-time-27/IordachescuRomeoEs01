<?php 

// Traccia 1;

$integer = 10;

$float = 1.3;

$string = "ciao";

$boolean = true;

echo "Il tipo di dato di integer è: " . gettype($integer) . "\n";
echo "Il tipo di dato di float è: " . gettype($float) . "\n";
echo "Il tipo di dato di string è: " . gettype($string) . "\n";
echo "Il tipo di dato di boolean è: " . gettype($boolean). "\n";

const INTEGER = 10;
const FLOAT = 1.3;
const STRING = "ciao";
const BOOLEAN = true;

echo"Il valore di integer e : " . INTEGER. "\n";
echo"Il valore di integer e : " . FLOAT. "\n";
echo"Il valore di integer e : " . STRING. "\n";
echo"Il valore di integer e : " . BOOLEAN."\n";


// Traccia 2;


// $1text = "Marco";(ERRATA)
// La variabile non po iniziare con un numero;
$text1 = 'Marco'; // Corretto

$text2 = 'hai'; // Corretto


// $text.3 = "sete";(ERRATA)
// // il punto non e un carattere ammesso;
$text3 = 'sete'; // Corretto


$text4 = '?'; // Corretto


// @text5 = "Perchè";(ERRATA)
// // la chiociola non e ammessa per dichiarare la variabile;
$text5 = 'Perchè'; // Corretto

// $te-xt6 = '$text2';(ERRATA)
// non po essere il tratino centrale nella variabile come carattere adimisibile e le appice non viengono mese; 
$text6 = $text2; // Corretto


// $text 7 = 'bevuto'; (ERRATA)
//lo spazio non deve essere inserio nella variabile;
$text7 = 'bevuto'; // Corretto


// $text8 = "tutto" (ERRATA)
// manca ; alla fine; 
$text8 = 'tutto.'; // Corretto


echo $text1 .' ' . $text2 .' ' . $text3 .' ' . $text4 .' ' . $text5 .' ' . $text6 . '  ' . $text7 .' ' . $text8;
 
?>