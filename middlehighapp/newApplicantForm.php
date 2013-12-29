<?php
/*
 * Copyright 2013 by Sawyer Bowman and Dwayne Bowman. This program is 
 * made originally for Woodlawn School, a nonprofit private school in
 * Davidson, NC. It comes with absolutely no warranty.  You can redistribute 
 * and/or modify it under the terms of the GNU Public License as published
 * by the Free Software Foundation (see <http://www.gnu.org/licenses/).
*/

/*
 *  a form for a new applicant for middle or high school at Woodlawn School
 *	@Sawyer Bowman
 *	@version 12/28/2013
 */
 
include_once("applicantEdit.php");

//Make a new applicant

$today = date('Y-M-d');
$currentday = substr($today, 9, 2);
$currentmonth = substr($today, 5, 3);
$currentyear = substr($today, 0, 4);

echo('<p><strong>Middle and Upper School Admissions Application</strong><br />');
?>

<p>Applying for grade:<span style="font-size:x-small;color:FF0000"></span> <select>
<?php

$grades = array("6th", "7th", "8th", "9th", "10th", "11th", "12th");
foreach ($grades as $grade) {
	echo "<option value'" . $grade . "' ";
	echo ">" . $grade . "</option>";
}

?>
</select>

 in the school year:<span style="font-size:x-small;color:FF0000"></span> <select>
<?php

$nextYear = $currentyear + 1;
$nextYear2 = $nextYear + 1;
$stringyear1 = "$currentyear-$nextYear";
$stringyear2 = "$nextYear-$nextYear2";
$years = array($stringyear1, $stringyear2);
foreach ($years as $year) {
	echo "<option value'" . $year . "' ";
	echo ">" . $year . "</option>";
}

?>
</select>

<fieldset>
	<legend>Applicant Name:</legend>
		<table>
			<tr><td>First<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="30"></td>
			<td>Middle<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="30"></td>
			<td>Last<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="30"></td></tr>
			<tr><td>Preferred Name<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="30"></td></tr>
		</table>
</fieldset>

<br>

<fieldset>
	<legend>Date of Birth:</legend>
		<table>
			<tr><td>Month<span style="font-size:x-small;color:FF0000"></span></td> <td><select>
			<?php 
			$months = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
			foreach($months as $month) {
				echo "<option value'" . $month . "' ";
				echo ">" . $month . "</option>";
			}
			?>
			</select>
			
			<td>Day<span style="font-size:x-small;color:FF0000"></span></td> <td><select>
			<?php 
			$days = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17",
				"18","19","20","21","22","23","24","25","26","27","28","29","30","31");
			foreach($days as $day) {
				echo "<option value'" . $day ."' ";
				echo ">" . $day . "</option>";
			}
			?>
			</select>
			
			<td>Year<span style="font-size:x-small;color:FF0000"></span></td> <td><select>
			<?php 
			$oldyear = $currentyear - 20;
			$years = array($oldyear+1, $oldyear+2, $oldyear+3, $oldyear+4, $oldyear+5, $oldyear+6, $oldyear+7,
							$oldyear+8, $oldyear+9, $oldyear+10);
			foreach($years as $year) {
				echo "<option value'" . $year ."' ";
				echo ">" . $year . "</option>";
			}
			?>
			</select></td></tr>
		</table>
</fieldset>

<br>

<?php 

echo('<input type="checkbox" name="female" value="FEMALE"> Female');
echo('<input type="checkbox" name="male" value="MALE"> Male');

?>

<br><br>

<fieldset>
	<legend>Home Address:</legend>
		<table>
			<tr><td>Street Address<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="40">
			<tr><td>City<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="40">
			<td>State<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="2">
			<td>Zip<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="10"></td></tr>
		</table>
</fieldset>

<p>Present School:<span style="font-size:x-small;color:FF0000"></span><br /><input type="text" size="40">
<p>Current Grade:<span style="font-size:x-small;color:FF0000"></span> <select>
<?php

$grades = array("5th", "6th", "7th", "8th", "9th", "10th", "11th", "12th");
foreach ($grades as $grade) {
	echo "<option value'" . $grade . "' ";
	echo ">" . $grade . "</option>";
}

?>
</select>

<?php 

echo('<input type="checkbox" name="public" value="PUBLIC"> Public');
echo('<input type="checkbox" name="private" value="PRIVATE"> Private');

?>

<p>Please list applicant's favorite activites/areas of study/hobbies:
<br /> <textarea id="notes" name="notes" rows="5" cols="80"></textarea>

<p>Please list any siblings and include their grade and school:
<br /> <textarea id="notes" name="notes" rows="5" cols="80"></textarea>

<p>How did you hear about Woodlawn School?:
<br /> <textarea id="notes" name="notes" rows="5" cols="80"></textarea>
