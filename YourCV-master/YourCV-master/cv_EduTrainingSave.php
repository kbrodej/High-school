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
      if($a[4]==1)
    {
        $a[4]='Present';
    }
    try{
    $sql=$db->prepare("INSERT INTO `cv_education`(`course`, `institution_name`, `qualification_awarded`, `start_date`, `end_date`, `id_cv`) VALUES (:course_name,:institution_name,:qa,:start_date,:end_date,:id_cv)");
    $sql->bindParam(':course_name',$a[0],PDO::PARAM_STR);
    $sql->bindParam(':institution_name',$a[1],PDO::PARAM_STR);
    $sql->bindParam(':qa',$a[2],PDO::PARAM_STR);
    $sql->bindParam(':start_date',$a[3],PDO::PARAM_STR);
    $sql->bindParam(':end_date',$a[4],PDO::PARAM_STR);
    $sql->bindParam(':id_cv',$_SESSION['choosed_id_cv'],PDO::PARAM_INT);
    $sql->execute();
    
    
    }  catch (PDOException $e)
                    {
                        
                        echo "i cant add.<br/>".$e->getMessage();
                    }
                    
    header("Location:cv_menu.php");                
                    
}