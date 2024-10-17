<?php
class Categorie
{
	private $id;
	private $libelle;
	private $ageMin;
	private $ageMax;
	private $lesLicences; // array contenant les licences de la catégorie
	function __construct($id, $libelle, $ageMin, $ageMax, $LesLicences) {
            $this->id = $id;
            $this->libelle = $libelle;
            $this->ageMin = $ageMin;
            $this->ageMax = $ageMax;
            $this->lesLicences = array();
        }

        public function ajouterLicence($p_laLicence) {
		$this->lesLicences[]=$p_laLicence;
	}
	public function getLibelle() {
		return $this->libelle;
	}
}

?>