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

// Joueurs
$killian = new Joueur("Killian", "Mbappe", "20-12-1998", $francais);
$lionel = new Joueur("Lionel", "Messi", "24-06-1987", $francais);
$neymar = new Joueur("Neymar", "Junior", "05-02-1992", $francais);
$cristiano = new Joueur("Cristiano", "Ronaldo", "05-02-1985", $espagnol);

?>