<?php
/**
 * 处理投票程序
 */
if(isset($_GET['good'])){
	include('conn.php');
	$query = "UPDATE goods SET num = num + 1";
	// var_dump($query);
	$link->query($query);
}
// 处理后返回主页
header('location:index.php');
?>