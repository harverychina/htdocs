<?php
  $sum = 0;
  if(isset($_GET['like'])) {
    $sum =$_GET['like'];
    $sum++;
  }
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <!-- 兼容IE的兼容模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 支持目前移动终端自动伸展模式 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harry's个人简历</title>
    <style>
       #wrap {
          width: 250px;
          margin: 0 auto;
       }
       h4,p {
        text-align: center;
       }
       #good {
        width: 50px;
        height: 50px;
       }
    </style>
  </head>
  <body>
    <div id="wrap">
      <h4>Harry's Resume</h4>
      <img id="head" src="image/head.jpg" alt="Harry's Blog">
      <p>Welcome To Harry's Home Page</p>
      <p>Give Me A Thumb Up</p>
      <p><a href="index.php?like=<?php echo $sum;?>"><img id="good" src="./image/good.png" alt=""></a></p>
      <p><?php echo $sum;?></p>
    </div>
  </body>
</html>