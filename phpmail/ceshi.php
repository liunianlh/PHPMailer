<?php

        require('class.phpmailer.php');
    date_default_timezone_set("PRC");
        $mail = new PHPMailer(); //实例化

        $mail->IsSMTP(); // 启用SMTP

        $mail->Host = "smtp.exmail.qq.com"; //SMTP服务器 163邮箱例子

        $mail->Port = 25;  //邮件发送端口

        $mail->SMTPAuth   = true;  //启用SMTP认证

        $mail->CharSet  = "UTF-8"; //字符集

        $mail->Encoding = "base64"; //编码方式

        $mail->Username = "order@tonetron.com.cn";  //你的邮箱

        $mail->Password = "Tt2019";  //你的密码

        $mail->Subject = "哈登MVP"; //邮件标题

        $mail->From = "order@tonetron.com.cn";  //发件人地址（也就是你的邮箱）

        $mail->FromName = "刘赫";   //发件人姓名

        $address = "12051779675@qq.com";//收件人email
date_default_timezone_set("PRC");
     $mail->AddAddress($address, "流年");    //添加收件人1（地址，昵称）


        $mail->AddAttachment('index.html','我的附件.xls'); // 添加附件,并指定名称

        $mail->IsHTML(true); //支持html格式内容


        $mail->Body = '你好, <b>朋友</b>! <br/>这是一封邮件！'; //邮件主体内容

        //发送

        if(!$mail->Send()) {

            echo "发送失败: " . $mail->ErrorInfo;

        } else {

            echo "成功";

        }

        ?>