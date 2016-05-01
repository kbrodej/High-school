<?php
$choice=  filter_input(INPUT_GET,'cv_type');
if(!empty($choice)&&isset($choice))
{
    switch ($choice)
    {
        case "student":
            header("Location: cv_make.php?type=student");
            break;
        case "employed":
            header("Location: cv_make.php?type=employed");
            break;
        
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

