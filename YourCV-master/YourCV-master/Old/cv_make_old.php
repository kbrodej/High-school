<?php include 'restricted_check.php' ?>
<?php include 'header.php' ?>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'dd.mm.yy'
    });
  });
  </script>

<section class="container box feature22">
        <div class="row">
            
<?php 

$type=filter_input(INPUT_GET,'type');
$_SESSION['type']=$type;
//if emplyoed or student
switch ($type)
{  
    case "student":
        include('database.php');
       // echo "<div class='6u'>";//div for 2 divs floated next to eachother
       // echo "<section>";
        
        echo "<form action='cv_make_sql.php' method='post' name='cv_creation' id='form1' class='form2'>"; //From opened with id1 will be confirmed with js
        echo "<table class='default' width='100%'>";
        echo "<tr>";
        echo "<td width='30%'>";   
        $result=  mysql_query("SELECT * FROM `cv_questions` as cq INNER JOIN cv_type as ct on cq.id_cv_type=ct.id_cv_type WHERE cv_type='student'");
        //query for questions with type student
        
        while($row=  mysql_fetch_array($result)) //fetch to array with all atributes
        {
            switch ($row['cv_question'])
            {
                case 'email':
                  //  echo $row['cv_question']."To je uz switcha</br>";
                    echo "<p><h3>".$row['cv_question']."<input type='email' name='".$row['cv_question']."'required='required' style='width 25%'/>"."<h3></p>";
                    break;
                case 'birth date':
                    echo "<p><h3>".$row['cv_question']."<input type='text' id='datepicker' name='".$row['cv_question']."'>";//<input type='date' name='".$row['cv_question']."'required='required' style='width 25%'/>"."<h3></p>";
                  break;
                case 'gender':
                    echo "Gender";
                    echo "<br/>";
                    echo "Male: <input type='radio' name='gender' value='male'/>";
                    echo "&nbsp;";
                    echo "Female: <input type='radio' name='gender' value='male'/>";
                    break;
                case 'name':
                    echo "<p><h3>".$row['cv_question']."<input type='text' name='".$row['cv_question']."'required='required' style='width 25%'/>"."<h3></p>";
                    break;
                case 'surname':
                    echo "<p><h3>".$row['cv_question']."<input type='text' name='".$row['cv_question']."'required='required' style='width 25%'/>"."<h3></p>";
                    break;
                case 'adress':
                    echo "<p><h3>".$row['cv_question']."<input type='text' name='".$row['cv_question']."'required='required' style='width 25%'/>"."<h3></p>";
                    break;
                case 'phone':
                    echo "<p><h3>".$row['cv_question']."<input type='text' name='".$row['cv_question']."'required='required' style='width 25%'/>"."<h3></p>";
                    break;
               case 'nationality':
                    echo "<p><h3>".$row['cv_question']."<input type='text' name='".$row['cv_question']."'required='required'/>"."<h3></p>";
                    break;
               
            }
           
        
          //echo name of question
         // echo "<p><h3>".$row['cv_question']."<input type='text' name='".$row['cv_question']."'required='required' style='width 25%'/>"."<h3></p>"; //echo input type with name of Q and its required HTML5
          $steuc=$row['id_cv_question']; //couner for breaking this while and making new for later on
            if($steuc==8)
            {
                $steuc=8; //sets counter to 7 so next time query runs it will run from last id_question
                $_SESSION['question_steuc']=$steuc;
                break;
            }
        }
        
        echo "</td>";
         echo "<td width=30%>";
         echo "</td>";
        
    
        //echo "</section>"; //closing tags
        //echo "</div>";
    
        //echo "<div class='6u'>"; //opening tags yet again to be floated next to upper div
        //echo "<section><p>";
       // echo "<form action='cv_make_sql.php' method='post' name='cv_creation' id='form2'>";//Opens new form with id2 confirmed with js(submitform)
        
       
        echo "<td width='30%'>";         
               
        $result_nadaljuj=  mysql_query("SELECT * FROM `cv_questions` as cq INNER JOIN cv_type as ct on cq.id_cv_type=ct.id_cv_type WHERE cv_type='student' AND `id_cv_question`>'$steuc'");
        while($vrsta=  mysql_fetch_array($result_nadaljuj)) //new query from counter valueand fetch to array
        {   
            switch ($vrsta['cv_question'])
            {
                case 'work experience':
                    echo "<p><h3>".$vrsta['cv_question']."<br/>";
                    echo "<textarea form='form1' name='".$vrsta['cv_question']."' placeholder='Enter text here'></textarea>";
                    break;
                case 'job applied':
                    echo "<p><h3>".$vrsta['cv_question']."<input type='text' name='".$vrsta['cv_question']."'required='required'/>"."<h3></p>";
                    break;
                
                case 'education and training':
                    echo "<p><h3>".$vrsta['cv_question']."<br/>";
                    echo "<textarea form='form1' name='".$vrsta['cv_question']."' placeholder='Enter text here'></textarea>";
                    break;
                case 'qualification awarded':
                    echo "<p><h3>".$vrsta['cv_question']."<br/>";
                    echo "<textarea form='form1' name='".$vrsta['cv_question']."' placeholder='Enter text here'></textarea>";
                    break;
                case 'mother tounge':
                    echo "<p><h3>".$vrsta['cv_question']."<input type='text' name='".$vrsta['cv_question']."'required='required'/>"."<h3></p>";
                    break;
                
            }
            //echo "<p><h3>".$vrsta['cv_question']."<input type='text' name='".$vrsta['cv_question']."'required='required'/>"."<h3></p>";
            
        }
       // echo "</p></section>";
        echo "</td>";
        echo "<tr>";
        echo "<td>";
        echo "</td>";
        echo "<td>";
        echo "<center>";
          echo "<input type='submit' value='Next'/>";
          echo "</center>";
        echo "</td>";
        echo "<td>";
      
        //echo "<inp11ut type='button' value='Click Me!' onclick='submitForms()' />";
        //echo "</div>"; //closing tags
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";
      
        
        
        
        break; 
        
        /*
         * 
         * 
         * Breaking for student
         * 
         * 
         * 
         */

    case "employed": //opening case for employed
        include('database.php');
        $result=  mysql_query("SELECT * FROM `cv_questions` as cq INNER JOIN cv_type as ct on cq.id_cv_type=ct.id_cv_type WHERE cv_type='employed'");
        while($row=  mysql_fetch_array($result))
         {
          echo "<br/>";  
          echo "<h2>".$row['cv_question']."</h2>";  
          echo "<input type='text' name='answer'/>";
          echo "<input type='hidden' value=".$row['id_cv_question']."><br/>";
          
          
        }
        
        
        
        echo "<input type='submit' value='submit'>";
       break;
}




?>

    </div>


<?php include 'footer.php' ?>