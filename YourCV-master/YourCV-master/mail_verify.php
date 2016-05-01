<?php
include("database.php");
$email=  filter_input(INPUT_GET, 'email');
$guid=  filter_input(INPUT_GET, 'guid');
if(isset($email)&&!empty($email)&&isset($guid)&&!empty($guid))
{
    $sql=$db->prepare("SELECT email,guid,active FROM user WHERE email=:email and guid=:guid");
    $sql->bindParam(':email',$email,PDO::PARAM_STR);
    $sql->bindParam(':guid',$guid,PDO::PARAM_STR);
    $sql->execute();
            
            
            
    
    $match= $sql->rowCount();
    
    if($match > 0 && $match <2)
    {
        $sql2=$db->prepare("UPDATE `user` SET `active`=1 WHERE email=:email and guid=:guid");
        $sql2->bindParam(':email',$email,PDO::PARAM_STR);
        $sql2->bindParam(':guid',$guid,PDO::PARAM_STR);
        $sql2->execute();
        
        header("Location: index.html");
//echo "Your account has been activated, you can now <a href='login.php'>login</a>";
    }
    else
    {
         echo "Invalid approach, please use the link that has been send to your email.";
    }
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

