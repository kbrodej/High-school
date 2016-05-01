<?php session_start();
include('database.php');
include('functions/getSingleValue.php');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$old_password=hash('sha512',md5(filter_input(INPUT_POST,'old_password')));
$password1=hash('sha512',md5(filter_input(INPUT_POST,'password1')));
$password2=hash('sha512',md5(filter_input(INPUT_POST,'password2')));
if(isset($old_password)&&!empty($old_password)&&isset($password1)&&!empty($password1)&&isset($password2)&&!empty($password2))
{
    $old_pw_q=  getSingleValue($db, 'user', 'password', $old_password, 'password');
    
    if($old_pw_q===$old_password)
    {
        if($password1===$password2)
        {
           $user=$_SESSION['id_user'];
           $sql=$db->prepare("UPDATE `user` SET `password`=:new WHERE `id_user`=:id_user");
           $sql->bindParam(':new',$password1,PDO::PARAM_STR);
           $sql->bindParam(':id_user',$user,PDO::PARAM_INT);
           $sql->execute();
           session_destroy();
           header("Location: login.php");
        }
    }
}