<?php session_start();
include('database.php');
include ('functions/getSingleValue.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$array=array(
        "listening"=>filter_input(INPUT_POST, 'listening'),
        "reading"=>filter_input(INPUT_POST, 'reading'),
        "spoken_interaction"=>filter_input(INPUT_POST, 'spoken_interaction'),
        "spoken_production"=>filter_input(INPUT_POST, 'spoken_production'),
        "writing"=>filter_input(INPUT_POST, 'writing'),
        );
$language=filter_input(INPUT_POST, 'language');

if(isset($array)&&!empty($array)&&isset($_SESSION['id_cv'])&&!empty($_SESSION['id_cv'])&&isset($_SESSION['type'])&&!empty($_SESSION['type']))
{   
    $type=$_SESSION['type'];
    $cv_id_query=$_SESSION['id_cv'];
    switch($type)
    {
    case 2:
        try{
    
    $sql1=$db->prepare("INSERT INTO `cv_languages_levels`(`listening`, `reading`, `spoken_interaction`, `spoken_production`, `writing`) VALUES (:listening,:reading,:spoken_interaction,:spoken_production,:writing)");//levels
    $sql1->bindParam(':listening',$array['listening'],PDO::PARAM_STR);
    $sql1->bindParam(':reading',$array['reading'],PDO::PARAM_STR);
    $sql1->bindParam(':spoken_interaction',$array['spoken_interaction'],PDO::PARAM_STR);
    $sql1->bindParam(':spoken_production',$array['spoken_production'],PDO::PARAM_STR);
    $sql1->bindParam(':writing',$array['writing'],PDO::PARAM_STR);
    $sql1->execute();
    
    
    $lang_lev_last_id = $db->lastInsertId();
   $sql2=$db->prepare("INSERT INTO `cv_answer_languages`(`id_cv_language_levels`, `id_cv`, `id_language`) VALUES (:id_cv_ll,:id_cv,:id_language)");
                        $sql2->bindParam(':id_cv_ll',$lang_lev_last_id,PDO::PARAM_INT);
                        $sql2->bindParam(':id_cv',$cv_id_query,PDO::PARAM_INT);
                        $sql2->bindParam(':id_language',$language,PDO::PARAM_INT);
                        $sql2->execute();
    
    
    
    $_SESSION['part']='lang';
    header("Location:cv_Mid.php");
        }  catch (PDOException $e)
                    {
                        $error=1;
                        echo "i cant add.<br/>".$e->getMessage();
                    }
    break;
    case 1:
        try{
    
    $sql1=$db->prepare("INSERT INTO `cv_languages_levels`(`listening`, `reading`, `spoken_interaction`, `spoken_production`, `writing`) VALUES (:listening,:reading,:spoken_interaction,:spoken_production,:writing)");//levels
    $sql1->bindParam(':listening',$array['listening'],PDO::PARAM_STR);
    $sql1->bindParam(':reading',$array['reading'],PDO::PARAM_STR);
    $sql1->bindParam(':spoken_interaction',$array['spoken_interaction'],PDO::PARAM_STR);
    $sql1->bindParam(':spoken_production',$array['spoken_production'],PDO::PARAM_STR);
    $sql1->bindParam(':writing',$array['writing'],PDO::PARAM_STR);
    $sql1->execute();
    
    
    $lang_lev_last_id = $db->lastInsertId();
   $sql2=$db->prepare("INSERT INTO `cv_answer_languages`(`id_cv_language_levels`, `id_cv`, `id_language`) VALUES (:id_cv_ll,:id_cv,:id_language)");
                        $sql2->bindParam(':id_cv_ll',$lang_lev_last_id,PDO::PARAM_INT);
                        $sql2->bindParam(':id_cv',$cv_id_query,PDO::PARAM_INT);
                        $sql2->bindParam(':id_language',$language,PDO::PARAM_INT);
                        $sql2->execute();
    
    
    
    
    $_SESSION['part']='lang';
    header("Location:cv_Mid.php?part=lang");
        }  catch (PDOException $e)
                    {
                        $error=1;
                        echo "i cant add.<br/>".$e->getMessage();
          
        break;
    }
}
}
 else {
echo " something is wrong";
}



