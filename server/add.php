<?php

$data = array(
	'success'    => true,
    	'message'    => "Item added",
	'data'       => array(
				'id'    	=> rand(10,100),
				'name'    	=> $_POST['name'],
				'type'    	=> $_POST['type'],
				'author'	=> $_POST['author'],
				'ext'    	=> $_POST['ext']
	); 
);
die( json_encode($data) );

?>