<?php

class ControladorDominio {


	public function buscarDominioGeneral($domain)
	{
		if ( checkdnsrr($domain, 'ANY') ) {
		echo "Este dominio ya se encuentra registrado, por favor cambielo";
		}
		else {
		echo "Se a registrado el dominio exitosamente";
		}
	}

}

?>