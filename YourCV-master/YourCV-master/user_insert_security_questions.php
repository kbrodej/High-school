<?php
session_start();
ob_start();
 include ('database.php');
 if(isset($_SESSION['email'])&&!empty($_SESSION['email'])&&isset($_SESSION['sec_a'])&&!empty($_SESSION['sec_a'])&&!empty( $_SESSION['id_sec_q'])&&isset( $_SESSION['id_sec_q']))
 {
     $email=$_SESSION['email'];
 
 
     $sql=$db->prepare("SELECT * FROM `user` WHERE `email`=:email");
     $sql->bindParam(':email',$email,PDO::PARAM_STR);
     $sql->execute();
     
     while($row=$sql->fetch(PDO::FETCH_ASSOC))
     {
         $id_user=$row['id_user'];
     }
             

    
     
       /////////////////////////////////////////SECURITY ANSWER/////////////////////////////
        //INSERT INTO `security_answer`(`sec_answer`, `id_user`, `id_security_question`) VALUES ('misa','15','5')
      
    $sql2=$db->prepare("INSERT INTO `security_answer`(`sec_answer`, `id_user`, `id_security_question`) VALUES (:sec_a,:id_u,:id_sec_q)");
    $sql2->bindParam(':sec_a',$_SESSION['sec_a'],PDO::PARAM_STR);
    $sql2->bindParam(':id_u',$id_user);
    $sql2->bindParam(':id_sec_q', $_SESSION['id_sec_q'],PDO::PARAM_STR);
    $sql2->execute();
    header("Location: index.html");
    
    
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

