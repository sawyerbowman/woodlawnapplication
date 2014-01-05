<?php
/*
 * Copyright 2013 by Sawyer Bowman and Dwayne Bowman. This program is 
 * made originally for Woodlawn School, a nonprofit private school in
 * Davidson, NC. It comes with absolutely no warranty.  You can redistribute 
 * and/or modify it under the terms of the GNU Public License as published
 * by the Free Software Foundation (see <http://www.gnu.org/licenses/).
*/

/*
 *  a form for a teacher's recommendation
 *	@Sawyer Bowman
 *	@version 12/28/2013
 */

$datetime = date('M-d-Y-g-i-a-e');
?>
<form method="POST" id="teacherRecommendation" name="teacherRecommendation">
<input type="hidden" name="time_date" value="<?php echo($datetime);?>">

<?php 
include_once("teacherRecommendEdit.php");
?>

<p align="center"><span style="font-family: verdana,arial,helvetica; color: #336633; font-size: 12pt"><strong>Teacher Recommendation Form</strong></span></p>
<fieldset>
        <legend><span style="color: green;">Applicant Info</span></legend>
                <table>
                        <tr><td>First Name</td> <td><input type="text" size="20"
                        id="firstname" name="firstname" value="<?php echo($_POST['firstname']); ?>"></td><td width="10"></td>
                        <td>Last Name</td> <td><input type="text" size="20"
                        id="lastname" name="lastname" value="<?php echo($_POST['lastname']); ?>"></td></tr>
                </table>
</fieldset>

<p>
Name of Teacher completing this form <input type="text" size="30" id="teachername" name="teachername" value="<?php echo($_POST['teachername']); ?>"> <br><br>
Curriculum or Text(s) used <input type="text" size="30" id="curriculum" name="curriculum" value="<?php echo($_POST['curriculum']); ?>"> &nbsp;&nbsp;&nbsp;&nbsp;
Grade <select id="curgrade" name="curgrade"><?php
$grades = array("Select", "Kindergarten", "1st grade", "2nd grade", "3rd grade", "4th grade", "5th grade", "6th grade", "7th grade", "8th grade", "9th grade", "10th grade", "11th grade", "12th grade");
foreach ($grades as $grade) {
        echo "<option value'" . $grade . "' ";
        if ($grade == $_POST['curgrade']){
                echo(SELECTED);
        }
        echo ">" . $grade . "</option>";
}
?>
</select><br><br>
School <input type="text" size="30" id="school" name="school" value="<?php echo($_POST['school']); ?>"> &nbsp;&nbsp;&nbsp;&nbsp;
Phone <input type="text" size="30" id="phone" name="phone" value="<?php echo($_POST['phone']); ?>">
</p>

<table><tr>
<td>Student Qualities</td>
<td width="20" align="center">Excellent</td>
<td width="20" align="center">Good</td>
<td width="20" align="center">Average</td>
<td width="20" align="center">Fair</td>
<td width="20" align="center">Poor</td></tr>
<tr>
<td>Work Habits</td>
<td><input <?php if(!(strcmp($_POST['workhabits'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="workhabits" id="excellent" value="excellent"></td>
<td><input <?php if(!(strcmp($_POST['workhabits'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="workhabits" id="good" value="good"></td>
<td><input <?php if(!(strcmp($_POST['workhabits'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="workhabits" id="average" value="average"></td>
<td><input <?php if(!(strcmp($_POST['workhabits'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="workhabits" id="fair" value="fair"></td>
<td><input <?php if(!(strcmp($_POST['workhabits'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="workhabits" id="poor" value="poor"></td></tr>
</table>

<button type="submit" value="_form_submit" name="_form_submit">Submit Recommendations </button>
<button type="reset" value="Clear" name="Clear All">Clear Form</button>

<?php 
include('../applicationFooter.html');
?>

</form>
