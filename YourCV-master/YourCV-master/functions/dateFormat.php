<?php

function dateFormat($birth_date)
{
    $date= new DateTime($birth_date);
   echo $date->format('Y-m-d');
   
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

