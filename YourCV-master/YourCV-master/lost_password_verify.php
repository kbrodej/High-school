<?php
session_start();
include('database.php');
include('functions/getSingleValue.php');

$email=  filter_input(INPUT_POST, 'email');
$sec_anwser=filter_input(INPUT_POST,'sec_answer');
$password1=hash('sha512',md5(filter_input(INPUT_POST,'password1')));
$password2=hash('sha512',md5(filter_input(INPUT_POST,'password2')));
print_r($_POST);
if(isset($email)&&!empty($email)&&isset($password1)&&!empty($password1)&&isset($password2)&&!empty($password2)&&isset($sec_anwser)&&!empty($sec_anwser))
{
    $id_user=  getSingleValue($db, 'user', 'email', $email, 'id_user');
    $sql=$db->prepare("SELECT * FROM `security_answer` INNER JOIN user as u on security_answer.id_user=u.id_user WHERE u.id_user=:id_user");
    $sql->bindParam(':id_user',$id_user,PDO::PARAM_STR);
    $sql->execute();
  
    if($sql->rowCount()===1)
    {
        $row=$sql->fetch(PDO::FETCH_ASSOC);
        
        if($password1===$password2)
        {
           $sql=$db->prepare("UPDATE `user` SET `password`=:new WHERE `id_user`=:id_user");
           $sql->bindParam(':new',$password1,PDO::PARAM_STR);
           $sql->bindParam(':id_user',$row['id_user'],PDO::PARAM_INT);
           $sql->execute();
           header("Location: login.php");
        }
        
    }
}
else
{
    echo " neki ni settan";
}