<?php
class Club
{
	private $id;
	private $nom;
	private $adresse;
	private $lesLicences; // array contenant les licences du club
	public function __construct($p_id,$p_nom,$p_adresse) {
        $this->id=$p_id;
        $this->nom=$p_nom;
        $this->adresse=$p_adresse;
        $this->lesLicences=array();
    }
	public function ajouterLicence($p_laLicence) {
		$this->lesLicences[]=$p_laLicence;
	}
	public function getNom() {
		return $this->nom;
	}
    public function getLesLicences(){
        return $this->lesLicences;
    }

	public function getLicencesActives()
	{
		$resultat=array();
		foreach ($this->lesLicences as $uneLicence)
		{
			if ($uneLicence->estActive())
			{
				$resultat[]=$uneLicence;
			}
		}
		return $resultat;
	}


}