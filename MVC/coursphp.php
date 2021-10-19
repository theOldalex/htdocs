<?php

// Ici j'écris en PHP

/**
 * Je fais exister la variable
 * = déclaration
 * 
 * Non obligatoire pour PHP
 */
$variable;    // Les variables ont toujours un "$" !

/**
 * Je donne une valeur à la variable
 * = affectation
 */
$variable = 42;

/**
 * J'utilise une variable
 * 
 * La variable doit exister pour être utilisée
 */
echo $variable;

/**
 * Structures de contrôle
 */
if
else
switch
case
break
for
while
do while



/**
 * Opérateurs
 */
+ - * / % **

. // Concaténation
echo $a + $b;    // Ecris "54"
echo $a . $b;    // Ecris "4212"


! || OR AND &&        // OR = "||" ; AND = "&&"
XOR                    // "Ou exclusif"
> < <= >= == === != <> !==

12 == "12";    // true
12 === "12"; // false

?:        // Opérateur ternaire
$condition ? // Résultat true
: // Résultat false
;


/**
 * Types de variables
 */
$nombre = 12;
$flottant = 3.1415926535;
$booleen = true;

$string = 'Test $nombre';    // = "Test $nombre"
$chaine = "Test $nombre";    // = "Test 12"


// Commentaire sur une ligne
/* Commentaire
sur plusieurs lignes */
# Commentaire sur une ligne aussi
?>