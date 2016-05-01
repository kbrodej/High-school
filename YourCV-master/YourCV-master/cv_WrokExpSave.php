<?php session_start();
include ('database.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$error=0;

foreach ($_POST as $key=>$value)
{
    if(!empty($value))
    {
        $a[]=$value;
        
    }
    else
    {
        $error=1;
        echo "error";
        break;
        
    }
}
if($error==0)
{   
    if($a[3]==1)
    {
        $a[3]='Present';
    }
    try{
    $sql=$db->prepare("INSERT INTO `cv_work_experience`(`job_title`, `company_name`, `start_date`, `end_date`, `id_cv`) VALUES (:job_title,:company_name,:start_date,:end_date,:id_cv)");
    $sql->bindParam(':job_title',$a[0],PDO::PARAM_STR);
    $sql->bindParam(':company_name',$a[1],PDO::PARAM_STR);
    $sql->bindParam(':start_date',$a[2],PDO::PARAM_STR);
    $sql->bindParam(':end_date',$a[3],PDO::PARAM_STR);
    $sql->bindParam(':id_cv',$_SESSION['choosed_id_cv'],PDO::PARAM_INT);
    $sql->execute();
    
    
    }  catch (PDOException $e)
                    {
                        
                        echo "i cant add.<br/>".$e->getMessage();
                    }
           header("Location:cv_menu.php");             
}