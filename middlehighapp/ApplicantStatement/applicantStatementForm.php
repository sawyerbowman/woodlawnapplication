<?php
/*
 * Copyright 2013 by Sawyer Bowman and Dwayne Bowman. This program is 
 * made originally for Woodlawn School, a nonprofit private school in
 * Davidson, NC. It comes with absolutely no warranty.  You can redistribute 
 * and/or modify it under the terms of the GNU Public License as published
 * by the Free Software Foundation (see <http://www.gnu.org/licenses/).
*/

/*
 *  a form for a new applicant's personal statement for middle or high school at Woodlawn School
 *	@Sawyer Bowman
 *	@version 12/28/2013
 */

$datetime = date('M-d-Y-g-i-a-e');
?>
<form method="POST" id="applicantStatement" name="applicantStatement">
<input type="hidden" name="time_date" value="<?php echo($datetime);?>">

<?php 
include_once("applicantStatementEdit.php");
?>
<p align="center"><span style="font-family: verdana,arial,helvetica; color: #336633; font-size: 12pt"><strong>Student Statement Form</strong></span><br>(for middle and upper school applicants only)</p>
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

$grades = array("6th", "7th", "8th", "9th", "10th", "11th", "12th");
foreach ($grades as $grade) {
	echo "<option value'" . $grade . "' ";
	if ($grade == $_POST['futuregrade']){
		echo(SELECTED);
	}
	echo ">" . $grade . "</option>";
}
?>
</select> grade.</td></tr></table>
</fieldset>

<p>Please craft an authentic response to this writing prompt. We look forward to your<br>
personal story.

<br><br>

Tell us a story that reveals something important about who you are. It can be humorous <br>
or serious, but it should capture a specific moment in your life.
<br /><textarea id="applicantResponse" name="applicantResponse" rows="30" cols="80" ><?php 
if(isset($_POST['applicantResponse'])) {
	echo ($_POST['applicantResponse']); 
}
?>
</textarea>

<br><br><br>

<button type="submit" value="_form_submit" name="_form_submit">Submit Application </button>
<button type="reset" value="Clear" name="Clear All">Clear Application</button>

<?php 
include('../applicationFooter.html');
?>

</form>
