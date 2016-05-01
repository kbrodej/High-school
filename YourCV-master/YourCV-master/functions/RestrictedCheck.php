<?php
error_reporting(E_ALL);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(empty($_SESSION['name']) && empty($_SESSION['surname']))
{
   echo ("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('You have to login to acces this site')
                            window.location.href='../login.php';
                            </SCRIPT>");
    //header("Location:index.php");
}
 else {
}