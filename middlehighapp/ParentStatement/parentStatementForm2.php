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
 *
 */

$datetime = date('M-d-Y-g-i-a-e');
?>
<p>Your statement is being processed... Please wait!</p>

<form method="POST" id="parentStatementForm2" name="parentStatementForm2"
action="http://us.1.p10.webhosting.yahoo.com/forms?login=dwayneb">

<?php
if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
<input type="hidden" name="next_url" value="http://localhost/middlehighapp/ParentStatement/parentStatementThankYou.php">
<?php } else { ?>
<input type="hidden" name="next_url" value="http://www.woodlawnschool.org/application/parent_statement/parentStatementThankYou.php">
<?php } ?>

<input type="hidden" name="time_date" value="<?php echo($datetime);?>">

<?php 
include_once("parentStatementEdit.php");
?>

<input type="hidden" type="text" size="20" id="firstname" name="firstname"
value="<?php echo($_POST['firstname']); ?>">

<input type="hidden" type="text" size="20" id="lastname" name="lastname"
value="<?php echo($_POST['lastname']); ?>">

<select style="display:none;" id="futuregrade" name="futuregrade"><?php

$grades = array("Select", "Kindergarten", "1st grade", "2nd grade", "3rd grade", "4th grade", "5th grade", "6th grade", "7th grade", "8th grade", "9th grade", "10th grade", "11th grade", "12th grade");
foreach ($grades as $grade) {
        echo "<option value'" . $grade . "' ";
        if ($grade == $_POST['futuregrade']){
                echo(SELECTED);
        }
        echo ">" . $grade . "</option>";
}
?>
</select>

<textarea style="display:none;" id="parentResponse" name="parentResponse" rows="30" cols="80" ><?php
if(isset($_POST['parentResponse'])) {
        echo ($_POST['parentResponse']);
}
?></textarea>


<button style="display:none;" type="submit" value="_form_submit" name="_form_submit">Submit Application </button>
<button style="display:none;" type="reset" value="Clear" name="Clear All">Clear Application</button>

</form>

<?php 
include("../applicationFooter.html")
?>

<script type="text/javascript">
document.parentStatementForm2.submit();
</script>
