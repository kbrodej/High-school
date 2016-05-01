<?php
function allCv($db,$tableName, $value2, $value, $columnName)
{
  $q = $db->query("SELECT * FROM `cv_answers`
INNER JOIN cv as c on cv_answers.id_cv=c.id_cv
INNER JOIN user as u on c.id_user=u.id_user
WHERE u.id_user=".$value."' AND c.name='.".$value2."'
");
  $f = $q->fetch();
  $result = $f[$columnName];
  return $result;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

