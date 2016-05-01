<?php session_start();
include("database.php");
include ("functions/getSingleValue.php");

$array=array(
     "Communication_skills"=>filter_input(INPUT_GET,'Communication_skills'),
     "Managerial_skills"=>filter_input(INPUT_GET,'Managerial_skills'),
     "Computer_skills"=>filter_input(INPUT_GET,'Computer_skills'),
    "Driving_license"=>filter_input(INPUT_GET,'Driving_license'),
    "Other_skills"=>filter_input(INPUT_GET,'Other_skills'),
    "Publications"=>filter_input(INPUT_GET,'Publications'),
);


    $cv_name=$_SESSION['cv_name'];
    
    $id_user=$_SESSION['id_user'];
   $time=$_SESSION['cv_time'];
   $date=$_SESSION['cv_date'];
   $id_cv=$_SESSION['id_cv'];
   $type=  filter_input(INPUT_GET, 'type');
    try{
        
        
        
        if(!empty($cv_name)&&!empty($type))
        {   
              
            switch ($type)
            {
            case '2':
                
                
            $id=13;
            
            foreach ($array as $key=>$value)
            {
                if(empty($value))
                {
                    
                    
                $empty=null;
                $sql=$db->prepare("INSERT INTO `cv_answers`( `cv_answer`, `id_cv_question`, `id_cv`) VALUES (:answer,:id_question,:id_cv)");
                $sql->bindParam(':answer',$empty,PDO::PARAM_STR);
                $sql->bindParam(':id_cv',$id_cv,PDO::PARAM_INT);
                $sql->bindParam(':id_question',$id,PDO::PARAM_INT);
                
                $sql->execute(); 
                
             
                }
                else
                {
                $sql=$db->prepare("INSERT INTO `cv_answers`( `cv_answer`, `id_cv_question`, `id_cv`) VALUES (:answer,:id_question,:id_cv)");
                $sql->bindParam(':answer',$value,PDO::PARAM_STR);
                $sql->bindParam(':id_cv',$id_cv,PDO::PARAM_INT);
                $sql->bindParam(':id_question',$id,PDO::PARAM_INT);
            
        
                 //echo $value." ".$id."<br/>";
                $sql->execute();
                }
                $id++;
 
        $error=0;
            }
        header("Location:cv_menu.php?last_cv_name=".$cv_name."&last_cv_id=".$id_cv."");    
        break;
             case '1':
                  $id=34;
            
            foreach ($array as $key=>$value)
            {
                
                if(empty($value))
                {
                   
                    $empty=null;
                   $sql=$db->prepare("INSERT INTO `cv_answers`( `cv_answer`, `id_cv_question`, `id_cv`) VALUES (:answer,:id_question,:id_cv)");
                $sql->bindParam(':answer',$empty,PDO::PARAM_STR);
                $sql->bindParam(':id_cv',$id_cv,PDO::PARAM_INT);
                $sql->bindParam(':id_question',$id,PDO::PARAM_INT);
                
                $sql->execute(); 
                
             
                }
                else
                {
                $sql=$db->prepare("INSERT INTO `cv_answers`( `cv_answer`, `id_cv_question`, `id_cv`) VALUES (:answer,:id_question,:id_cv)");
                $sql->bindParam(':answer',$value,PDO::PARAM_STR);
                $sql->bindParam(':id_cv',$id_cv,PDO::PARAM_INT);
                $sql->bindParam(':id_question',$id,PDO::PARAM_INT);
            
        
                 //echo $value." ".$id."<br/>";
                $sql->execute();
                }
                $id++;
 
        $error=0;
            }
        header("Location:cv_menu.php?last_cv_name=".$cv_name."&last_cv_id=".$id_cv."");    
                break;
            }
        }
    } catch (PDOException $e)
                    {
                        $error=1;
                        echo "i cant add.<br/>".$e->getMessage();
                    }
    