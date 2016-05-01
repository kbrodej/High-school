<?php include 'restricted_check.php' ?>
<?php include 'mainpage_header.php' ?>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  .toggler { width: 500px; height: 200px; }
  #button { padding: .5em 1em; text-decoration: none; }
  #effect { width: 240px; height: 135px; padding: 0.4em; position: relative; }
  #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
  </style>
  <script>
  $(function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();
 
      // most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 100 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 280, height: 185 } };
      }
 
      // run the effect
      $( "#effect" ).show( selectedEffect, options, 500, callback );
    };
 
    //callback function to bring a hidden box back
    function callback() {
      setTimeout(function() {
        $( "#effect:visible" ).removeAttr( "style" ).fadeOut();
      }, 1000 );
    };
 
    // set effect from select menu value
    $( "#button" ).click(function() {
      runEffect();
    });
 
    $( "#effect" ).hide();
  });
  </script>
  <section class="container box feature22">
        <div class="row">
          <?php 
          if(isset($_SESSION['type'])&&!empty($_SESSION['type'])&&isset($_SESSION['question_steuc'])&&!empty($_SESSION['question_steuc']))
          {
              switch ($_SESSION['type'])
              {
                  case "student":
                      include ('database.php');
                      echo "<form action='' method='post' name='cv_creation2' id='form1' class='2'>";
                      echo "<table class='default' width='100%'>";
                      echo "<tr>";
                        echo "<th colspan='2'>Understanding"."</th>";
                        echo "<th colspan='2'>Speaking"."</th>";
                        echo "<th>Writing"."</th>";
                        echo "</tr>";
                      echo "<tr>";
                      $steuc=$_SESSION['question_steuc'];
                      $result=  mysql_query("SELECT * FROM `cv_questions` as cq INNER JOIN cv_type as ct on cq.id_cv_type=ct.id_cv_type WHERE cv_type='student' AND `id_cv_question`>'$steuc'");
                      //query for questions 
                      while($row=  mysql_fetch_array($result))
                      {
                          switch ($row['cv_question'])
                          {
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
                      }
                      
                      
                      
                      
                      
                      echo "<td>"."</td>";
                        echo "<td>"."</td>";
                        echo "<td>"."</td>";
                        echo "<td>"."</td>";
                        echo "<td>"."</td>";
                      echo "</tr>";
                      echo "<tr>";
                        echo "<td colspan='5'>"."</td>";
                      echo "</tr>";
                      echo "<tr>";
                        echo "<td>"."</td>";
                        echo "<td>"."</td>";
                        echo "<td>"."</td>";
                        echo "<td>"."</td>";
                        echo "<td>"."</td>";
                      echo "</tr>";
                      echo "<tr>";
                        echo "<td colspan='5'>"."</td>";
                      echo "</tr>";
                      echo "</table>";
                      
                      
                      
                    
                     
                      
                      
                      
                      
                      
                      
                      break;
                  case "employed":
                      
                      break;
              }
          }
          else
          {
              echo "lalal";
          }
          
          
          ?>
 

        </div>
<button id="button" class="button medium alt icon fa-info-circle"></button>
<br/>



<div class="toggler">
  <div id="effect" class="ui-widget-content ui-corner-all">
    <h3 class="ui-widget-header ui-corner-all">Show</h3>
    <p>
     
    </p>
  </div>
</div>
 
    <select name="effects" id="effectTypes" hidden="">
  <option value="slide" selected="">Slide</option>
</select>

</section>

<?php include 'footer.php'; ?>