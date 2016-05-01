<?php include 'header.php' ?>
<script type="text/javascript" src="js/checkPasswords.js"></script>
<br/>
<center>

    <form action="lost_password_verify.php" method="post">
        <label class="label1">Email</label><input type="email" name="email" required="" placeholder="John@yourcv.eu" style="width: 20%;" autofocus>
        <label class="label1">Security answer</label><input type="text" name="sec_answer" required="" placeholder="Juliete" style="width: 20%;" autofocus>
<label class="label1">New Password:</label> <input type="password" name="password1" required='' placeholder="********" id="pass1" onclick="passStr(); return false;" onload="passStr(); return false;" onkeyup="passStr(); return false;" style="width: 20%;"  /><span id="strength" class="confirmMessage" ></span><br/>
            <label class="label1">Retype password:</label> <input type="password" name="password2" required='' placeholder="Same as before" id="pass2" onkeyup="checkPass(); return false;" onclick="passStr(); return false;" style="width: 20%;" /><span id="confirmMessage" class="confirmMessage"></span><br/>
                <input type="submit" value="Submit">
                <br/>
                
    </form>

    </center>
<?php include 'footer.php' ?>