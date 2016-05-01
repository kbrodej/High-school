<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="http://hayageek.github.io/jQuery-Upload-File/uploadfile.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://hayageek.github.io/jQuery-Upload-File/jquery.uploadfile.min.js"></script>
    </head>
    <body>
        <div id="fileuploader">Upload</div>
        <script>
$(document).ready(function()
{
	$("#fileuploader").uploadFile({
	url:"upload2.php",
	fileName:"myfile"
	});
});
</script>
        <?php
        // put your code here
        ?>
    </body>
</html>
