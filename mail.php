<?php
require_once("mail.inc.php");
$smtp = new smtp("smtp.qq.com",465,true,"2274976814@qq.com","emuifckbgbotebhf","2274976814@qq.com");//发件人信箱信息
$smtp->debug = false;//是否显示发送的调试信息 FALSE or TRUE
$mailto="2274976814@qq.com";//收件人信箱
$mailsubject="web Message";
$mailfrom="HR";
$mailbody="Name=".$_POST["q1"]."<br>";
$mailbody=$mailbody."Phone No=".$_POST["q2"]."<br>";
$mailbody=$mailbody."Suburb=".$_POST["q3"]."<br>";
$mailbody=$mailbody."email=".$_POST["email"]."<br>";
$mailbody=$mailbody."Message=".$_POST["q4"]."<br>";
//其他的表单项目以此类推
$mailtype 		= 	"HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
$mailsubject 	= 	'=?UTF-8?B?'.base64_encode($mailsubject).'?=';//邮件主题
$mailfrom  	= 	'=?UTF-8?B?'.base64_encode($mailfrom).'?=';//发件人
$smtp->sendmail($mailto, $mailfrom, $mailsubject, $mailbody, $mailtype);
echo "<script language=\"JavaScript\">alert(\"Send success.\");</script>"; exit();
?>