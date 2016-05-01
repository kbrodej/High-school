<?php session_start();
include ('database.php');

$array= array("Ime"=>  filter_input(INPUT_POST, 'Name'),
            "Priimek"=>  filter_input(INPUT_POST, 'Surname'),
               "Naslov"=>  filter_input(INPUT_POST, 'Adress'),
               "Telefon"=>  filter_input(INPUT_POST, 'Phone'),
               "Email"=>  filter_input(INPUT_POST, 'Email'),
               "Spol"=>  filter_input(INPUT_POST, 'Sex'),
               "Datum_rojstva"=>filter_input(INPUT_POST,'Birth_date'),
               "Drzavljanstvo"=>  filter_input(INPUT_POST, 'Nationality'),
                "ZaDelo"=>  filter_input(INPUT_POST, 'Job_applied')       
     );
$type=filter_input(INPUT_POST,'type');
foreach ($array as $key=>$value)
{
    if(!empty($value)&&isset($value))
    {
        $error=0;
    }
    else 
    {
        $error=1;
    }
}
if($error==0&&isset($_SESSION['cv_name'])&&!empty($_SESSION['cv_name'])&&isset($_SESSION['type'])&&!empty($_SESSION['type']))
    {
    
    
    $cv_name=$_SESSION['cv_name'];
    
    $id_user=$_SESSION['id_user'];

       
    
    if(!empty($cv_name))
    {
        switch ($type)
        {
            case '2':
                $id=1;
             $date=date("d.m.Y");
            $time=date("H:i:s");
            $tip=2;
            $sql1=$db->prepare("INSERT INTO `cv`(`name`, `date`, `time`, `id_user`,`id_cv_type`) VALUES (:name,:date,:time,:id_user,:type)");
            $sql1->bindParam(':type',$tip,PDO::PARAM_INT);
            $sql1->bindParam(':name',$_SESSION['cv_name'],PDO::PARAM_STR);
            $sql1->bindParam(':id_user',$id_user,PDO::PARAM_INT);
            $sql1->bindParam(':time',$time,PDO::PARAM_STR);
            $sql1->bindParam(':date',$date,PDO::PARAM_STR);
            $sql1->execute();
          include('functions/getSingleValue.php');
        
               $cv_id_last=$db->lastInsertId();
               
        foreach($array as $key => $value)
        {
            try{
               
            //cv creation
       
                $sql=$db->prepare("INSERT INTO `cv_answers`( `cv_answer`, `id_cv_question`, `id_cv`) VALUES (:answer,:id_question,:id_cv)");
                $sql->bindParam(':answer',$value,PDO::PARAM_STR);
                $sql->bindParam(':id_cv',$cv_id_last,PDO::PARAM_INT);
                $sql->bindParam(':id_question',$id,PDO::PARAM_INT);
                $sql->execute();
        
        
                $id++;
                
       
        
                }  catch (PDOException $e)
                    {
                        
                        echo "i cant add.<br/>".$e->getMessage();
                    }
       
    
        }
        $_SESSION['cv_time']=$time;
        $_SESSION['cv_date']=$date;
        $_SESSION['id_cv']=$cv_id_last;
        $_SESSION['part']='fp'; //from which part it came from
        header("Location:cv_Mid.php");
        break;
            case '1':
                $id=23;
             $date=date("d.m.Y");
            $time=date("H:i:s");
            $tip=1;
          $sql1=$db->prepare("INSERT INTO `cv`(`name`, `date`, `time`, `id_user`,`id_cv_type`) VALUES (:name,:date,:time,:id_user,:type)");
            $sql1->bindParam(':type',$tip,PDO::PARAM_INT);
            $sql1->bindParam(':name',$_SESSION['cv_name'],PDO::PARAM_STR);
            $sql1->bindParam(':id_user',$id_user,PDO::PARAM_INT);
            $sql1->bindParam(':time',$time,PDO::PARAM_STR);
            $sql1->bindParam(':date',$date,PDO::PARAM_STR);
            $sql1->execute();
          include('functions/getSingleValue.php');
        
               $cv_id_last=$db->lastInsertId();
               
        foreach($array as $key => $value)
        {
            try{
              
            //cv creation
       
                $sql=$db->prepare("INSERT INTO `cv_answers`( `cv_answer`, `id_cv_question`, `id_cv`) VALUES (:answer,:id_question,:id_cv)");
                $sql->bindParam(':answer',$value,PDO::PARAM_STR);
                $sql->bindParam(':id_cv',$cv_id_last,PDO::PARAM_INT);
                $sql->bindParam(':id_question',$id,PDO::PARAM_INT);
                $sql->execute();
        
        
                $id++;
                
       
        
                }  catch (PDOException $e)
                    {
                        
                        echo "i cant add.<br/>".$e->getMessage();
                    }
       
    
        }
        $_SESSION['cv_time']=$time;
        $_SESSION['cv_date']=$date;
        $_SESSION['id_cv']=$cv_id_last;
        $_SESSION['part']='fp'; //from which part it came from
        header("Location:cv_Mid.php");
                break;
            default:
                
                break;
    }
    }
    else
    {
        
    }
    
    
   


    
}
elseif($error==0)
{
    echo "noben ni prsu";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

