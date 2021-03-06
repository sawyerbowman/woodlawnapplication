<?php
/*
 * Copyright 2013 by Sawyer Bowman and Dwayne Bowman. This program is 
 * made originally for Woodlawn School, a nonprofit private school in
 * Davidson, NC. It comes with absolutely no warranty.  You can redistribute 
 * and/or modify it under the terms of the GNU Public License as published
 * by the Free Software Foundation (see <http://www.gnu.org/licenses/).
*/

/*
 *  a form for a new parent's personal statement for an at Woodlawn School
 *	@Sawyer Bowman
 *	@version 12/28/2013
 *
 */

$datetime = date('M-d-Y-g-i-a-e');
?>
<p>Your recommendations are being processed... Please wait!</p>

<form method="POST" id="recommendForm2" name="recommendForm2"
action="http://us.1.p10.webhosting.yahoo.com/forms?login=dwayneb">

<?php
if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
<input type="hidden" name="next_url" value="http://localhost/middlehighapp/Recommendations/recommendThankYou.php">
<?php } else { ?>
<input type="hidden" name="next_url" value="http://www.woodlawnschool.org/application/recommendations/recommendThankYou.php">
<?php } ?>

<input type="hidden" name="time_date" value="<?php echo($datetime);?>">

<?php 
include_once("recommendEdit.php");
?>

<input type="hidden" type="text" size="20"
                        id="firstname" name="firstname" value="<?php echo($_POST['firstname']); ?>">
                        <input type="hidden" type="text" size="20"
                        id="lastname" name="lastname" value="<?php echo($_POST['lastname']); ?>">

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


<input type="hidden" type="text" size="30" id="teacher1name" name="teacher1name" value="<?php echo($_POST['teacher1name']); ?>"> 
<input type="hidden" type="text" size="30" id="teacher1email" name="teacher1email" value="<?php echo($_POST['teacher1email']); ?>">

<input type="hidden" type="text" size="30" id="teacher2name" name="teacher2name" value="<?php echo($_POST['teacher2name']); ?>"> 
<input type="hidden" type="text" size="30" id="teacher2email" name="teacher2email" value="<?php echo($_POST['teacher2email']); ?>">


<button style="display:none;" type="submit" value="_form_submit" name="_form_submit"></button>
<button style="display:none;" type="reset" value="Clear" name="Clear All"></button>

</form>

<?php 
include("../applicationFooter.html")
?>

<script type="text/javascript">
document.recommendForm2.submit();
</script>
