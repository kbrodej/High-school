<?php include 'header.php';
include 'restricted_check.php';
?>  
<div class="wrapper style2" >
    <div class="inner">
        
            <form action='cv_EduTrainingSave.php' method='post' id='form1'>
                <label>Course name</label><input type="text" name="course_name"/>
                <label>Institution name</label><input type="text" name="institution_name"/>
                <label>Qualification awarded</label><input type="text" name="quafilication_awarded"/>
                <label>Start date</label><input type="text" name="start_date" id="date_1" class="datepick" style="width:15%;"/>
                <label>End date</label><i>Type 1 if you did not finished yet</i><input type="text" name="end_date" id="date_2" class="datepick" style="width:15%;" placeholde='type 1 if you did not finished yet'/>
                <input type="submit" value="Submit"/>
            </form>
    </div>
</div>
<br/>

<br/>







<?php include 'footer.php'?>