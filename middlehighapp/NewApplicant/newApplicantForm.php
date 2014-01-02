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

$datetime = date('M-d-Y-g-i-a-e');
?>
<form method="POST" id="newApplicantForm" name="newApplicantForm">
<input type="hidden" name="time_date" value="<?php echo($datetime);?>">

<?php
 
include_once("newApplicantEdit.php");

//Make a new applicant

$today = date('Y-M-d');
$currentday = substr($today, 9, 2);
$currentmonth = substr($today, 5, 3);
$currentyear = substr($today, 0, 4);
?>

<p align="center"><span style="font-family: verdana,arial,helvetica; color: #336633; font-size: 12pt"><strong>Applicant Information</strong></span></p>

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
</select>

grade in the school year <select id="schoolyear" name="schoolyear">
<?php

$nextYear = $currentyear + 1;
$nextYear2 = $nextYear + 1;
$stringyear1 = "$currentyear-$nextYear";
$stringyear2 = "$nextYear-$nextYear2";
$years = array($stringyear1, $stringyear2);
foreach ($years as $year) {
	echo "<option value'" . $year . "' ";
	if ($year == $_POST['schoolyear']){
		echo(SELECTED);
	}
	echo ">" . $year . "</option>";
}

?>
</select>

<fieldset>
	<legend><span style="font-family: verdana,arial,helvetica; color: #336633;">Applicant</span></legend>
		<table>
			<tr><td>First</td> <td><input type="text" size="15"
			id="firstname" name="firstname" value="<?php echo($_POST['firstname']); ?>"></td><td width="5"></td>
			<td>Middle</td> <td><input type="text" size="15"
			id="middle_name" name="middlename" value="<?php echo($_POST['middlename']); ?>"></td><td width="5"></td>
			<td>Last</td> <td><input type="text" size="15"
			id="lastname" name="lastname" value="<?php echo($_POST['lastname']); ?>"></td></tr>
			<tr><td>Preferred</td> <td><input type="text" size="15"
			id="preferredname" name="preferredname" value="<?php echo($_POST['preferredname']); ?>"></td></tr>
		</table>
		<table>
			<tr><td>Gender</td> <td width="5"></td><td><input <?php if(!(strcmp($_POST['gender'],"Female"))) {echo 'checked="checked"';}?> 
			type="Radio" name="gender" id="female" value="Female"> Female </td> 
			<td><input <?php if(!(strcmp($_POST['gender'],"Male"))) {echo 'checked="checked"';}?> 
			type="Radio" name="gender" id="male" value="Male"> Male</td>
		<td width="40"></td>	
		<td>Date of Birth: Month</td> <td><select id="dobmonth" name="dobmonth">
			<?php 
			$months = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
			foreach($months as $month) {
				echo "<option value'" . $month . "' ";
				if ($month == $_POST['dobmonth']){
					echo(SELECTED);
				}
				echo ">" . $month . "</option>";
			}
			?>
			</select>
			
			<td>Day</td> <td><select id="dobday" name="dobday">
			<?php 
			$days = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17",
				"18","19","20","21","22","23","24","25","26","27","28","29","30","31");
			foreach($days as $day) {
				echo "<option value'" . $day ."' ";
				if ($day == $_POST['dobday']){
					echo(SELECTED);
				}
				echo ">" . $day . "</option>";
			}
			?>
			</select>
			
			<td>Year</td> <td><select id="dobyear" name="dobyear">
			<?php 
			$oldyear = $currentyear - 20;
			$years = array($oldyear+1, $oldyear+2, $oldyear+3, $oldyear+4, $oldyear+5, $oldyear+6, $oldyear+7,
							$oldyear+8, $oldyear+9, $oldyear+10);
			foreach($years as $year) {
				echo "<option value'" . $year ."' ";
				if ($year == $_POST['dobyear']){
					echo(SELECTED);
				}
				echo ">" . $year . "</option>";
			}
			?>
			</select></td></tr>
		</table>
</fieldset>

<br>

