<?php
$headers = getallheaders();

header('Content-Type: application/json');
echo json_encode($headers, JSON_PRETTY_PRINT);

?>
