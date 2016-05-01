 <?php if(isset($_SESSION['type'])&&!empty($_SESSION['type'])) 
               {
               $type=$_SESSION['type'];
            switch($type)
            {
                case '2':
                    
                    try{
                    $sql=$db->prepare("SELECT `id_cv_questions`,`cv_question` FROM `cv_questions` WHERE `id_cv_type`=:type AND id_cv_questions>8 AND id_cv_questions<=18;");
                    $sql->bindParam(':type',$type,PDO::PARAM_STR);           
                    $sql->execute();
                    
                    echo "<form action='cv_ThirdPartSave.php' method='get' id='form1'>"; //From opened with id1 will be confirmed with js
                    $steuc=1;
                    while($result=$sql->fetch(PDO::FETCH_ASSOC))
                    {
                       
                       
                           
                            switch ($result['cv_question'])
                            {
                                case 'work experience':
                                    echo "<p>".ucfirst($result['cv_question'])."<br/>";
                                    echo "<textarea form='form1' name='".$result['cv_question']."' placeholder='Enter text here'></textarea>";
                                    break;
                                  case 'job applied':
                    echo "<p>".ucfirst($result['cv_question'])."<input type='text' name='".$result['cv_question']."'required='required' placeholder='Enter text here'/>"."</p>";
                    break;
                
                case 'education and training':
                    echo "<p>".ucfirst($result['cv_question'])."<br/>";
                    echo "<textarea form='form1' name='".$result['cv_question']."' placeholder='Enter text here'></textarea>";
                    break;
                case 'qualification awarded':
                    echo "<p>".ucfirst($result['cv_question'])."<br/>";
                    echo "<textarea form='form1' name='".$result['cv_question']."' placeholder='Enter text here'></textarea>";
                    
                    break;
                case 'mother tounge':
                     try{                
                        $sql=$db->query("SELECT * FROM `languages` WHERE 1;");
                        $sql->execute();
                            echo "<p>".ucfirst($result['cv_question']);
                            echo '<select name="lang">';
                            while($row=$sql->fetch(PDO::FETCH_ASSOC))
                            {
                                echo "<center><option value='".ucfirst($row['language'])."'>".$row['language']."</option></center>";
                            }
                            echo '</select>';
                        }catch (PDOException $e)
                        {
            
                        echo "i cant add.<br/>".$e->getMessage();
                        }
                    break;
                                default:
                                    break;
                            }
                        
                        /*
                        $cv_name=  ucfirst($result['cv_question']);
                        echo $cv_name."<br/>";
                        echo "<tr><input type='text' name='".$cv_name."'required=''>";
                        echo "<input type='hidden' name='".$result['cv_question'].'_id='.$steuc."' value='".$result['id_cv_questions'] ."'></tr>";
                        $steuc++;
                       
                        */
                    }
                   
               
                    
                    
                    
                  
                    echo "<input type='submit' Value='Submit'>";
                    echo "</form>";
                    
                    }  catch (PDOException $e)
        {
            $error=1;
            echo "i cant add.<br/>".$e->getMessage();
        }
                    break;
                
                
                
                
                
                
                
                
                
                
                case '1':
                    include 'database.php';
                    $sql=$db->prepare("SELECT id_cv_question,cv_question,cv_type FROM `cv_questions` INNER JOIN cv_type ON cv_type.id_cv_type=cv_questions.id_cv_type WHERE cv_type=:type AND id_cv_question<=8;");
                    $sql->bindParam(':type',$type,PDO::PARAM_STR);           
                    $sql->execute();
                    
                    echo "Zaposlen";   
                    echo "<form action='cv_make_sql.php' method='post' name='cv_creation' id='form1' class='form2'>"; //From opened with id1 will be confirmed with js
                    echo "<table class='default' width='30%' border='1'>";
                    while($result=$sql->fetch(PDO::FETCH_ASSOC))
                    {
                        $cv_name=  strtoupper($result['cv_question']);
                        echo $cv_name."?";
                        echo "<tr><input type='text' name='".$cv_name."'required=''></tr>";
                        
                    }
                   
                    
                    
                    
                    
                    echo "</table>";
                    echo "<input type='submit' Value='Submit'>";
                    echo "</form>";
                    break;
                   
                
            }
                    
            

               }
               ?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

