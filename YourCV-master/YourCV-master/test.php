<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker - Display month &amp; year menus</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
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
</head>
<body>
 <?php $date='2015-05-19';
 $datum=date("d.m.y",strtotime($date));
        echo $datum ;
         
         ?>
<p>Date: <input type="text" id="datepicker"></p>
 
 
</body>
</html>