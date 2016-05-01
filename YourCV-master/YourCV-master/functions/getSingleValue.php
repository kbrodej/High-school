<?php
function getSingleValue($db,$tableName, $prop, $value, $columnName)
{
  $q = $db->query("SELECT `$columnName` FROM `$tableName` WHERE $prop='".$value."'");
  $f = $q->fetch();
  $result = $f[$columnName];
  return $result;
}
function getSingleValueWith2Conditions($db,$tableName,$prop, $prop2,$value, $value2,$columnName)
{
  $q = $db->query("SELECT `$columnName` FROM `$tableName` WHERE $prop='".$value."' AND $prop2='".$value2."';");
  $f = $q->fetch();
  $result = $f[$columnName];
  return $result;
}
function getSingleValueWith3Conditions($db,$tableName, $prop, $prop2,$prop3,$value,$value2,$value3,$columnName)
{
  $q = $db->query("SELECT `$columnName` FROM `$tableName` WHERE $prop='".$value."' AND $prop2='".$value2."' AND $prop3='".$value3."';");
  $f = $q->fetch();
  $result = $f[$columnName];
  return $result;
}

function getSingleValueWith4Conditions($db,$tableName,$prop,$prop2,$prop3,$prop4,$value,$value2,$value3,$value4,$columnName)
{
   $q = $db->query("SELECT `$columnName` FROM `$tableName` WHERE $prop='".$value."' AND $prop2='".$value2."' AND $prop3='".$value3."' AND $prop4='".$value4."';");
  $f = $q->fetch();
  $result = $f[$columnName];
  return $result;
}
function getSingleValueSafe($db,$tableName, $prop, $value,$value_colmun, $columnName)
{
  $q = $db->prepare("SELECT `$columnName` FROM `$tableName` WHERE $prop='".$value_colmun."'");
  $q->bindParam($value_colmun,$value,PDO::PARAM_INT);
  $q->execute();
  $f = $q->fetch();
  $result = $f[$columnName];
  return $result;
}
function SingleValueCountNoConditions($db,$tableName,$columnName,$countName)
{
  $q = $db->query("SELECT COUNT(`$columnName`) as $countName FROM `$tableName` WHERE 1");
  $f = $q->fetch();
  $result = $f[$countName];
  return $result;
}
function userLogsInser($db,$tableName,$page,$date,$time,$ip,$id_user)
{
  $db->query("INSERT INTO `$tableName`(`page`, `date`, `time`, `ip`, `id_user`) VALUES ($page,$date,$time,$ip,$id_user)");
}




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

