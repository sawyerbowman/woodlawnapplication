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
 *<input type="hidden" name="next_url" value="http://www.woodlawnschool.org/application/applicant_statement/applicantStatementThankYou.php">
 */

$datetime = date('M-d-Y-g-i-a-e');
?>

<p>Your statement is being processed... Please wait!</p>

<?php echo ($_SERVER['SERVER_NAME']); ?>

<form method="POST" id="applicantStatementForm2" name="applicantStatementForm2"
action="http://us.1.p10.webhosting.yahoo.com/forms?login=dwayneb">

<?php
if ($_SERVER['SERVER_NAME'] == "localhost") {  ?>
         <input type="hidden" name="next_url" value="http://localhost/middlehighapp/ApplicantStatement/applicantStatementThankYou.php">
<?php } else { ?>
<input type="hidden" name="next_url" value="http://www.woodlawnschool.org/application/applicant_statement/applicantStatementThankYou.php">
<?php } ?>

<input type="hidden" name="time_date" value="<?php echo($datetime);?>">

<?php 
include_once("applicantStatementEdit.php");
?>

<input type="hidden" type="text" size="20" id="firstname" name="firstname"
value="<?php echo($_POST['firstname']); ?>">

<input type="hidden" type="text" size="20" id="lastname" name="lastname"
value="<?php echo($_POST['lastname']); ?>">

<select style="display:none;" id="futuregrade" name="futuregrade"><?php

$grades = array("6th", "7th", "8th", "9th", "10th", "11th", "12th");
foreach ($grades as $grade) {
        echo "<option value'" . $grade . "' ";
        if ($grade == $_POST['futuregrade']){
                echo(SELECTED);
        }
        echo ">" . $grade . "</option>";
}
?>
</select>

<textarea style="display:none;" id="applicantResponse" name="applicantResponse" rows="30" cols="80"><?php
if(isset($_POST['applicantResponse'])) {
        echo ($_POST['applicantResponse']);
}
?>
</textarea>


<button style="display:none;" type="submit" value="_form_submit" name="_form_submit"></button>
<button style="display:none;" type="reset" value="Clear" name="Clear All"></button>

</form>

<?php 
include("../applicationFooter.html")
?>

<script type="text/javascript">
document.applicantStatementForm2.submit();
</script>
