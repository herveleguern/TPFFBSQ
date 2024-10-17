<?php
class Licence
{
    private $numero;
    private $annee;
    private $leClub;
    private $laCategorie;
    private $nomPratiquant;
    private $prenomPratiquant;

    public function __construct($p_numero, $p_annee, $p_leClub, $p_laCategorie,$p_nom, $p_prenom)
    {
        $this->numero = $p_numero;
        $this->annee = $p_annee;
        $this->leClub = $p_leClub;
        $this->laCategorie=$p_laCategorie;
        $this->nomPratiquant = $p_nom;
        $this->prenomPratiquant = $p_prenom;
    }

    public function getDescription()
    {
        return $this->numero . " " . $this->nomPratiquant . " " . $this->prenomPratiquant;
    }

    public function estActive()
    {
        return $this->annee == date("Y");
    }
    public function getCategorie()
    {
        return $this->laCategorie;
    }
}
