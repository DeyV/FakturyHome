<?php
class Rejony {

   /** 
    * @param object $params Collection of form items along with direct data
	  
     {"page":1,"start":0,"limit":25,"filter":[{"property":"kordynator_id","value":1}]}

    * @return Array response packet

 


    */
    function getList( $params ){
       return array(
            'success' => true,
		    'total' => 100,
            'data' => array(

		 array(				 
             'id' => var_export( $params, 1 ),
			 'kod'		=> '56-100',
			 'powiat' => 'Wołów',
			 'gmina' => 'Wołów',
			 'miejscowosc' => 'Wołów',
			 'kordynator_id'  => '1'  , 
			 'wojewodztwo_id' => 1
				
		  ),
		 array(				 
             'id' => 2,
			 'kod'		=> '56-120',
			 'powiat' => 'Wołów',
			 'gmina' => 'Brzeg Dolny',
			 'miejscowosc' => 'Brzed Dolny',
			 'kordynator_id'  => '2'  	, 
			  'wojewodztwo_id' => 2
				
		  ),
            )
        );
	}
}
 