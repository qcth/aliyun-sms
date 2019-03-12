<?php

/**
 * 阿里发短信演示
 * 备注: send_sms 发单条,已测试成功
 * batch_sms 群发,未测试
 * find_query 短信发送记录查询 , 未测试  
 */

//include './vendor/autoload.php';

//阿里提供密钥
$accessKeyId='';
$accessKeySecret='';
$send_sms=new \Aliyun\sms\send($accessKeyId,$accessKeySecret);

//测试数据
$code='2536';
$iphone='13142420607';
$sign_name='米椒互动';
$template_code='SMS_99205063';

//接收发送结果
$data=$send_sms->send($code,$iphone,$sign_name,$template_code);

if($data['Code']='OK'){
    echo '发送成功';
}else{
    echo '错误消息为'.$data['Message'];
}

var_dump($data);
