<?php
// $arr['id'] = 1;
// $arr['content'] = 'hello';

$link = @new mysqli('127.0.0.1', 'root', '', 'test');

$link->set_charset('utf8');

$sql = "SELECT * FROM msg";

$res = $link->query($sql);

while($row = $res->fetch_assoc()){
	$data[] = $row;
}
// var_dump($res);

echo json_encode($data);

?>