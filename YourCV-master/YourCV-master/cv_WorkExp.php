<?php include 'header.php';
include 'restricted_check.php';
?>  
<div class="wrapper style2" >
    <div class="inner">
        
            <form action='cv_WrokExpSave.php' method='post' id='form1'>
                <label>Job title</label><input type="text" name="job_title"/>
                <label>Company name</label><input type="text" name="company_name"/>
                <label>Start date</label><input type="text" name="start_date" id="date_1" class="datepick" style="width:15%;"/>
                <label>End date</label><i>Type 1 if you did not finished yet</i><input type="text" name="end_date" id="date_2" class="datepick" style="width:15%;"/>
                <input type="submit" value="Submit"/>
            </form>
    </div>
</div>



<br/>






<?php include 'footer.php'?>