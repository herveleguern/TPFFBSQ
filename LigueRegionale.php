<?php
class LigueRegionale {
    private $code;
    private $nom;
    private $adresse;
    private $email;
    private $lesClubs; // array contenant les clubs de la ligue
public function __construct($p_code, $p_nom, $p_adresse, $p_email) {
    }
    public function ajouterClub($p_leClub) {
        $this->lesClubs[] = $p_leClub;
    }
    public function getCode() {
        return $this->code;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getLesClubs() {
        return $this->lesClubs;
    }
	public function getNbLicencesParCategorie()
	{
		//A CODER
	}
}

?>