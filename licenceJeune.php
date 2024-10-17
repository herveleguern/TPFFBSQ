<?php
class LicenceJeune extends Licence
{
	private $nomResp;
	private $prenomResp;
	private $telResp;
	public function __construct($p_numero,$p_annee,$p_leClub,$p_nom,$p_prenom,	
						$p_nomResp,$p_prenomResp,$p_telResp)
	{
		parent::__construct($p_numero,$p_annee,$p_leClub,$p_nom,$p_prenom);
		$this->nomResp=$p_nomResp;
		$this->prenomResp=$p_prenomResp;
		$this->telResp=$p_telResp;
	}
}