<fieldset>
	<legend><font color="green">Home Address</font></legend>
		<table>
			<tr><td>Street Address</td> <td><input type="text" size="40"
			id="applicantaddress" name="applicantaddress" value="<?php echo($_POST['applicantaddress']); ?>">

			<tr><td>City</td> <td><input type="text" size="40"
			id="applicantcity" name="applicantcity" value="<?php echo($_POST['applicantcity']); ?>">
			
			<td>State</td> <td><select
			id="applicantstate" name="applicantstate">
			<?php 
			$states = array("","AL","AK","AZ","AR","CA","CO","CT","DE","DC","FL","GA","HI","ID","IL","IN","IA",
					        "KS","KY","LA","ME","MD","MA","MI","MN","MS","MO","MT","NE","NV","NH","NJ","NM",
					        "NY","NC","ND","OH","OK","OR","PA","RI","SC","SD","TN","TX","UT","VT","VA","WA",
					        "WV","WI","WY");
			foreach ($states as $state) {
				echo "<option value'" . $state ."' ";
				if ($_POST['applicantstate'] == null){
					if ($state == "NC") echo("SELECTED");
					echo ">" . $state . "</option>";
				}
				else {
					if ($state == $_POST['applicantstate']){
						echo(SELECTED);
					}
					echo ">" . $state . "</option>";
				}	
			}
			
			?>
			</select>
			<tr><td>Country</td> <td><input type="text" size="20" 
			id="applicantcountry" name="applicantcountry" value="<?php 
			if ($_POST['applicantcountry'] == null) {
				echo("United States of America");
			}
			else{
				echo($_POST['applicantcountry']);
			}
			?>"
			></td>
			<td>Zip</td> <td><input type="text" size="10"
			id="applicantzip" name="applicantzip" value="<?php echo($_POST['applicantzip']); ?>"></td></tr>
		</table>
</fieldset>

<br>

<fieldset>
	<legend><font color="green">Current School</font></legend>
		<table>
			<tr><td>School Name</td><td><input type="text" size="30" 
			id="prevschool" name="prevschool" value="<?php echo($_POST['prevschool']); ?>">
<td width="10"></td>
			<td>Current Grade<select id="curgrade" name="curgrade">
			<?php

			$grades = array("5th", "6th", "7th", "8th", "9th", "10th", "11th", "12th");
			foreach ($grades as $grade) {
				echo "<option value'" . $grade . "' ";
				if ($grade == $_POST['curgrade']){
					echo(SELECTED);
				}
				echo ">" . $grade . "</option>";
			}

			?>
			</select></td></tr>
		</table>
		<table>
			<tr><td>School Type</td> <td><input <?php if(!(strcmp($_POST['schooltype'],"Public"))) {echo 'checked="checked"';}?> 
			type="Radio" id="schooltype" name="schooltype" value="Public"> Public </td> 
			<td><input <?php if(!(strcmp($_POST['schooltype'],"Private"))) {echo 'checked="checked"';}?> 
			type="Radio" id="schooltype" name="schooltype" value="Private"> Private</td></tr>
		</table>
</fieldset>

<br> 
<p>Please list applicant's favorite activities/areas of study/hobbies.
<br /> <textarea id="activities" name="activities" rows="5" cols="80" ><?php 
if(isset($_POST['activities'])) {
	echo ($_POST['activities']); 
}
?></textarea>

<p>Please list any siblings and include their grade and school.
<br /> <textarea id="siblings" name="siblings" rows="5" cols="80">
<?php 
if(isset($_POST['siblings'])) {
	echo ($_POST['siblings']); 
}
?></textarea>

<p>How did you hear about Woodlawn School?
<br /> <textarea id="communication" name="communication" rows="5" cols="80">
<?php 
if(isset($_POST['communication'])) {
	echo ($_POST['communication']); 
}
?></textarea></p>

<br>
<p align="center"><span style="font-family: verdana,arial,helvetica; color: #336633; font-size: 12pt"><strong>Parent/Guardian Information</strong></span></p>

<p>Parent/Guardian 1 Name <input type="text" size="24"
id="guardian1name" name="guardian1name" value="<?php echo($_POST['guardian1name']); ?>"> &nbsp;&nbsp;&nbsp;&nbsp; 
Relationship to Applicant <select
id="guardian1rel" name="guardian1rel">

<?php
$relations = array("Father", "Mother", "Step-Father", "Step-Mother", "Legal Guardian", "Other");
foreach ($relations as $relation) {
	echo "<option value'" . $relation . "' ";
	if ($relation == $_POST['guardian1rel']){
		echo(SELECTED);
	}
	echo ">" . $relation . "</option>";
}

