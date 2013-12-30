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
?>
<form method=post action="**********************">
<input type="hidden" name="next_url" value="http://woodlawnschool.org/index.html">
<?php
 
include_once("applicantEdit.php");

//Make a new applicant

$today = date('Y-M-d');
$currentday = substr($today, 9, 2);
$currentmonth = substr($today, 5, 3);
$currentyear = substr($today, 0, 4);
?>

<p>Applying for<span style="font-size:x-small;color:FF0000"></span> <select id="futuregrade" name="futuregrade">
<?php

$grades = array("6th", "7th", "8th", "9th", "10th", "11th", "12th");
foreach ($grades as $grade) {
	echo "<option value'" . $grade . "' ";
	echo ">" . $grade . "</option>";
}

?>
</select>

grade in the school year<span style="font-size:x-small;color:FF0000"></span> <select id="schoolyear" name="schoolyear">
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
	<legend>Applicant:</legend>
		<table>
			<tr><td>First<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="20"
			id="first" name="firstname"></td>
			<td>Middle<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="20"
			id="middle" name="middlename"></td>
			<td>Last<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="20"
			id="last" name="lastname"></td></tr>
			<tr><td>Preferred<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="20"
			id="preferred" name="preferredname"></td></tr>
			<tr><td>Gender<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="Radio" name="gender" id="female" 
			name="female" value="Female"> Female </td> <td><input type="Radio" name="gender" id="male" name="male" value="Male"> Male</tr>
		</table>
</fieldset>

<br>

<fieldset>
	<legend>Date of Birth:</legend>
		<table>
			<tr><td>Month<span style="font-size:x-small;color:FF0000"></span></td> <td><select id="dobmonth" name="dobmonth">
			<?php 
			$months = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
			foreach($months as $month) {
				echo "<option value'" . $month . "' ";
				echo ">" . $month . "</option>";
			}
			?>
			</select>
			
			<td>Day<span style="font-size:x-small;color:FF0000"></span></td> <td><select id="dobday" name="dobday">
			<?php 
			$days = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17",
				"18","19","20","21","22","23","24","25","26","27","28","29","30","31");
			foreach($days as $day) {
				echo "<option value'" . $day ."' ";
				echo ">" . $day . "</option>";
			}
			?>
			</select>
			
			<td>Year<span style="font-size:x-small;color:FF0000"></span></td> <td><select id="dobyear" name="dobyear">
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

<fieldset>
	<legend>Home Address:</legend>
		<table>
			<tr><td>Street Address<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="40"
			id="applicantaddress" name="applicantaddress">

			<tr><td>City<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="40"
			id="applicantcity" name="applicantcity">
			
			<td>State<span style="font-size:x-small;color:FF0000"></span></td> <td><select
			id="applicantstate" name="applicantstate">
			<?php 
			$states = array(" ","AL","AK","AZ","AR","CA","CO","CT","DE","DC","FL","GA","HI","ID","IL","IN","IA",
					        "KS","KY","LA","ME","MD","MA","MI","MN","MS","MO","MT","NE","NV","NH","NJ","NM",
					        "NY","NC","ND","OH","OK","OR","PA","RI","SC","SD","TN","TX","UT","VT","VA","WA",
					        "WV","WI","WY");
			foreach ($states as $state) {
				echo "<option value'" . $state ."' ";
				if ($state == "NC") echo("SELECTED");
				echo ">" . $state . "</option>";
			}
			
			?>
			</select>
			<tr><td>Country<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="20" 
			id="applicantcountry" name="applicantcountry" value="<?php 
			echo("United States of America");
			?>"
			></td>
			<td>Zip<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="10"
			id="applicantzip" name="applicantzip"></td></tr>
		</table>
</fieldset>

<p>Present School:<span style="font-size:x-small;color:FF0000"></span><input type="text" size="40" 
id="prevschool" name="prevschool">

 Current Grade:<span style="font-size:x-small;color:FF0000"></span> <select id="curgrade" name="curgrade">
<?php

$grades = array("5th", "6th", "7th", "8th", "9th", "10th", "11th", "12th");
foreach ($grades as $grade) {
	echo "<option value'" . $grade . "' ";
	echo ">" . $grade . "</option>";
}

?>
</select><br> 

<input type="Radio" id="schooltype" name="schooltype" value="Public"> Public 
<input type="Radio" id="schooltype" name="schooltype" value="Private"> Private


<p>Please list applicant's favorite activities/areas of study/hobbies:
<br /> <textarea id="activities" name="activities" rows="5" cols="80"></textarea>

<p>Please list any siblings and include their grade and school:
<br /> <textarea id="siblings" name="siblings" rows="5" cols="80"></textarea>

<p>How did you hear about Woodlawn School?:
<br /> <textarea id="communication" name="communication" rows="5" cols="80"></textarea>


<p><strong>Parent Information</strong><br />

<p>Guardian 1:<span style="font-size:x-small;color:FF0000"></span><input type="text" size="30"
id="guardian1name" name="guardian1name">
 Relationship to Applicant:<span style="font-size:x-small;color:FF0000"></span> <select
 id="guardian1rel" name="guardian1rel">

<?php

$relations = array("Father", "Mother", "Step-Father", "Step-Mother", "Legal Guardian", "Other");
foreach ($relations as $relation) {
	echo "<option value'" . $relation . "' ";
	echo ">" . $relation . "</option>";
}

?>
</select>

