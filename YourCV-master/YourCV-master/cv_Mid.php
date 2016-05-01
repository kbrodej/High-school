<?php session_start()?>
<?php include 'header.php';
include 'restricted_check.php';
?>  
<center>
    <br/>
        <h5>Do you wish to continue with CV creation for Students?
            If not your answers will be saved.
        
            <br/>
        
        You can continue 
        <br/>
        <?php 

        include ('database.php');
        if(!empty($_SESSION['cv_name'])&&isset($_SESSION['cv_name'])&&!empty($_SESSION['type'])&&isset($_SESSION['type'])&&!empty($_SESSION['part'])&&isset($_SESSION['part']))
        {
            
        
        
        
       $part=$_SESSION['part'];
       $cv_name=$_SESSION['cv_name'];
            
                
                echo "<a href='cv_MidSql.php?cv_name=".$cv_name."&part=".$part."' class='button medium icon fa-arrow-circle-right'>Here</a><br/>" ;
                
            
       
        


 }
        
        ?>
       <br/>Or go<br/> <a href="main.php" class='button medium icon fa-arrow-circle-left'>BAck</a>
       
</center>
<br/>
<?php include 'footer.php'?>
