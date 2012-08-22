<?php
class dynamikaPrzychodu {

   /**
    * Handler for client side form sumbit
    * @param Array $formPacket Collection of form items along with direct data
    * @return Array response packet
    */
	function getList(){
		$dane = file_get_contents("classes/dynamikaprzychodu.json");
		$json = json_decode($dane);
		return $json;
		}
	}
