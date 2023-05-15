<?php
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

// Pays
$france = new Pays("France");
$espagne = new Pays("Espagne");
$angleterre = new Pays("Angleterre");
$italie = new Pays("Italie");

// Nationalite
$francais = new Nationalite("Francais");
$espagnol = new Nationalite("Espagnol");
$anglais = new Nationalite("Anglais");
$italien = new Nationalite("Italien");

// Clubs
$psg = new Club("PSG", $france);
$rcs = new Club("Racing Club de Strasbourg", $france);
$realmadrid = new Club("Real Madrid", $espagne);
$barcelone = new Club("FC Barcelone", $espagne);
$manchester = new Club("Manchester United", $angleterre);
$italie = new Club("Juventus", $italie);

?>