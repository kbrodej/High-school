<?php include('header.php') ?>
<style>
      .progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; height: 2px;}
        .bar { background-color: #B4F5B4; width:0%; height:2px; border-radius: 3px; }
        .percent { position:absolute; display:inline-block; top:3px; left:48%; }
        #status{margin-top: 30px;}
    </style>
    
<div id="tooplate_middle">
<link href="https://rawgithub.com/hayageek/jquery-upload-file/master/css/uploadfile.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://rawgithub.com/hayageek/jquery-upload-file/master/js/jquery.uploadfile.min.js"></script>
    <div id="mid_left">
        <table style="display: table" id="tableHolder">
            <tr>
                <td>    
                    <div id="mid_title">Naloži</div>

                </td>
                <td>
                    <div id="mid_title">Import</div>
                </td>
            </tr>
            <tr>
                <td>

                    <form action="Upload_script.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" id="form2" >

                        <input style="" type="file" name="fileToUpload" id="fileToUpload">  
                        <input style="width: 100px; padding: 10px; margin-left: 40%;" type="submit"  value="Naloži" name="submit"> 
                    </form>
                    <div class="progress">
                    <div class="bar"></div >
                    <div class="percent">0%</div >        
                    <div id="status"></div>    
                    
                </td>
                <td>
                    <form action="import.php" method="post" enctype="multipart/form-data" id="myForm">
                        Import predmet <input id="predmet" type="radio" value="predmet" name="choice"required=""/>
                        Import dijak <input type="radio" value="dijak" name="choice" checked=""/>
                        Import ocene <input type="radio" value="ocene" name="choice"/>
                        Import all <input type="radio" value="all" name="choice" /> <br/>
                        <input style="margin-left: 0%"  type="submit"  value="Naloži" name="submit"> 
                    </form>
                </td>
            </tr>
        </table>

        <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>    
        <script language="javascript" type="text/javascript">
            window.top.window.stopUpload()<?php echo $result; ?>);
        </script>  
        


        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        
        <script type="text/javascript">

            $("#myForm").submit(function ()
            {
                var data = $("#myForm :input").serializeArray();

                $.post($("#myForm").attr("action"), data, function (info) {
                    alert(info);
                    
                });

                $("#myForm").find("input[type=radio]").val("");
                
                
                document.getElementById("myForm").reset();
                
                return false;
                
            });
            
        </script>
       
       
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script>
        (function() {
 
            var bar = $('.bar');
            var percent = $('.percent');
            var status = $('#status');
 
            $('form').ajaxForm({
                beforeSend: function() {
                    status.empty();
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                success: function() {
                    var percentVal = '100%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                complete: function(xhr) {
                    status.html(xhr.responseText);
                }
            });
        })();
    </script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-43091346-1', 'devzone.co.in');
  ga('send', 'pageview');
 
</script>


    </div>

    <div class="cleaner"></div>
</div> 


<!-- end of tooplate_middle -->


<div>




</div> 






<?php include ("footer.php"); ?>
</body>
</html>