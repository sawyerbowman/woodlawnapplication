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
<form method="POST" id="applicantStatementForm2" name="applicantStatementForm2"
action="http://us.1.p10.webhosting.yahoo.com/forms?login=dwayneb">
<input type="hidden" name="next_url" value="http://www.woodlawnschool.org/application/applican_statement/applicantStatementThankYou.php">
<input type="hidden" name="time_date" value="<?php echo($datetime);?>">

<?php 
include_once("applicantStatementEdit.php");
?>

<p><strong>Student Statement:</strong>

<p>Please craft an authentic response to this writing prompt. We look forward to your personal story.

<br><br>

Tell us a story that reveals something important about who you are. It can be humorous or serious, but it should capture a specific moment in your life.
<br /> <textarea id="applicantResponse" name="applicantResponse" rows="30" cols="80" ><?php 
if(isset($_POST['applicantResponse'])) {
	echo ($_POST['applicantResponse']); 
}
?></textarea>

<br><br><br>

<button type="submit" value="_form_submit" name="_form_submit">Submit Application </button>
<button type="reset" value="Clear" name="Clear All">Clear Application</button>

<?php 
include('applicantStatementFooter.html');
?>

</form>

<script type="text/javascript">
document.applicantStatementForm2.submit();
</script>
