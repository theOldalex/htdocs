<?php

echo '<pre>';
var_dump($_GET);
echo '</pre>';

if (
	isset($_GET['nombre'])
	// && isset($_GET['phrase'])

	&& !empty($_GET['phrase'])
	
	&& !is_numeric($_GET['phrase'])
	&& is_numeric($_GET['nombre'])

	&& $_GET['nombre'] > 0
	&& $_GET['nombre'] <= 1000
) {
	for ($i = 0; $i < $_GET['nombre']; $i++) {
		echo $_GET['phrase'] . '<br>';
	}
} else {
	echo 'Erreur';
}
