<?php
$API = array(
    'Kordynators'=>array(
        'methods'=>array( 
            'getList'=>array(
                 'len'=>0
            )
        )
    ),
	'Faktury'=>array(
        'methods'=>array( 
            'getList'=>array(
                 'len'=>0
            ),
			'isPaid' => array(
				'len'=>1,
				'number'=>''
			)
        )
    ),
    'Rejony'=>array(
        'methods'=>array( 
            'getList'=>array(
                'len' => 1 
            )
        )
    )
);