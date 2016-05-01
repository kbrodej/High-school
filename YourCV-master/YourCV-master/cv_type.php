<?php include 'restricted_check.php' ?>
<?php include 'header.php' ?>
<br/>
<center>

    <form action="cv_FirstPart.php" method="get">
        <label class="label1">Give your CV friendly name</label><input type="text" name="cv_name" required="" placeholder="Enter text here" style="width: 20%;">
                <br/>
                <p><i>Questions will vary from one type to another type!</i></p>
                <input type="radio" name="type" value="2" checked required="">Student
                
        <input type="radio" name="type" value="1">Employed
                <br/>
                <input type="submit" value="GO">
                <br/>
                
    </form>

    </center>
<br/>
<?php include 'footer.php' ?>