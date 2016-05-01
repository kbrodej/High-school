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

                  <div id="multipleupload">Upload</div>
<script>
$("#multipleupload").uploadFile({
url:"upload2.php",
multiple:true,
fileName:"myfile"
});
</script>
                    
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

    <script>
      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'import.php',
            data: $('form').serialize(),
            success: function () {
              $('form').find('input:text, input:password, input:file, select, textarea').val('');
        $('form').find('input:radio, input:checkbox')
             .removeAttr('checked').removeAttr('selected');
             alert('Populated');
            }
          });

        });

      });
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