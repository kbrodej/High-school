<?php include 'header.php'; ?>
<center>
        <form action="login_check.php" method="post">
            <label style="text-align: center;">email: </label><input type="email" name="email" placeholder="john@email.com" required="" />
            <label style="text-align: center;">password: </label><input type="password" name="password" placeholder="♣♣♣♣♣♣♣" required=""/>
            <input type="submit" value="Login"/>
        </form>
    <a href="register.php">Not a user? Register!</a>
</center>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php include 'footer.php'; ?>