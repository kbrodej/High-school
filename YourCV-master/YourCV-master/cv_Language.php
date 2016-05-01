<?php include 'restricted_check.php' ?>
<?php include 'header.php' ?>
<link rel="stylesheet" type="text/css" href="css/test.css">
<!-- Language and work exp, training -->
<center>
<br/>

    <form action="cv_LanguageSave.php" method="POST">
        <table>
<tr>
     <td>&nbsp;</td>
     <td colspan="2"><center><b>UNDERSTANDING:</b> </center></td>
    <td colspan="2"><center><b>SPEAKING</b></center></td>
    <td colspan="2"><center><b>WRITING</b></center></td<>
</tr>
<tr>
    <td>&nbsp;</td>
    <td width="16%"><center>Listening</center></td>
    <td width="16%"><center>Reading</center></td>
    <td width="16%"><center>Spoken interaction</center></td>
    <td width="16%"><center>Spoken production</center></td>
    <td width="16%">&nbsp;</td>
</tr>
<tr>
    <td width="300px" style="padding: 10px 0px 10px 10px"><b style="text-align: left; padding-left: 4px;">SELECT LANGUAGE:</b>
        <select name="language">
  <?php 
  include('database.php');
  $sql=$db->query("SELECT * FROM `languages` ORDER BY `languages`.`language` ASC;");
  $sql->execute();
  
  while($row=$sql->fetch(PDO::FETCH_ASSOC))
  {
     echo "<center><option value='".ucfirst($row['id_language'])."'>".$row['language']."</option></center>";
  }
  
  ?>
        </select>
</td>
<td style="padding: 10px 0px 10px 10px">
    &nbsp;
    <select name="listening">
 <?php
 $levels=array('a1','a2','b1','b2','c1','c2');
 for($i=0;$i<=5;$i++)
 {
     	echo '<option value="'.$levels[$i].'">'.$levels[$i].'</option>';
 }
 
 
 
 ?>
</td >
<td style="padding: 10px 0px 10px 10px">
    &nbsp;
    <select name="reading">
  <?php
   for($i=0;$i<=5;$i++)
 {
     	echo '<option value="'.$levels[$i].'">'.$levels[$i].'</option>';
 }
 
  
  
  ?>
    </select>
</td>
<td style="padding: 10px 0px 10px 10px">
    &nbsp;
    <select name="spoken_interaction">
  <?php
   for($i=0;$i<=5;$i++)
 {
     	echo '<option value="'.$levels[$i].'">'.$levels[$i].'</option>';
 }
 
  
  
  ?>
    </select>
</td>
<td style="padding: 10px 0px 10px 10px">
    &nbsp;
   <select name="spoken_production">
  <?php
   for($i=0;$i<=5;$i++)
 {
     	echo '<option value="'.$levels[$i].'">'.$levels[$i].'</option>';
 }
 
  
  
  ?>
    </select>
</td>
<td style="padding: 10px 0px 10px 10px">&nbsp;
    
<select name="writing">
  <?php
   for($i=0;$i<=5;$i++)
 {
     	echo '<option value="'.$levels[$i].'">'.$levels[$i].'</option>';
 }
 
  
  
  ?>
    </select>
</td>  


<tr>


</tr>


</table>

<input type="submit" value="submit"></form>

  
    <div id="msg">
    <i><a href="http://www.examenglish.com/CEFR/cefr.php">Levels: A1/2: Basic user - B1/2: Independent user - C1/2 Proficient user
            <br/>Common European Framework of Reference for Languages</a></i>

    </div>
<br/>
<br/>
<br/>

<?php include 'footer.php' ?>