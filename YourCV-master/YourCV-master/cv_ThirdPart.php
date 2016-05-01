<?php include 'restricted_check.php' ?>
<?php include 'header.php' ?>
<?php include 'database.php'?>
<center>
				<div class="wrapper style2" >
					<div class="inner">
                                            <form action='cv_ThirdPartSave.php' method='get' id='form1'>
						<!-- Feature 2 -->
							
								<div class="row">
									<div class="6u">
										<section>
<?php  

$cv_name=filter_input(INPUT_GET,'cv_name');
$part=filter_input(INPUT_GET,'part');
$type=filter_input(INPUT_GET,'type');

if(isset($type)&&!empty($type)&&!empty($cv_name)&&isset($cv_name)) 
    {

        switch($type)
        {
        case '2':       
            try{
                $sql=$db->prepare("SELECT `id_cv_questions`,`cv_question` FROM `cv_questions` WHERE `id_cv_type`=:type AND id_cv_questions>10 AND id_cv_questions<=16;");
                $sql->bindParam(':type',$type,PDO::PARAM_STR);           
                $sql->execute();
                    
                $steuc=1;
                while($result=$sql->fetch(PDO::FETCH_ASSOC))
                {
                    switch ($result['cv_question'])
                   {
                    default:
                        echo "<label>".ucfirst($result['cv_question'])."</label>";
                        echo "<input type='text' name='".ucfirst($result['cv_question'])."' placeholder='Separate more values with comma'/>";
                        break;
                    case 'mother tounge'  :
                        
                        break;
                    case 'education and training':
                        echo "<label>".ucfirst($result['cv_question'])."</label>";
                        echo "<input type='text' name='".ucfirst($result['cv_question'])."' placeholder='Better solution omw'/>"; 
                        break;
                    
                        
                    }
                }
                }  catch (PDOException $e)
                    {
                        $error=1;
                        echo "i cant add.<br/>".$e->getMessage();
                    }
        break;
                case '1':
                    try{
                    $sql=$db->prepare("SELECT `id_cv_questions`,`cv_question` FROM `cv_questions` WHERE `id_cv_type`=:type AND id_cv_questions>32 AND id_cv_questions<=37;");
                    $sql->bindParam(':type',$type,PDO::PARAM_STR);           
                    $sql->execute();
                    
                    $steuc=1;
                    while($result=$sql->fetch(PDO::FETCH_ASSOC))
                    {
                    switch ($result['cv_question'])
                    {
                        default:
                            echo "<label>".ucfirst($result['cv_question'])."</label>";
                            echo "<input type='text' name='".ucfirst($result['cv_question'])."' placeholder='Separate more values with comma'/>";
                            break;
                        case 'mother tounge'  :
                            echo "<label>".ucfirst($result['cv_question'])."</label>";
                            echo "<input type='text' name='".ucfirst($result['cv_question'])."' placeholder='Enter text here'/>";
                            break;
                        case 'qualification awarded':
                        break;
                       
                    }
                    }
                    }  catch (PDOException $e)
                    {
                        $error=1;
                        echo "i cant add.<br/>".$e->getMessage();
                    }
        break;
                   
        default:
        break;
    
        }
    }
?>
            </section>
        </div>
    <div class="6u">
<section>
 <?php
 //drugi form
 if(isset($type)&&!empty($type)&&!empty($cv_name)&&isset($cv_name)) 
 {
    switch($type)
    {
    case '2':
        echo "<input type=hidden value=".$type." name=type>";
        try{
            $sql2=$db->prepare("SELECT `id_cv_questions`,`cv_question` FROM `cv_questions` WHERE `id_cv_type`=:type AND id_cv_questions>16 AND id_cv_questions<=19;");
            $sql2->bindParam(':type',$type,PDO::PARAM_STR);           
            $sql2->execute();
            $steuc=1;
            while($result2=$sql2->fetch(PDO::FETCH_ASSOC))
            {
            switch ($result2['cv_question'])
            {
            default:
                echo "<label>".ucfirst($result2['cv_question'])."</label>";
                echo "<input type='text' name='".ucfirst($result2['cv_question'])."'  placeholder='Separate more values with comma'>";
                break;
            }
               
                           
            }
            }  catch (PDOException $e)
                {
                    $error=1;
                    echo "i cant add.<br/>".$e->getMessage();
                }
        break;
    case '1':
        echo "<input type=hidden value=".$type." name=type>";         
        try{
            $sql2=$db->prepare("SELECT `id_cv_questions`,`cv_question` FROM `cv_questions` WHERE `id_cv_type`=:type AND id_cv_questions>37 AND id_cv_questions<=42;");
            $sql2->bindParam(':type',$type,PDO::PARAM_STR);           
            $sql2->execute();
            $steuc=1;
            while($result2=$sql2->fetch(PDO::FETCH_ASSOC))
            {
            switch ($result2['cv_question'])
            {
            default:
                echo "<label>".ucfirst($result2['cv_question'])."</label>";
                echo "<input type='text' name='".ucfirst($result2['cv_question'])."'  placeholder='Separate more values with comma'>";
                break;
            }
               
                      
            }
            }  catch (PDOException $e)
                {
                    $error=1;
                    echo "i cant add.<br/>".$e->getMessage();
                }
        break;
    }
		
 }
 else
 {
     echo "noben ni prsu";
 }
?>
                                                                    <input type='submit' Value='Submit'> </section>
                                                                </div>
                                                            </div>
                                                        </form>                    
                                                    </div>
                                                </div>
<?php include 'footer.php' ?>