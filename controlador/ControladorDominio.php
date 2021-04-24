<?php

class ControladorDominio {


	public function buscarDominioGeneral($domain)
	{
		if ( checkdnsrr($domain, 'ANY') ) {
		return false;
		}
		else {
		return true;
		}
	}

}

?>