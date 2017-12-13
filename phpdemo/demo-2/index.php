<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>demo-1</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<div id="wrap">
		<header>
			<h2><a href="../index.html">Web功能模块开发(原生)练习网站</a></h2>
			<h3>个人主页展示</h3>
			<p>知识点：能使用xampp创建个人主页，并输出当前主机IP地和用户名。</p>
		</header>
		<div id="content">
			<div class="row">
				<h3>当前输出内容</h3>
				<h4><?php echo $_SERVER['REMOTE_ADDR'] ?></h4>
				<h4><?php echo '本机用户名：黄健聪' ?></h4>
			</div>
			<div class="row">
				<a href="./展示个人主页.ppt" download="下载教程1">下载教程：展示个人主页.ppt
			</div>
		</div>
	</div>
</body>
</html>