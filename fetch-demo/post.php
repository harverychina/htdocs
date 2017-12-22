<?php
header("Content-type: text/json; charset=utf-8");
// var_dump(file_get_contents('php://input'));
echo json_encode($_POST);
// print_r($_GET['book']);

?>