<br><br>

<button type="button" onclick = "getAndCopy()" value="Fill" name="Fill Guardian 1 Information">
Copy Applicant Address to Guardian 1 Address </button>

<button type="button" onclick = "clearGuardian()" value="Clear" name="Clear Guardian 1 Information">
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
	<legend>Guardian 1 Address:</legend>
		<table>
			<tr><td>Street Address<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="40"
			id="guardian1address" name="guardian1address">
			<tr><td>City<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="40"
			id="guardian1city" name="guardian1city">
			<td>State<span style="font-size:x-small;color:FF0000"></span></td> <td><select
			id="guardian1state" name="guardian1state">
			<?php 
			$states = array(" ","AL","AK","AZ","AR","CA","CO","CT","DE","DC","FL","GA","HI","ID","IL","IN","IA",
					        "KS","KY","LA","ME","MD","MA","MI","MN","MS","MO","MT","NE","NV","NH","NJ","NM",
					        "NY","NC","ND","OH","OK","OR","PA","RI","SC","SD","TN","TX","UT","VT","VA","WA",
					        "WV","WI","WY");
			foreach ($states as $state) {
				echo "<option value'" . $state ."' ";
				if ($state == "NC") echo("SELECTED");
				echo ">" . $state . "</option>";
			}
			?>
			</select>
			<tr><td>Country<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="20" 
			id="guardian1country" name="guardian1country" value="<?php 
			echo("United States of America");
			?>"
			></td>
			<td>Zip<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="10"
			id="guardian1zip" name="guardian1zip"></td></tr>
		</table>
</fieldset>

<br>

<fieldset>
	<legend>Guardian 1 Contact Information:</legend>
		<table>
			<tr><td>Email:<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="30"
			id="guardian1email" name="guardian1email">
			<tr><td>Phone (home):<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="20"
			id="guardian1homephone" name="guardian1homephone">
			<td>Phone (cell):<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="20"
			id="guardian1cellphone" name="guardian1cellphone">
			<tr><td>Employer:<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="30"
			id="guardian1employer" name="guardian1employer">
			<td>Occupation:<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="20"
			id="guardian1occupation" name="guardian1occupation"></td></tr>
		</table>
</fieldset>

<br><br>

<p>Guardian 2:<span style="font-size:x-small;color:FF0000"></span><input type="text" size="30"
id="guardian2name" name="guardian2name">
 Relationship to Applicant:<span style="font-size:x-small;color:FF0000"></span> <select
 id="guardian2rel" name="guardian2rel">

<?php

$relations = array("Father", "Mother", "Step-Father", "Step-Mother", "Legal Guardian", "Other");
foreach ($relations as $relation) {
	echo "<option value'" . $relation . "' ";
	echo ">" . $relation . "</option>";
}

?>
</select>

<br><br>

<button type="button" onclick = "getAndCopy2()" value="Fill" name="Fill Guardian 2 Information">
Copy Applicant Address to Guardian 2 Address </button>

<button type="button" onclick = "clearGuardian2()" value="Clear" name="Clear Guardian 2 Information">
Clear Guardian 2 Address</button><br />


<fieldset>
	<legend>Guardian 2 Address:</legend>
		<table>
			<tr><td>Street Address<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="40"
			id="guardian2address" name="guardian2address">
			<tr><td>City<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="40"
			id="guardian2city" name="guardian2city">
			<td>State<span style="font-size:x-small;color:FF0000"></span></td> <td><select
			id="guardian2state" name="guardian2state">
			<?php 
			$states = array(" ","AL","AK","AZ","AR","CA","CO","CT","DE","DC","FL","GA","HI","ID","IL","IN","IA",
					        "KS","KY","LA","ME","MD","MA","MI","MN","MS","MO","MT","NE","NV","NH","NJ","NM",
					        "NY","NC","ND","OH","OK","OR","PA","RI","SC","SD","TN","TX","UT","VT","VA","WA",
					        "WV","WI","WY");
			foreach ($states as $state) {
				echo "<option value'" . $state ."' ";
				if ($state == "NC") echo("SELECTED");
				echo ">" . $state . "</option>";
			}
			?>
			</select>
			<tr><td>Country<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="20" 
			id="guardian2country" name="guardian2country" value="<?php 
			echo("United States of America");
			?>"
			></td>
			<td>Zip<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="10"
			id="guardian2zip" name="guardian2zip"></td></tr>
		</table>
</fieldset>

<br>

<fieldset>
	<legend>Guardian 2 Contact Information:</legend>
		<table>
			<tr><td>Email:<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="30"
			id="guardian2email" name="guardian2email">
			<tr><td>Phone (home):<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="20"
			id="guardian2homephone" name="guardian2homephone">
			<td>Phone (cell):<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="20"
			id="guardian2cellphone" name="guardian2cellphone">
			<tr><td>Employer:<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="30"
			id="guardian2employer" name="guardian2employer">
			<td>Occupation:<span style="font-size:x-small;color:FF0000"></span></td> <td><input type="text" size="20"
			id="guardian2occupation" name="guardian2occupation"></td></tr>
		</table>
</fieldset>

<p>Please list any family or friend connections to the school:
<br /> <textarea id="connections" name="connections" rows="5" cols="80"></textarea>

<br><br><br>

<button type="submit" name="Submit Application">Submit Application </button>
<button type="reset" value="Clear" name="Clear All">Clear Application</button>

</form>