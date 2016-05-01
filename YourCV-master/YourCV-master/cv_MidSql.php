<?php session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$cv_name=filter_input(INPUT_GET,'cv_name');
$part=filter_input(INPUT_GET,'part');
if(isset($_SESSION['type'])&&!empty($_SESSION['type'])&&isset($cv_name)&&!empty($cv_name)&&isset($part)&&!empty($part))
{
    $choice=$_SESSION['type'];
    if($choice===null)
    {
    switch ($choice)
    {
        case 2:
            switch ($part)
            {
                case 'fp':
                    header("Location: cv_Language.php?cv_name=$cv_name&part=$part&type=$choice");
                    break;
                
                case 'lang':
                    header("Location: cv_ThirdPart.php?cv_name=$cv_name&part=$part&type=$choice");
                    break;
                
                case 'tp':
                    
                    break;
                
                case 'admmorel':
                    header("Location: cv_menu.php");
                    break;
                
                default:
                    break;
               
            
            
            }
            break;
        case 1:
            switch ($part)
        {
            case 'fp':
                    header("Location: cv_Language.php?cv_name=$cv_name&part=$part&type=$choice");
                    break;
                
                case 'lang':
                    header("Location: cv_ThirdPart.php?cv_name=$cv_name&part=$part&type=$choice");
                    break;
                
                case 'tp':
                    
                    break;
                
                case 'admmorel':
                    
                    break;
                default:
                    break;
        }
        break;
            
    }
    }
    else
    {
         switch ($part)
        {
            case 'fp':
                    header("Location: cv_Language.php?cv_name=$cv_name&part=$part&type=$choice");
                    break;
                
                case 'lang':
                    header("Location: cv_ThirdPart.php?cv_name=$cv_name&part=$part&type=$choice");
                    break;
                
                case 'tp':
                    
                    break;
                
                case 'admmorel':
                    header("Location: cv_menu.php");
                    break;
                default:
                    break;
        }
    }
}
