<?php
session_start();
ob_start();
 include ('database.php');
 include ('functions/GetIp.php');
 


$name=  strtolower(filter_input(INPUT_POST, 'name'));
$surname=  strtolower(filter_input(INPUT_POST, 'surname'));
$password= hash('sha512',md5(filter_input(INPUT_POST, 'password1')));
$password2= hash('sha512',md5(filter_input(INPUT_POST, 'password2')));
$email=  strtolower(filter_input(INPUT_POST, 'email'));
$bday=  strtolower(filter_input(INPUT_POST, 'bday'));
$gender=  filter_input(INPUT_POST, 'sex');
$country=  filter_input(INPUT_POST, 'country');
$sec_answer=  strtolower(filter_input(INPUT_POST, 'sec_answer'));
$id_sec_q=  filter_input(INPUT_POST, 'id_sec_q'); 
 

if(!empty($name)&&isset($name)&&!empty($surname)&&isset($surname)&&!empty($password)&&isset($password)&&!empty($email)&&isset($email)&&!empty($bday)&&isset($bday)&&!empty($gender)&&isset($gender)&&!empty($country)&&isset($country)&&!empty($sec_answer)&&isset($sec_answer)&&!empty($id_sec_q)&&isset($id_sec_q))
{
    $sql_exists=$db->prepare("SELECT name,surname,password,email,birth_day,guid FROM user WHERE email=:email");
    $sql_exists->bindParam(':email',$email,PDO::PARAM_STR);
    $sql_exists->execute();
    $ClientIp=  GetClientIp();
    $active=0;
    $_SESSION['email']=$email;
    $_SESSION['sec_a']=$sec_answer;
    $_SESSION['id_sec_q']=$id_sec_q;
    //check if user already exists
  
    if($sql_exists->rowCount()==0)
    {
        include_once 'functions/guid.php';
       $id=0;        
      $guid=  trim(guid(),'{}');
                
       $sql=$db->prepare("INSERT INTO `user`(`email`, `password`, `active`, `name`, `surname`, `birth_day`, `guid`, `id_gender`, `id_country`) VALUES (:email,:password,:active,:name,:surname,:bday,:guid,:gender,:country)");
      //  mysqli_query("INSERT INTO `user`(`email`, `password`, `active`, `name`, `surname`, `birth_day`, `guid`, `id_gender`, `id_country`) VALUES ('$email','$password',0,'$name','$surname','$bday','$guid','$gender','$country')");
        $sql->bindParam(':email',$email ,PDO::PARAM_STR);
        $sql->bindParam(':password',$password ,PDO::PARAM_STR);
        $sql->bindParam(':active',$id ,PDO::PARAM_STR);
        $sql->bindParam(':name',$name ,PDO::PARAM_STR);
        $sql->bindParam(':surname',$surname ,PDO::PARAM_STR);
        $sql->bindParam(':bday',$bday ,PDO::PARAM_STR);
        $sql->bindParam(':guid',$guid ,PDO::PARAM_STR);
        $sql->bindParam(':gender',$gender ,PDO::PARAM_STR);
        $sql->bindParam(':country',$country ,PDO::PARAM_STR);
        
        
      
        
        $sql->execute();
        
        /****************************************************************************************************************
        *******************************************************MAIL******************************************************
        *****************************************************************************************************************/
        require 'PHPmailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail.yourcv.eu;mail.yourcv.eu';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'no-reply@yourcv.eu';                 // SMTP username
        $mail->Password = 'noreply';                           // SMTP password
        //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->From = 'no-reply@yourcv.eu';
        $mail->FromName = 'Your CV';
        // Add a recipient
        $mail->addAddress($email);               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('klemen.brodej1@gmail.com');
        //$mail->addBCC('bcc@example.com');

        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Verify your E mail account!';
        $mail->Body    = '<style>
            body{
                            background-color:yellow;
                            }
                            </style>
                            <body>
                            Welcome to YourCV, '.$name.'.<br/>
                            Thanks for signing up!<br/>
                            Your account has been created, you can login with the following credentials after you have activated your account by pressing the url belo on ip <br/>
                            <br/>
                            --------------<br/>
                            Email: '.$email.'<br/>
                            Password: '.$password=filter_input(INPUT_POST, 'password1').'<br/>
                            --------------<br/>
                            <br/>
                            Please click this link to activate your account:<br/>
                            http://www.yourcv.eu/mail_verify.php?email='.$email.'&guid='.$guid.'<br/>
                            <br/>
                            </body>

';
        $mail->AltBody = ' Welcome to YourCV, '.$name.'.
                            Thanks for signing up!
                            Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
                            
                            --------------
                            Email: '.$email.'
                            Password: .'.$password=filter_input(INPUT_POST, 'password1').'
                            --------------
                            
                            Please click this link to activate your account:
                            http://www.yourcv.eu/verify.php?email='.$email.'&hash='.$guid.'
                            

';

                            if(!$mail->send())
                                {
                                    echo 'Message could not be sent.';
                                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                                }
                            
        
        ///////////////////////////////////////////////////////////////////////
                                //security answers
        //////////////////////////////////////////////////////////////////////
                                
                                
                                
                          /*SELECT `security_answer`.`id_sec_answer`,`security_answer`.`sec_answer`,sq.sec_question,sq.`id_security_question`,u.id_user,u.email FROM `security_answer` INNER JOIN user as u on security_answer.id_user=u.id_user INNER JOIN security_questions as sq on sq.`id_security_question`=`security_answer`.`id_security_question` WHERE 1*/  
                                
                                
      echo 'Message has been sent';
      header("Location: http://www.yourcv.eu/user_insert_security_questions.php"); 
    }
    else //user already exists
    {
        echo "user ze obstaja";
    }
}
 else {
echo "page is under construction!";    
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

