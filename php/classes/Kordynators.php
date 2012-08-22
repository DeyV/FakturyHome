<?php
class Kordynators {

   /**
    * Handler for client side form sumbit
    * @param Array $formPacket Collection of form items along with direct data
    * @return Array response packet
    */
    function getList( ){
       return array(
            'success'=>true,
            'data'=>array(

		 array(				 
             'id' => 1,
			 'name'		=> 'Lekarz',
			 'nazwisko' => 'Polak',
			 'active' => '1'  	
				
		  ),
		 array(				 
             'id' => 2,
			 'name'		=> 'Likwidator',
			 'nazwisko' => 'Polak',
			 'active' => '0'
				
		  ),
            )
        );

	}
}
