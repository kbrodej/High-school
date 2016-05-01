<?php include 'restricted_check.php' ?>
<?php include 'header.php' ?>
<script type="text/javascript" src="js/checkPasswords.js"></script>
<br/>
<center>

    <form action="change_password_sql.php" method="post">
        <label class="label1">Current Password</label><input type="password" name="old_password" required="" placeholder="********" style="width: 20%;" autofocus>
<label class="label1">Password:</label> <input type="password" name="password1" required='' placeholder="********" id="pass1" onclick="passStr(); return false;" onload="passStr(); return false;" onkeyup="passStr(); return false;" style="width: 20%;"  /><span id="strength" class="confirmMessage" ></span><br/>
            <label class="label1">Retype password:</label> <input type="password" name="password2" required='' placeholder="Same as before" id="pass2" onkeyup="checkPass(); return false;" onclick="passStr(); return false;" style="width: 20%;" /><span id="confirmMessage" class="confirmMessage"></span><br/>
                <input type="submit" value="Submit">
                <br/>
                
    </form>

    </center>
<br/>
<?php include 'footer.php' ?>