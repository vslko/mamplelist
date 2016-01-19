<?php

$data = array(
	array( 	'id'	=> 1,
			'name'	=> 'Oracle',
			'type'	=> 'database',
			'author'=> 'Sun Microsystems',
			'ext'	=> "sql"
	),
	array( 	'id'	=> 2,
			'name'	=> 'Seagate Slim',
			'type'	=> 'hdd',
			'author'=> 'Seagate',
			'ext'	=> "hdd"
	),
	array( 	'id'	=> 3,
			'name'	=> 'SyncMaster',
			'type'	=> 'monitor',
			'author'=> 'Samsung',
			'ext'	=> "mon"
	),
	array( 	'id'	=> 4,
			'name'	=> 'MS SQL',
			'type'	=> 'database',
			'author'=> 'Microsoft',
			'ext'	=> "sql"
	),
	array( 	'id'	=> 5,
			'name'	=> 'KAV',
			'type'	=> 'antivirus',
			'author'=> 'Kaspersky',
			'ext'	=> "av"
	),
	array( 	'id'	=> 6,
			'name'	=> 'Flatron',
			'type'	=> 'monitor',
			'author'=> 'LG',
			'ext'	=> "mon"
	)
);

$data = array(
    'success'    => true,
    'message'    => "Loaded 6 items",
    'data'       => $data
);
die( json_encode($data) );

?>