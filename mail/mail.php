<?php
$mailsubject=$_POST['mailsubject'];
$mailbody=$_POST['mailbody'];
$stm= $mailsubject."".$mailbody;
require("smtp.php");
##########################################
$smtpserver = "smtp.qq.com";//SMTP服务器
$smtpserverport = 587;//SMTP服务器端口
$smtpusermail = "2274976814@qq.com";//SMTP服务器的用户邮箱
$smtpemailto = "2274976814@qq.com";//发送给谁
$smtpuser = "2274976814@qq.com";//SMTP服务器的用户帐号
$smtppass = "emuifckbgbotebhf";//SMTP服务器的用户密码
$mailsubject =$mailsubject; //邮件主题
$mailbody = $stm;//邮件内容
$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
$smtp->debug = TRUE;//是否显示发送的调试信息
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
echo "提交成功";
?>