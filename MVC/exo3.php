<?php

/********* Partie 2 ****************************/
/********* C. Les structures *******************/
/********* I. Conditions ***********************/
/********* a. If else **************************/

// Nous allons faire un peu de grammaire
// Déclarez une variable `masculin`, et passez-lui une valeur booléenne
$masculin = true;

// Déclarez une variable `nombre` et affectez-lui un nombre entier
$nombre = 42;

// Ecrivez les textes qui suivent
// en accordant en genre et en nombre 
// grâce aux variables `masculin` et `nombre`

// "Je suis marié(e) à Lucile. Ensemble, nous avons {nombre} enfant(s)."
if ($nombre <= 1 && $masculin) echo "Je suis marié à Lucile. Ensemble, nous avons ${nombre} enfant. Je suis heureux.";
elseif ($nombre <= 1 && !$masculin) echo "Je suis mariée à Lucile. Ensemble, nous avons ${nombre} enfant. Je suis heureuse.";
elseif ($nombre > 1 && !$masculin) echo "Je suis mariée à Lucile. Ensemble, nous avons ${nombre} enfants. Je suis heureuse.";
else echo "Je suis marié à Lucile. Ensemble, nous avons ${nombre} enfants. Je suis heureux.";

// "Il y a {nombre} anima[l / ux] dans ce zoo. C'est [peu / beaucoup] ! Je suis étonné(e) !"
if ($masculin) $e = '';
else $e = 'e';

if ($nombre > 1) $s = 's';
else $s = '';

if ($nombre > 1) $l = 'ux';
else $l = 'l';

if ($nombre > 10) $peu = 'beaucoup';
else $peu = 'peu';

echo "Il y a $nombre anima$l dans ce zoo. C'est $peu ! Je suis étonné$e !";

// "J'ai mangé {nombre} chocolat(s) de l'avent en {nombre - 10} jour(s), car j'en ai mangé plusieurs par jour car je suis gourmand(e)."
echo 'J\'ai mangé ' . $nombre . ' chocolat' . ($nombre > 1 ? 's' : '')
    . ' de l\'avent en ' . ($nombre - 10) . ' jour' . ($nombre - 10 > 1 ? 's' : '')
    . ', car j\'en ai mangé plusieurs par jour car je suis gourmand' . ($masculin ? '' : 'e') . '.';

    echo 'J\'ai mangé ' . $nombre . ' chocolat';
if ($nombre > 1) echo 's';

echo ' de l\'avent en ' . ($nombre - 10) . ' jour';
if ($nombre - 10 > 1 || $nombre - 10 < -1) echo 's';

echo ', car j\'en ai mangé plusieurs par jour car je suis gourmand';
if (!$masculin) echo 'e';
echo '.';