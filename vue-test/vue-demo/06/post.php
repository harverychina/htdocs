<?php
    // echo $_POST;
    // 内容获取 json
    $v=file_get_contents("php://input");
    // var_dump($data = json_decode($v,true));
    // php 转换json true 数组 / false 对象
    $data = json_decode($v,true);
    // echo $data['content'];
    if($data['content'] == '') {
        // 当数据是空白时
        $arr['success'] = 0;
    } else {
        // 当数据不是空白
        $arr['success'] = 1;
    }
    
    echo json_encode($arr);
?>