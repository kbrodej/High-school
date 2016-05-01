<?php include 'restricted_check.php' ?>
<?php include 'header.php' ?>
<?php include 'database.php' ?>
<br/>
<center>
    
    <h2>Choose to which CV you want to add Language</h2>
    <table id='mainfeed' style="text-align: center;">
                                                <tr><th style="text-align: center;">CV</th></tr>
                                                <?php
                                                $choice=filter_input(INPUT_GET,'choice');
                                                 $_SESSION['add_choice']=$choice;
                                                $sql2=$db->prepare("SELECT * FROM `cv` WHERE id_user=:id_user;");
                                                $sql2->bindParam(':id_user',$_SESSION['id_user'],PDO::PARAM_INT);
                                                $sql2->execute();

                                                while($result2=$sql2->fetch(PDO::FETCH_ASSOC))
                                                {
                                                   echo "<tr><td><a href=cv_AddWhat.php?id_cv=".$result2['id_cv'].">".$result2['name']."</a></td></tr>";
                                                }
                                                
                                                
                                                
                                                
                                                ?>
                                            
                                                                                    </table>
    </center>
<br/>
<?php include 'footer.php' ?>