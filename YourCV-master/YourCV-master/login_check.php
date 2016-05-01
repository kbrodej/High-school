<?php session_start();
include('database.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$email=  strtolower(filter_input(INPUT_POST, 'email'));
$password= hash('sha512',md5(filter_input(INPUT_POST, 'password')));

if(!empty($email)&&!empty($password))
{
    
   
  $sql=$db->prepare("SELECT email,id_user,password,name,surname,active FROM user WHERE email=:email AND password=:password;");
  $sql->bindParam(':email',$email,PDO::PARAM_STR);
  $sql->bindParam(':password',$password,PDO::PARAM_STR);
  $sql->execute();

    if($sql->rowCount()==1)
    {
        
        while($row=$sql->fetch(PDO::FETCH_ASSOC))
        {
        if($row['active']==1)
        {
        $_SESSION['email']=$row['email'];
        $_SESSION['id_user']=$row['id_user'];
        $_SESSION['name']=$row['name'];
        $_SESSION['surname']=$row['surname'];
        $_SESSION['login']=1;
        $_SESSION['login_date']=date("d.m.Y");
        $_SESSION['login_time']=date("H:i:s");
        header("Location: main.php");
        }
        else
        {
            
            $_SESSION['error']=1;
            header("Location: error.php");
        }
        }

                
    }
    else
    {
        $_SESSION['error']=2;
        header("Location: error.php");
        
    }
    
    
}
 else
{
     $_SESSION['error']=3;
     echo "page is under construction!";
}