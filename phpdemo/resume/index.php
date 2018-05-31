<?php
/**
 * 首页
 */
  // include('conn.php');
  // $query = "SELECT num FROM goods";
  // $rs = $link->query($query);
  // $row = $rs->fetch_assoc();
  // var_dump($row);
  $sum = 0;
  if(isset($_GET['like'])) {
    $sum =$_GET['like'];
    $sum++;
  }
  // echo $sum;
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
      <!-- Bootstrap -->
      <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
      <!-- index style sheet -->
      <!-- <link rel="stylesheet" href="css/index.css"> -->
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <h4>Harry's Resume</h4>
      </div>
    </div><!-- /blog-masthead -->
    <div class="container">
      <!-- 个人简历内容 -->
      <div class="jumbotron">
          <div class="container">
              <img src="image/head.jpg" alt="Harry's Blog">
              <p>Welcome To Harry's Home Page</p>
              <p>Give Me A Thumb Up</p>
              <!-- <p id="img"><a href="good.php?good"><img src="./image/good.png" alt="赞"></a><span><?php //if(isset($row['num']) AND !empty($row['num'])) echo $row['num'].'票'; ?></span></p> -->
              <p id="img"><a href="index.php?like=<?php echo $sum;?>"><img src="./image/good.png" alt=""><?php echo $sum;?></a></p>
          </div>
      </div>
      <!-- <div class="row">
          <div class="col-xs-6 col-lg-6">
            <h3 class="text-center">Learn - 学习经历</h3>
            <ul class="list-group">
              <li class="list-group-item list-group-item-success">Computer Theory / 计算机原理</li>
              <li class="list-group-item list-group-item-success">Database Theory  / 数据库原理</li>
              <li class="list-group-item list-group-item-success">Windows OS Windows / 操作系统</li>
              <li class="list-group-item list-group-item-success">Linux OS Linux / 操作系统</li>
              <li class="list-group-item list-group-item-success">C Programming Language / C语言</li>
              <li class="list-group-item list-group-item-success">Web Design / 网页设计</li>
              <li class="list-group-item list-group-item-success">PHP Development / PHP开发</li>
              <li class="list-group-item list-group-item-success">MySQL Database MySQL数据库</li>
            </ul>
          </div>
          <div class="col-xs-6 col-lg-6">
            <h3 class="text-center">Skill - 技术技能</h3>
            <ul class="list-group">
              <li>Html
                <div class="progress" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%; background-color: #D08C17;">
                    <span class="sr-only">70% Complete</span>
                  </div>
                </div>
              </li>
              <li>Css
                <div class="progress" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%; background-color: #17A7D0;">
                    <span class="sr-only">70% Complete</span>
                  </div>
                </div>
              </li>
              <li>JavaScript                
                <div class="progress" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%; background-color: #382D69;">
                    <span class="sr-only">50% Complete</span>
                  </div>
                </div>
              </li>
              <li>PHP              
                <div class="progress" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%; background-color: #D040B2;">
                    <span class="sr-only">85% Complete</span>
                  </div>
                </div>
              </li>
              <li>MySQL              
                <div class="progress" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%; background-color: #999;">
                    <span class="sr-only">80% Complete</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
      </div>
    </div>
    <div class="blog-footer">
        <p>广州市白云区机场路2630号&nbsp;广州市工贸技师学院&nbsp;信息产业系</p>
        <p>TEL: 020-86084466</p>
        <p><a href="" id="to_top">回到顶部</a></p>
    </div> --><!-- /blog-footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="js/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <script src="js/index.js"></script> -->
  </body>
</html>