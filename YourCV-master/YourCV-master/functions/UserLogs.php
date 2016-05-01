<?php
function insertUserLogs($db,$page,$date,$time,$ip,$id_user)
{
$sql=$db->prepare("INSERT INTO `user_logs`(`page`, `date`, `time`, `ip`, `id_user`) VALUES (:page,:date,:time,:ip,:id_user)");
$sql->bindParam(':page',$page,PDO::PARAM_STR);
$sql->bindParam(':date',$date,PDO::PARAM_STR);
$sql->bindParam(':time',$time,PDO::PARAM_STR);
$sql->bindParam(':ip',$ip,PDO::PARAM_STR);
$sql->bindParam(':id_user',$id_user,PDO::PARAM_INT);
$sql->execute();
}