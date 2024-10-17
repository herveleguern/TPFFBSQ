<?php
class LicenceMixte extends Licence
{
	private $laEntreprise; // entreprise liée à la licence mixte
	public function __construct($p_numero,$p_annee,$p_leClub,$p_nom,$p_prenom,
						$p_laEntreprise)
	{
		parent::__construct($p_numero,$p_annee,$p_leClub,$p_nom,$p_prenom);
		$this->laEntreprise=$p_laEntreprise;
	}
}
