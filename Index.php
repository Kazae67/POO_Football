<?php
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

$francais = new Nationalite("Francais");
$espagnol = new Nationalite("Espagnol");


$france = new Pays("France");
$espagne = new Pays("Spain");


?>