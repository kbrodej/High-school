<?php session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$choice=  $_SESSION['add_choice'];
$choosed_id_cv=  filter_input(INPUT_GET, 'id_cv');
$_SESSION['choosed_id_cv']=$choosed_id_cv;
switch ($choice)
{
    case 'work':
        header("Location:cv_WorkExp.php");
        break;
    case 'edu':
        header("Location:cv_EduTraining.php");
        break;
    default:
        break;
}