?>
</select>

<br><br>

<button type="button" onclick = "getAndCopy()" value="Fill" name="Fill Guardian 1 Information">
Copy Applicant Address to Parent/Guardian 1 Address </button>

<button type="button" onclick = "clearGuardian()" value="Clear" name="Clear Parent/Guardian 1 Information">
Clear Guardian 1 Address</button><br />


<script type ="text/javascript">
		  	var guardianNames = ["guardian1address", "guardian1city", "guardian1state", "guardian1country", "guardian1zip"];
		  	var guardian2Names = ["guardian2address", "guardian2city", "guardian2state", "guardian2country", "guardian2zip"];
		  	var applicantNames = ["applicantaddress", "applicantcity", "applicantstate", "applicantcountry", "applicantzip"];

		  	function getAndCopy() {
			  	for (var i = 0; i<guardianNames.length; i++){
					if (guardianNames[i] != "guardian1state") {
						var applicanttemp = document.getElementById(applicantNames[i]);
						var applicanttemp2 = applicanttemp.value;
				  		document.getElementById(guardianNames[i]).value = applicanttemp2;
					}
					else {
						var statetemp = document.getElementById(applicantNames[i]);
						var statetemp2 = statetemp.options[statetemp.selectedIndex].text;
						document.getElementById(guardianNames[i]).value = statetemp2;
					}
			  	}
		  	}
		  	function getAndCopy2() {
			  	for (var i = 0; i<guardian2Names.length; i++){
					if (guardianNames[i] != "guardian2state") {
						var applicanttemp = document.getElementById(applicantNames[i]);
						var applicanttemp2 = applicanttemp.value;
				  		document.getElementById(guardian2Names[i]).value = applicanttemp2;
					}
					else {
						var statetemp = document.getElementById(applicantNames[i]);
						var statetemp2 = statetemp.options[statetemp.selectedIndex].text;
						document.getElementById(guardian2Names[i]).value = statetemp2;
					}
			  	}
		  	}
	  		function clearGuardian() {
				for (var i = 0; i<guardianNames.length; i++){
					if (guardianNames[i] == "guardian1state"){
						document.getElementById(guardianNames[i]).value = "NC";
					}
					else if (guardianNames[i] == "guardian1country"){
						document.getElementById(guardianNames[i]).value = "United States of America";
					}
					else {
						document.getElementById(guardianNames[i]).value = "";
					}
				}
	 		}
	  		function clearGuardian2() {
				for (var i = 0; i<guardian2Names.length; i++){
					if (guardian2Names[i] == "guardian2state"){
						document.getElementById(guardian2Names[i]).value = "NC";
					}
					else if (guardian2Names[i] == "guardian2country"){
						document.getElementById(guardian2Names[i]).value = "United States of America";
					}
					else {
						document.getElementById(guardian2Names[i]).value = "";
					}
				}
	 		}
	 		
</script>

<fieldset>
	<legend><font color="green">Parent/Guardian 1 Address</font></legend>
		<table>
			<tr><td>Street Address</td> <td><input type="text" size="40"
			id="guardian1address" name="guardian1address" value="<?php echo($_POST['guardian1address']); ?>">
			<tr><td>City</td> <td><input type="text" size="40"
			id="guardian1city" name="guardian1city" value="<?php echo($_POST['guardian1city']); ?>">
			<td>State</td> <td><select
			id="guardian1state" name="guardian1state">
			<?php 
			$states = array(" ","AL","AK","AZ","AR","CA","CO","CT","DE","DC","FL","GA","HI","ID","IL","IN","IA",
					        "KS","KY","LA","ME","MD","MA","MI","MN","MS","MO","MT","NE","NV","NH","NJ","NM",
					        "NY","NC","ND","OH","OK","OR","PA","RI","SC","SD","TN","TX","UT","VT","VA","WA",
					        "WV","WI","WY");
			foreach ($states as $state) {
				echo "<option value'" . $state ."' ";
				if ($_POST['guardian1state'] == null){
					if ($state == "NC") echo("SELECTED");
					echo ">" . $state . "</option>";
				}
				else {
					if ($state == $_POST['guardian1state']){
						echo(SELECTED);
					}
					echo ">" . $state . "</option>";
				}	
			}
			?>
			</select>
			<tr><td>Country</td> <td><input type="text" size="20" 
			id="guardian1country" name="guardian1country" value="<?php 
			if ($_POST['guardian1country'] == null) {
				echo("United States of America");
			}
			else{
				echo($_POST['guardian1country']);
			}
			?>"></td>
			<td>Zip</td> <td><input type="text" size="10"
			id="guardian1zip" name="guardian1zip" value="<?php echo($_POST['guardian1zip']); ?>"></td></tr>
		</table>
