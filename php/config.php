<?php
$API = array(
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
    'Obrot'=>array(
        'methods'=>array( 
            'getList'=>array(
                'len' => 1 
            )
        )
    ),
    'WykresGrupy'=>array(
        'methods'=>array( 
            'getList'=>array(
                'len' => 1 
            )
        )
    ),
    'DynamikaPrzychodu'=>array(
        'methods'=>array( 
            'getList'=>array(
                'len' => 1 
            )
        )
    ),
    'Podsumowanie'=>array(
        'methods'=>array( 
            'getList'=>array(
                'len' => 1 
            )
        )
    ),
    'Dluznicy'=>array(
        'methods'=>array( 
            'getList'=>array(
                'len' => 1 
            )
        )
    ),
    'Zadania'=>array(
        'methods'=>array( 
            'getList'=>array(
                'len' => 1 
            )
        )
    )
);