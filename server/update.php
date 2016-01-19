<?php
$data = array(
    'id'        => $_POST['id'],
    'name'      => $_POST['name'],
    'type'      => $_POST['type'],
    'author'    => $_POST['author'],
    'ext'       => $_POST['ext']
);

$data = array(
    'success'    => true,
    'message'    => "Item updated",
    'data'       => $data
);
die( json_encode($data) );
?>