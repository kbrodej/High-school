<?php include 'restricted_check.php' ?>
<?php include 'header.php' ?>
<?php include 'database.php'?>
 <script>
                $(function() {
                  $( "#datepicker" ).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "1950:2015",
                    dateFormat: "yy-mm-dd"
                  });
                });
                </script>
<center>
				<div class="wrapper style2" >
					<div class="inner">
                                            <form action='cv_FirstPartSave.php' method='post' id='form1'>
						<!-- Feature 2 -->
							
								<div class="row">
									<div class="6u">
										<section>
<?php if(isset($_GET['type'])&&!empty($_GET['type'])&&!empty($_GET['cv_name'])&&isset($_GET['cv_name'])) 
    {
      
          $type=filter_input(INPUT_GET,'type');
          $_SESSION['cv_name']=  filter_input(INPUT_GET, 'cv_name');
          $_SESSION['type']=$type;
            switch($type)
            {
                case '2':
                    echo "<input type=hidden value=".$type." name=type>";
                        try{
                            $sql=$db->prepare("SELECT `id_cv_questions`,`cv_question` FROM `cv_questions` WHERE `id_cv_type`=:type AND id_cv_questions>0 AND id_cv_questions<=5;");
                            $sql->bindParam(':type',$type,PDO::PARAM_STR);           
                            $sql->execute();
                    
                            $steuc=1;
                            while($result=$sql->fetch(PDO::FETCH_ASSOC))
                            {
                                switch ($result['cv_question'])
                                {
                                    default:
                                        echo "<label>".ucfirst($result['cv_question'])."</label>";
                                        echo "<input type='text' name='".ucfirst($result['cv_question'])."' placeholder='Enter text here'/>";
                                        break;
                                    case 'email'  :
                                        echo "<label>".ucfirst($result['cv_question'])."</label>";
                                        echo "<input type='email' name='".ucfirst($result['cv_question'])."' placeholder='Enter text here'/>";
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
                            $sql=$db->prepare("SELECT `id_cv_questions`,`cv_question` FROM `cv_questions` WHERE `id_cv_type`=:type AND id_cv_questions>22 AND id_cv_questions<=27;");
                            $sql->bindParam(':type',$type,PDO::PARAM_STR);           
                            $sql->execute();
                    
                            $steuc=1;
                            while($result=$sql->fetch(PDO::FETCH_ASSOC))
                            {
                                switch ($result['cv_question'])
                                {
                                    default:
                                        echo "<label>".ucfirst($result['cv_question'])."</label>";
                                        echo "<input type='text' name='".ucfirst($result['cv_question'])."' placeholder='Enter text here'/>";
                                        break;
                                    case 'email'  :
                                        echo "<label>".ucfirst($result['cv_question'])."</label>";
                                        echo "<input type='email' name='".ucfirst($result['cv_question'])."' placeholder='Enter text here'/>";
                                        break;
                                    case 'birth date':
                                
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
 if(isset($_GET['type'])&&!empty($_GET['type'])&&!empty($_GET['cv_name'])&&isset($_GET['cv_name'])) 
 {
     
    $type=filter_input(INPUT_GET,'type');
        
    switch ($type)
    {
        case '2':
            try{
            $sql2=$db->prepare("SELECT `id_cv_questions`,`cv_question` FROM `cv_questions` WHERE `id_cv_type`=:type AND id_cv_questions>5 AND id_cv_questions<=11;");
                $sql2->bindParam(':type',$type,PDO::PARAM_STR);           
                $sql2->execute();
                    $steuc=1;
                    while($result2=$sql2->fetch(PDO::FETCH_ASSOC))
                    {
                         switch ($result2['cv_question'])
                            {
                            
                            case 'work experience':
                                    //echo "<label>".ucfirst($result2['cv_question'])."</label>";
                                    //echo "<textarea form='form1' name='".$result2['cv_question']."' placeholder='Enter text here'></textarea>";
                            break;
                            case 'gender':
                                echo "<label>".ucfirst($result2['cv_question'])."</label>";
                            echo '<input type="radio" name="Sex" value="Male" checked required="">Male
                                  <input type="radio" name="Sex" value="Female">Female';
                            break;    
                            default:
                                    echo "<label>".ucfirst($result2['cv_question'])."</label>";
                                    echo "<input type='text' name='".ucfirst($result2['cv_question'])."'  placeholder='Enter text here'>";
                            break;
                              case 'birth date':
                                        echo "<label>".ucfirst($result2['cv_question'])."</label>";
                                        echo "<input type='text' name='".ucfirst($result2['cv_question'])."'  placeholder='Enter text here' id='datepicker'>";
                                    break;  
                                
                            }
               
                           
                    }
            }catch (PDOException $e)
                    {
                        
                        echo "i cant add.<br/>".$e->getMessage();
                    }
            break;
        case '1':
            try{
             $sql2=$db->prepare("SELECT `id_cv_questions`,`cv_question` FROM `cv_questions` WHERE `id_cv_type`=:type AND id_cv_questions>27 AND id_cv_questions<=32;");
                $sql2->bindParam(':type',$type,PDO::PARAM_STR);           
                $sql2->execute();
                    $steuc=1;
                    while($result2=$sql2->fetch(PDO::FETCH_ASSOC))
                    {
                         switch ($result2['cv_question'])
                            {
                            
                            case 'work experience':
                                    //echo "<label>".ucfirst($result2['cv_question'])."</label>";
                                    //echo "<textarea form='form1' name='".$result2['cv_question']."' placeholder='Enter text here'></textarea>";
                            break;
                            case 'gender':
                                echo "<label>".ucfirst($result2['cv_question'])."</label>";
                            echo '<input type="radio" name="Sex" value="Male" checked required="">Male
                                  <input type="radio" name="Sex" value="Female">Female';
                            break;    
                            default:
                                    echo "<label>".ucfirst($result2['cv_question'])."</label>";
                                    echo "<input type='text' name='".ucfirst($result2['cv_question'])."'  placeholder='Enter text here'>";
                            break;
                              case 'birth date':
                                        echo "<label>".ucfirst($result2['cv_question'])."</label>";
                                        echo "<input type='text' name='".ucfirst($result2['cv_question'])."'  placeholder='Enter text here' id='datepicker'>";
                                    break;  
                                
                            }
               
                           
                    }
            }catch (PDOException $e)
                    {
                        
                        echo "i cant add.<br/>".$e->getMessage();
                    }
            break;
        
        default :
            break;
        
        
    }
		
 }
?>
										<input type='submit' Value='Submit' ></section>
									</div>
								</div>
					
                                
                               
                               </form> </div>
                                </div>
   
<?php include 'footer.php' ?>