</fieldset>

<br>

<fieldset>
	<legend><font color="green">Parent/Guardian 1 Contact Information</font></legend>
		<table>
			<tr><td>Email</td> <td><input type="text" size="30"
			id="guardian1email" name="guardian1email" value="<?php echo($_POST['guardian1email']); ?>"></td></tr>
			<tr><td>Phone (home)</td> <td><input type="text" size="20"
			id="guardian1homephone" name="guardian1homephone" value="<?php echo($_POST['guardian1homephone']); ?>"></td><td width="10"></td>
			<td>Phone (cell)</td> <td><input type="text" size="20"
			id="guardian1cellphone" name="guardian1cellphone" value="<?php echo($_POST['guardian1cellphone']); ?>"></td></tr>
			<tr><td>Employer</td> <td><input type="text" size="30"
			id="guardian1employer" name="guardian1employer" value="<?php echo($_POST['guardian1employer']); ?>"></td><td width="10"></td>
			<td>Occupation</td> <td><input type="text" size="20"
			id="guardian1occupation" name="guardian1occupation" value="<?php echo($_POST['guardian1occupation']); ?>"></td></tr>
		</table>
</fieldset>

<br>

<p>Parent/Guardian 2 Name <input type="text" size="24"
id="guardian2name" name="guardian2name" value="<?php echo($_POST['guardian2name']); ?>"> &nbsp;&nbsp;&nbsp;&nbsp; 
Relationship to Applicant <select
 id="guardian2rel" name="guardian2rel">

<?php

$relations = array("Father", "Mother", "Step-Father", "Step-Mother", "Legal Guardian", "Other");
foreach ($relations as $relation) {
	echo "<option value'" . $relation . "' ";
	if ($relation == $_POST['guardian2rel']){
		echo(SELECTED);
	}
	echo ">" . $relation . "</option>";
}

?>
</select>

<br><br>

<button type="button" onclick = "getAndCopy2()" value="Fill" name="Fill Guardian 2 Information">
Copy Applicant Address to Parent/Guardian 2 Address </button>

<button type="button" onclick = "clearGuardian2()" value="Clear" name="Clear Parent/Guardian 2 Information">
Clear Guardian 2 Address</button><br />


<fieldset>
	<legend><font color="green">Parent/Guardian 2 Address</font></legend>
		<table>
			<tr><td>Street Address</td> <td><input type="text" size="40"
			id="guardian2address" name="guardian2address" value="<?php echo($_POST['guardian2address']); ?>">
			<tr><td>City</td> <td><input type="text" size="40"
			id="guardian2city" name="guardian2city" value="<?php echo($_POST['guardian2city']); ?>">
			<td>State</td> <td><select
			id="guardian2state" name="guardian2state">
			<?php 
			$states = array(" ","AL","AK","AZ","AR","CA","CO","CT","DE","DC","FL","GA","HI","ID","IL","IN","IA",
					        "KS","KY","LA","ME","MD","MA","MI","MN","MS","MO","MT","NE","NV","NH","NJ","NM",
					        "NY","NC","ND","OH","OK","OR","PA","RI","SC","SD","TN","TX","UT","VT","VA","WA",
					        "WV","WI","WY");
			foreach ($states as $state) {
				echo "<option value'" . $state ."' ";
				if ($_POST['guardian2state'] == null){
					if ($state == "NC") echo("SELECTED");
					echo ">" . $state . "</option>";
				}
				else {
					if ($state == $_POST['guardian2state']){
						echo(SELECTED);
					}
					echo ">" . $state . "</option>";
				}
			}
			?>
			</select>
			<tr><td>Country</td> <td><input type="text" size="20" 
			id="guardian2country" name="guardian2country" value="<?php 
			if ($_POST['guardian2country'] == null) {
				echo("United States of America");
			}
			else{
				echo($_POST['guardian2country']);
			}
			?>"></td>
			<td>Zip</td> <td><input type="text" size="10"
			id="guardian2zip" name="guardian2zip" value="<?php echo($_POST['guardian2zip']); ?>"></td></tr>
		</table>
