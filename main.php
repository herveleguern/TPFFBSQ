<?php
require_once 'ligueregionale.php';
require_once 'club.php';
require_once 'entreprise.php';
require_once 'licence.php';
require_once 'licenceJeune.php';
require_once 'licenceMixte.php';
require_once 'categorie.php';


$laLigue = new LigueRegionale('LR1', 'BowlingSudOuest', 'Biarritz', 'BowlingSO@free.fr');
$club1 = new Club('CL1', 'BIGORRE BOWLING CLUB', '22rue de Bilbao', 'ffbbigorre@orange.fr', $laLigue, array());
$laLigue->ajouterClub($club1);
$club2 = new Club('CL2', 'LOURDES BOWLING CLUB', '17 rte de Toulouse', 'ffblourdes@orange.fr', $laLigue, array());
$laLigue->ajouterClub($club2);
//categories, sans licences (dernier parametre null)
$poussin = new Categorie('C1', 'Poussin', 9, 11, null);
$benjamin = new Categorie('C2', 'Benjamin', 12, 13, null);
$junior = new Categorie('C3', 'Junior', 18, 20, null);
$senior = new Categorie('C4', 'Senior', 21, 77, null);
//ajouter 3 licences au club1
$club1->ajouterLicence(new Licence('l', 2024, $club1, $poussin, NULL, null));
$club1->ajouterLicence(new Licence('l', 2024, $club1, $poussin, NULL,null));
$club1->ajouterLicence(new Licence('l', 2024, $club1, $senior, NULL,null)); 
//ajouter 7 licences au club2
$club2->ajouterLicence(new Licence('l', 2024, $club2, $poussin, NULL,null));
$club2->ajouterLicence(new Licence('l', 2024, $club2, $benjamin, NULL,null));
$club2->ajouterLicence(new Licence('l', 2024, $club2, $benjamin, NULL,null));
$club2->ajouterLicence(new Licence('l', 2024, $club2, $junior, NULL,null));
$club2->ajouterLicence(new Licence('l', 2024, $club2, $junior, NULL,null));
$club2->ajouterLicence(new Licence('l', 2024, $club2, $junior, NULL,null));
$club2->ajouterLicence(new Licence('l', 2024, $club2, $senior, NULL,null));

//LigueRegionale::getNbLicencesParCategorie() A CODER
//ATTENDU
// array(4) {
//     ["Poussin"]=>    int(3)
//     ["Senior"]=>    int(2)
//     ["Benjamin"]=>    int(2)
//     ["Junior"]=>    int(3)
//   }

var_dump($laLigue->getNbLicencesParCategorie());
