<?php include 'header.php'; ?>

<center>
<br/>
<br/>
<div class="6u">
										
                                                                            
	<h2><?php if(isset($_SESSION['error']))
                  {
                        switch ($_SESSION['error'])
                        {
                            case 1:
                                echo "Please verify your email";
                                break;
                            case 2:
                                echo "Incorrect password or account does not exists";
                                break;
                            case 3:
                                echo "Input fields are not filled";
                                break;
                            case 4:
                                echo "Password Incorrect";
                                break;
                            
                            default :
                                echo "neki ne dela";
                        }
                    }
            ?>


</h2>
    <h3><a href='login.php' class="button medium icon fa-arrow-circle-right"> Click to Retry</a></h3>										
											
										
</center>

<br/>
<br/>
<br/>

<?php include 'footer.php' ?>