</fieldset>

<br>

<fieldset>
	<legend><font color="green">Parent/Guardian 2 Contact Information</font></legend>
		<table>
			<tr><td>Email</td> <td><input type="text" size="30"
			id="guardian2email" name="guardian2email" value="<?php echo($_POST['guardian2email']); ?>"></td></tr>
			<tr><td>Phone (home)</td> <td><input type="text" size="20"
			id="guardian2homephone" name="guardian2homephone" value="<?php echo($_POST['guardian2homephone']); ?>"></td><td width="10"></td>
			<td>Phone (cell)</td> <td><input type="text" size="20"
			id="guardian2cellphone" name="guardian2cellphone" value="<?php echo($_POST['guardian2cellphone']); ?>"></td></tr>
			<tr><td>Employer</td> <td><input type="text" size="30"
			id="guardian2employer" name="guardian2employer" value="<?php echo($_POST['guardian2employer']); ?>"></td><td width="10"></td>
			<td>Occupation</td> <td><input type="text" size="20"
			id="guardian2occupation" name="guardian2occupation" value="<?php echo($_POST['guardian2occupation']); ?>"></td></tr>
		</table>
</fieldset>

<p>Please list any family or friend connections to the school.
<br /> <textarea id="connections" name="connections" rows="5" cols="80"><?php 
if(isset($_POST['connections'])) {
	echo htmlentities ($_POST['connections']); 
}
?></textarea></p>
<br>
<p align="center"><span style="font-family: verdana,arial,helvetica; color: #336633; font-size: 12pt"><strong>General Information</strong></span></p>

<p>Is there any academic, medical or psychological history that might affect your child's ability <br> to
participate fully in Woodlawn's programs? <input <?php if(!(strcmp($_POST['applicanthistory'],"No"))) {echo 'checked="checked"';}?> 
type="Radio" id="applicanthistory" name="applicanthistory" value="No"> No 
<input <?php if(!(strcmp($_POST['applicanthistory'],"Yes"))) {echo 'checked="checked"';}?> 
type="Radio" id="applicanthistory" name="applicanthistory" value="Yes"> Yes 
If yes, please explain: <br /> <textarea id="applicanthistorytext" name="applicanthistorytext" rows="5" cols="80">
<?php 
if(isset($_POST['applicanthistorytext'])) {
	echo ($_POST['applicanthistorytext']); 
}
?></textarea>

<p>Has your child ever had any psychological or educational testing, undergone any counseling <br> or treatment,
ever been involved with the judicial system, or ever been suspended or expelled <br> from school? <input <?php if(!(strcmp($_POST['applicantpsychjudicial'],"No"))) {echo 'checked="checked"';}?>
type="Radio" id="applicantpsychjudicial" name="applicantpsychjudicial" value="No"> No 
<input <?php if(!(strcmp($_POST['applicantpsychjudicial'],"Yes"))) {echo 'checked="checked"';}?> 
type="Radio" id="applicantpsychjudicial" name="applicantpsychjudicial" value="Yes"> Yes 
If yes, please explain: <br /> <textarea id="applicantpsychjudicialtext" name="applicantpsychjudicialtext" rows="5" cols="80">
<?php 
if(isset($_POST['applicantpsychjudicialtext'])) {
	echo ($_POST['applicantpsychjudicialtext']); 
}
?></textarea>

<p>Please note any medical concerns of which we need to be aware. <br /> <textarea id="applicantmedical" 
name="applicantmedical" rows="5" cols="80">
<?php 
if(isset($_POST['applicantmedical'])) {
	echo ($_POST['applicantmedical']); 
}
?></textarea>

<p align="center">Woodlawn School admits students of any race, religion, gender, nationality, ethnic background, or sexual orientation. 
Woodlawn School does not discriminate on the basis of race, religion, gender, nationality, ethnic background, or sexual
orientation in the administration of its educational policies, scholarship programs, athletic or other school-administered programs.

<br><br>

<button type="submit" value="_form_submit" name="_form_submit">Submit Application </button>
<button type="reset" value="Clear" name="Clear All">Clear Application</button>
</p>
<?php 
include('newApplicantFooter.html');
?>

</form>