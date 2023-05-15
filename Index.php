<?php
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

// Nationalite
$francais = new Nationalite("Francais");
$espagnol = new Nationalite("Espagnol");
$anglais = new Nationalite("Anglais");
$italien = new Nationalite("Italien");

// Pays
$france = new Pays("France");
$espagne = new Pays("Espagne");
$angleterre = new Pays("Angleterre");
$italie = new Pays("Italie");

?>