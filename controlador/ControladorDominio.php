<?php


error_reporting(E_ALL ^ E_NOTICE);
require_once('whois.php');

class ControladorDominio {


	public function buscarDominioGeneral($domain)
	{
		
			$ext = strtok($domain,".");
			while ($ext) {
			    $ext = strtok("."); 
			    if ($ext != '') { 
			        $valid = true;
			    } 
			
			if($valid == true){
				if ( gethostbyname($domain) != $domain ) {
				 	if($domain) {
					    $domain = trim($domain);
					    if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
					    if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
					    if(ValidateIP($domain)) {
					        echo "hello before check";
					        $result = LookupIP($domain);
					    }
					    elseif(ValidateDomain($domain)) {
					        $result = LookupDomain($domain);
					    }
					    else die("Invalid Input!");
					    
						echo "ocurrio un error";
					}
				}
				else {
					echo ("si es posible");
					
				}
			}else{
				echo "ocurrio un error";
			}
		}
	}

}

?>