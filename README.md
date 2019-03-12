阿里短信,封装composer 方便安装

阿里接口版本 'Version'=>'2017-05-25'


通过composer安装
composer require qcth/aliyun-sms

//第一步:加载
include './vendor/autoload.php';


//第二步: 阿里提供密钥

$accessKeyId='';

$accessKeySecret='';

$send_sms=new \qcth\aliyun_sms\send($accessKeyId,$accessKeySecret);


//第三步: 接收发送结果
/**
  * $code  短信验证码
  * $iphone 手机号
  * $sign_name 短信签名
  * $template_code  模板code
  
 */
 
$data=$send_sms->send($code,$iphone,$sign_name,$template_code);




if($data['Code']='OK'){

    echo '发送成功';
	
}else{

    echo '错误消息为'.$data['Message'];
	
}



var_dump($data);


