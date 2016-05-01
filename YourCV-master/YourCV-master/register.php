<?php include 'header.php' ?>
<script type="text/javascript" src="js/checkPasswords.js"></script>
<div id='main-wrapper'>        
    <center>
        <form action="user_insert.php" method="post" class="form2">
            <label>Name:</label> <input type="text" name="name" required='' placeholder="John" /><br/>
            <label>Surname:</label> <input type="text" name="surname" required='' placeholder="Smith"/><br/>
            <label>Password:</label> <input type="password" name="password1" required='' placeholder="********" id="pass1" onkeyup="passStr(); return false;"/><span id="strength" class="confirmMessage"></span><br/>
            <label>Retype password:</label> <input type="password" name="password2" required='' placeholder="Same as before" id="pass2" onkeyup="checkPass(); return false;"/><span id="confirmMessage" class="confirmMessage"></span><br/>
            <label>Email:</label> <input type="email" name="email" placeholder="john@yourcv.eu"/><br/>
            <label>Birth Date:</label> <input type="text" name="bday" id="datepicker" placeholder="Choose date"/>  <br/>
            <!--Gets countries and gender from db -->
            <?php
           
            include('database.php');
            
           /***********
            **country**
            ***********/
            $stmt_c="SELECT id_country,country_name FROM `country` ORDER BY `country`.`country_name` ASC;";
            $result_country=$db->query($stmt_c);
           // $result_country = mysqli_query("SELECT id_country,country_name FROM `country` ORDER BY `country`.`country_name` ASC;");

            echo '<label><span>Country :</span></label>';
            echo '<select name="country" class="form-title">'; // opens dropdown
            echo  '<option value="666">'.'Chose country...'.'</option>';
            while ($row=$result_country->fetch(PDO::FETCH_ASSOC)) //fetches array with id_country and country_name by Alphabetical order
            {
                echo '<option value="'.$row['id_country'].'">'.$row['country_name'].'</option>'; //feeds queries to options
            }
            echo '</select><br/>';//closes dropdown
            
            /***********
            ***gender***
            ************/
            
            
           // $result_gender = mysqli_query("SELECT `id_gender`,`gender_type` FROM `gender`;");

            echo '<label><span>Gender :</span></label>';
            echo '<input type="radio" name="sex" value="1" checked required="">Male
            <br>
                <input type="radio" name="sex" value="2">Female';
            echo '<br/>'; //closes dropdown
            //randomizacija security questiona z funkcijo rand
            
            
            //upper rand limit
            $stmt_rand="SELECT COUNT(`id_security_question`) as Num FROM `security_question` WHERE 1";
            $rez_ran=$db->query($stmt_rand);
            while($row2=$rez_ran->fetch(PDO::FETCH_ASSOC))
            {
                $max=$row2['Num'];
                
            }
            srand((double)microtime()*1000000);
            
            
            $rand=  rand(1, $max);
           
            //izpis security questiona 
            
          
            $stmt_sq="SELECT `id_security_question`, `sec_question` FROM `security_question` WHERE id_security_question=$rand";
            $result_sq=$db->query($stmt_sq);
            
            while($row=$result_sq->fetch(PDO::FETCH_ASSOC))
            {
                echo "<label>".$row['sec_question']."</label> "."<input type='text' name='sec_answer' required='' placeholder='Enter your answer here'><br/>";
                echo "<input type='hidden' name='id_sec_q' value='".$row['id_security_question'] ."'>.";

            }
            
      
        
              
            
            
            
            ?>
            <input type="submit" value="register" onclick="return passLength(this);"/><br/>
            
            
        </form>
            </div>
<?php include 'footer.php' ?>