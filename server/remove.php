<?php
$data = array(
    'success'    => true,
    'message'    => "Item removed",
    'data'       =>  $_POST['id']
);
die( json_encode($data) );

?>