<?php include 'SessionCheck.php';

if(isset($_SESSION['id_user']))
{
    $userId=$_SESSION['id_user']; ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga(‘set’, ‘&uid’, {{<?php echo $userId; ?>}}); // Nastavi User-ID z uporabo niza user_id vpisanega uporabnika.
  ga('create', 'UA-61331066-1', 'auto');
  ga('send', 'pageview');
   // Nastavi User-ID z uporabo niza user_id vpisanega uporabnika.
  
  
  
<?php 
}

  /*
  $userId=$_SESSION['id_user'];
// New Google Analytics code to set User ID.
// $userId is a unique, persistent, and non-personally identifiable string ID.
if (isset($userId)) {
  $gacode = "ga('create', 'UA-XXXX-Y', { 'userId': '%s' });";
  echo sprintf($gacode, $userId);
} else {
  $gacode = "ga('create', 'UA-XXXX-Y');";
  echo sprintf($gacode);
}*/?>




</script>




