<?php include 'header.php';
include 'restricted_check.php';
include ('database.php');
include ('functions/getSingleValue.php');
include ('functions/cvQueries.php');
?>  

				<div class="wrapper style1">
					<div class="inner">
				
						<!-- Feature 1 -->
							<section class="container box feature1">
                                                            <div class="row">
									<div class="4u">
										<section>
                                                                                    
												<h5>Choose which CV you want to download</h5>
											
                                                                                    <center>
														   <table id='mainfeed'>
                                                <tr><th>CV</th><th>pdf</th></tr>
                                                <?php
                                                $sql1=$db->prepare("SELECT * FROM `cv` WHERE id_user=:id_user;");
                                                $sql1->bindParam(':id_user',$_SESSION['id_user'],PDO::PARAM_INT);
                                                $sql1->execute();

                                                while($result1=$sql1->fetch(PDO::FETCH_ASSOC))
                                                {
                                                   echo "<tr><td>".ucfirst($result1['name'])."</td><td><a href=pdf_creation.php?cv_id=".$result1['id_cv']."&type=".$result1['id_cv_type'].">".$result1['name'].".pdf"."</td></tr>";
                                                }
                                                
                                                
                                                
                                                
                                                ?>
                                            
                                                                                    </table>
                                                                                </center>
										</section>
									</div>
									<div class="4u">
										<section>
                                                                                    <h5>Choose to which CV you want to add Language</h5>
                                                                                    <center>                                                      
    <table id='mainfeed' style="text-align: center;">
                                                <tr><th style="text-align: center;">CV</th></tr>
                                                <?php
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
										</section>
									</div>
                                                            </div>
                                                        </section>
                                        </div>
                                    </div>
 

<?php include 'footer.php'?>