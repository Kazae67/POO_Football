<?php
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

// Pays
$france = new Pays("France");
$espagne = new Pays("Espagne");
$angleterre = new Pays("Angleterre");
$italie = new Pays("Italie");
$portugal = new Pays("Portugal");

// Nationalite
$francais = new Nationalite("Français");
$espagnol = new Nationalite("Espagnol");
$anglais = new Nationalite("Anglais");
$italien = new Nationalite("Italien");
$portugais = new Nationalite("Portugais");

// Clubs
$psg = new Club("PSG", $france);
$rcs = new Club("Racing Club de Strasbourg", $france);
$realmadrid = new Club("Real Madrid", $espagne);
$barcelone = new Club("FC Barcelone", $espagne);
$manchester = new Club("Manchester United", $angleterre);
$juventus = new Club("Juventus", $italie);

// Joueurs
$killian = new Joueur("Killian", "Mbappe", "20-12-1998", $francais);
$lionel = new Joueur("Lionel", "Messi", "24-06-1987", $francais);
$neymar = new Joueur("Neymar", "Junior", "05-02-1992", $francais);
$cristiano = new Joueur("Cristiano", "Ronaldo", "05-02-1985", $portugais);

// Carrières PSG
$carriereKillianPsg = new Carriere($killian, $psg, "2017");
$carriereLionelPsg = new Carriere($lionel, $psg, "2021");
$carriereNeymarPsg = new Carriere($neymar, $psg, "2017");

// Carrières Barcelone
$carriereLionelBarcelone = new Carriere($lionel, $barcelone, "2004");
$carriereNeymarBarcelone = new Carriere($neymar, $barcelone, "2013");

// Carrière Juventus
$carriereCristianoJuventus = new Carriere($cristiano, $juventus, "2018");

// Carrière Manchester
$carriereCristianoManchester = new Carriere($cristiano, $manchester, "2021");

// Affichage des équipes dans chaque pays 
echo "<h2>Affichage des équipes dans chaque pays</h2>";
echo $france->getInfo();
echo $espagne->getInfo();
echo $angleterre->getInfo();
echo $italie->getInfo();

// Affichage des joueurs dans chaque équipe
echo "<h2>Affichage des joueurs dans chaque équipe</h2>";
echo $psg->getJoueurs();
echo $barcelone->getJoueurs();
echo $juventus->getJoueurs();
echo $manchester->getJoueurs();


// Affichage de la carrière des joueurs
echo "<h2>Affichage de la carrière des joueurs</h2>";
echo $killian->getInfo();
echo $cristiano->getInfo();
echo $lionel->getInfo();
echo $neymar->getInfo();

?>