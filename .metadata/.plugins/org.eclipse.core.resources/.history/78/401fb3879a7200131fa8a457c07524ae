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

<p><strong>Applicant Information:</strong>

<p>First Name <input type="text" size="20" id="firstname" name="firstname" 
value="<?php echo($_POST['firstname']); ?>">

Last Name <input type="text" size="20" id="lastname" name="lastname" 
value="<?php echo($_POST['lastname']); ?>">

<p>Applying for <select id="futuregrade" name="futuregrade"><?php 

$grades = array("6th", "7th", "8th", "9th", "10th", "11th", "12th");
foreach ($grades as $grade) {
	echo "<option value'" . $grade . "' ";
	if ($grade == $_POST['futuregrade']){
		echo(SELECTED);
	}
	echo ">" . $grade . "</option>";
}
?>
</select> grade.

<p><strong>Parent Statement:</strong>

<p>In an effort to get to know your family and your desire for a new school environment, please
articulate how the applicant reflects Woodlawn School's mission and philosophies:

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
include('parentStatementFooter.html');
?>

</form>