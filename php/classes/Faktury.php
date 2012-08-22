<?php
class faktury {

   /**
    * Handler for client side form sumbit
    * @param Array $formPacket Collection of form items along with direct data
    * @return Array response packet
    */
	function isPaid(){
		return array(
			'success' => 1,
			'total' => 2,
			'data' => array(
				'paid'=>true,
				'when'=>'1310689017000'
			)
		);
	}
    /*function getList( ){
       return array(
            'success'=>true,
            'total'=>7,
			'data'=>array(

		 array(				 
             'id' => 1,
			 'number'		=> 'nn23',
			 'comment' => 'Polak',
			 'value' => '1',
			 'date' => '1310669017000',
			 'for' => 'Apple Inc.'
				
		  ),
		  array(				 
             'id' => 2,
			 'number'		=> 'nn44',
			 'comment' => 'Polak',
			 'value' => '1',
			 'date' => '1310669017000',
			 'for' => 'Apple Inc.'
				
		  ),
		  array(				 
             'id' => 3,
			 'number'		=> 'no55',
			 'comment' => 'Polak',
			 'value' => '1',
			 'date' => '1310669017000',
			 'for' => 'Apple Inc.'
				
		  ),
		  array(				 
             'id' => 4,
			 'number'		=> 'nn65',
			 'comment' => 'Polak',
			 'value' => '1',
			 'date' => '1310669017000',
			 'for' => 'Apple Inc.'
				
		  ),
		  array(				 
             'id' => 5,
			 'number'		=> 'nn78',
			 'comment' => 'Polak',
			 'value' => '1',
			 'date' => '1310669017000',
			 'for' => 'Apple Inc.'
				
		  ),
		  array(				 
             'id' => 6,
			 'number'		=> 'nn80',
			 'comment' => 'Polak',
			 'value' => '1',
			 'date' => '1310669017000',
			 'for' => 'Apple Inc.'
				
		  ),
		  array(				 
             'id' => 7,
			 'number'		=> 'na94',
			 'comment' => 'Polak',
			 'value' => '1',
			 'date' => '1310669017000',
			 'for' => 'Apple Inc.'
				
		  ),
            )
        );

	}*/
	function getList(){
		$dane = file_get_contents("classes/FakturyNieoplacone.json");
		
		$json = json_decode($dane);
		return $json;
		}
	}
