
<?php
mysql_connect('localhost','root',''); // MAMP defaults
mysql_select_db('jquery');
//$file=  fopen('csv/dijak.csv', 'r') or die("Unable to open file!");;
$which=filter_input(INPUT_POST,'choice');
if(!empty($which))
{
switch($which){
   case 'dijak':
       $handle = fopen('uploads/dijak.csv', 'r') or die("Unable to open file!"); 
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            
         $import="INSERT into dijak(ime,priimek) values('$data[1]','$data[2]') ON DUPLICATE KEY UPDATE ime='$data[1]',priimek='$data[2]';";
 
        mysql_query($import) or die(mysql_error());
            
    }
    fclose($handle);
 
    print "Populated dijak tables";
    break;
    
   case 'ocene':
       $data=array();
       $handle = fopen('uploads/ocene.csv', 'r') or die("Unable to open file!"); 
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
         
         $import="INSERT into ocene(id_ocene,ocena,komentar,id_p,id_d) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')ON DUPLICATE KEY UPDATE id_ocene='$data[0]',ocena='$data[1]',komentar='$data[2]',id_p='$data[3]',id_d='$data[4]';";
 
        mysql_query($import) or die(mysql_error());
            
    }
 print "Populated ocene";
    fclose($handle);
 

       break;
   case 'predmet':
       $handle = fopen('uploads/predmet.csv', 'r') or die("Unable to open file!"); 
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            
         $import="INSERT into predmet(id_p,ime_predmeta) values('$data[1]')ON DUPLICATE KEY UPDATE id_p='$data[0]',ime_predmeta='$data[1]';";
 
        mysql_query($import) or die(mysql_error());
            
    }
    fclose($handle);
    
    print "Populated predmet";
       break;
       
   case 'all':
       
       //dijak
      $handle1 = fopen('uploads/dijak.csv', 'r') or die("Unable to open file!"); 
    while (($data = fgetcsv($handle1, 1000, ",")) !== FALSE) {
            
         $import="INSERT into dijak(id_D,ime,priimek) values('$data[0]','$data[1]','$data[2]') ON DUPLICATE KEY UPDATE id_d='$data[0]',ime='$data[1]',priimek='$data[2]';";
 
        mysql_query($import) or die(mysql_error());
            
    }
 
    fclose($handle1);
//ocene
    $handle2 = fopen('uploads/ocene.csv', 'r') or die("Unable to open file!"); 
    while (($data = fgetcsv($handle2, 1000, ",")) !== FALSE) {
            
         $import="INSERT into ocene(id_ocene,ocena,komentar,id_p,id_d) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')ON DUPLICATE KEY UPDATE id_ocene='$data[0]',ocena='$data[1]',komentar='$data[2]',id_p='$data[3]',id_d='$data[4]';";
 
        mysql_query($import) or die(mysql_error());
            
    }
     
    fclose($handle2);
 
    //predmet
    $handle3 = fopen('uploads/predmet.csv', 'r') or die("Unable to open file!"); 
    while (($data = fgetcsv($handle3, 1000, ",")) !== FALSE) {
            
         $import="INSERT into predmet(id_p,ime_predmeta) values('$data[0]','$data[1]')ON DUPLICATE KEY UPDATE id_p='$data[0]',ime_predmeta='$data[1]';";
 
        mysql_query($import) or die(mysql_error());
            
    }
print "Populated all tables";
    fclose($handle3);
    
 
       
       break;
   
}
  
}
else
{
    echo "Izberite možnost";
}
