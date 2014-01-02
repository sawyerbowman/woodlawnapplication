<?php
/*
 * Copyright 2013 by Sawyer Bowman and Dwayne Bowman. This program is 
 * made originally for Woodlawn School, a nonprofit private school in
 * Davidson, NC. It comes with absolutely no warranty.  You can redistribute 
 * and/or modify it under the terms of the GNU Public License as published
 * by the Free Software Foundation (see <http://www.gnu.org/licenses/).
*/

/*
 *  a form for a new parent's personal statement for middle or high school at Woodlawn School
 *	@Sawyer Bowman
 *	@version 12/28/2013
 */

$datetime = date('M-d-Y-g-i-a-e');
?>
<form method="POST" id="parentStatement" name="parentStatement">
<input type="hidden" name="time_date" value="<?php echo($datetime);?>">

<?php 
include_once("parentStatementEdit.php");
?>

<p align="center"><span style="font-family: verdana,arial,helvetica; color: #336633; font-size: 12pt"><strong>Parent Statement Form</strong></span></p>
<fieldset>
        <legend><span style="color: green;">Applicant Info</span></legend>
                <table>
                        <tr><td>First Name</td> <td><input type="text" size="20"
                        id="firstname" name="firstname" value="<?php echo($_POST['firstname']); ?>"></td><td width="10"></td>
                        <td>Last Name</td> <td><input type="text" size="20"
                        id="lastname" name="lastname" value="<?php echo($_POST['lastname']); ?>"></td></tr>
                </table>
<table>
<tr><td>Applying for <select id="futuregrade" name="futuregrade"><?php

$grades = array("Kindergarten", "1st grade", "2nd grade", "3rd grade", "4th grade", "5th grade", "6th grade", "7th grade", "8th grade", "9th grade", "10th grade", "11th grade", "12th grade");
foreach ($grades as $grade) {
        echo "<option value'" . $grade . "' ";
        if ($grade == $_POST['futuregrade']){
                echo(SELECTED);
        }
        echo ">" . $grade . "</option>";
}
?>
</select></td></tr></table>
</fieldset>

<p>In an effort to get to know your family and your desire for a new school environment, please
articulate how the applicant reflects Woodlawn School's mission and philosophies.

<br><br>

Our Mission: To produce independent lifelong learners who are responsible contributing members 
of a diverse global society.
<br /> <textarea id="parentResponse" name="parentResponse" rows="30" cols="80" ><?php 
if(isset($_POST['parentResponse'])) {
	echo ($_POST['parentResponse']); 
}
?></textarea>

<br><br><br>

<button type="submit" value="_form_submit" name="_form_submit">Submit Application </button>
<button type="reset" value="Clear" name="Clear All">Clear Application</button>

<?php 
include('../applicationFooter.html');
?>

</form>
