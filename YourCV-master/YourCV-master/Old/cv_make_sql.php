<?php
session_start();
include('database.php');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$name=  strtolower(mysql_real_escape_string(filter_input(INPUT_POST, 'name')));
$surname=  strtolower(mysql_real_escape_string(filter_input(INPUT_POST, 'surname')));
$adress=  strtolower(mysql_real_escape_string(filter_input(INPUT_POST, 'adress')));
$phone=  strtolower(mysql_real_escape_string(filter_input(INPUT_POST, 'phone')));
$email=  strtolower(mysql_real_escape_string(filter_input(INPUT_POST, 'email')));
$gender=  strtolower(mysql_real_escape_string(filter_input(INPUT_POST, 'gender')));
$birth_date=  strtolower(mysql_real_escape_string(filter_input(INPUT_POST, 'birth_date')));
$nationality=  strtolower(mysql_real_escape_string(filter_input(INPUT_POST, 'nationality')));
$job_applied=  strtolower(mysql_real_escape_string(filter_input(INPUT_POST, 'job_applied')));
$work_experience=  strtolower(mysql_real_escape_string(filter_input(INPUT_POST, 'work_experience')));
$education_and_training=  strtolower(mysql_real_escape_string(filter_input(INPUT_POST, 'education_and_training')));
$qualification_awarded=  strtolower(mysql_real_escape_string(filter_input(INPUT_POST, 'qualification_awarded')));
$mother_tounge=  strtolower(mysql_real_escape_string(filter_input(INPUT_POST, 'mother_tounge')));


if(isset($name)&&!empty($name)&&isset($surname)&&!empty($surname)&&isset($adress)&&!empty($adress)&&isset($phone)&&!empty($phone)&&isset($email)&&!empty($email)&&isset($gender)&&!empty($gender)&&isset($birth_date)&&!empty($birth_date)&&isset($nationality)&&!empty($nationality)
        &&isset($job_applied)&&!empty($job_applied)&&isset($work_experience)&&!empty($work_experience)&&isset($education_and_training)&&!empty($education_and_training)&&isset($qualification_awarded)&&!empty($qualification_awarded)&&isset($mother_tounge)&&!empty($mother_tounge))
{
    
    include_once 'functions/dateFormat.php';
    setcookie("name",$name, time()+3600);
    setcookie("surname",$surname, time()+3600);
    setcookie("adress",$adress, time()+3600);
    setcookie("phone",$phone, time()+3600);
    setcookie("email",$email, time()+3600);
    setcookie("gender",$gender, time()+3600);
    setcookie("birth_date",$birth_date, time()+3600);
    setcookie("nationality",$nationality, time()+3600);
    setcookie("job_applied",$job_applied, time()+3600);
    setcookie("work_experience",$work_experience, time()+3600);
    setcookie("education_and_training",$education_and_training, time()+3600);
    setcookie("qualification_awarded",$qualification_awarded, time()+3600);
    setcookie("mother_tounge",$mother_tounge, time()+3600);
    
    header("Location: cv_make_lang.php");
    
    
   
    
    
}
else
{
    echo "Some feilds are empty. Please fill them";
}


