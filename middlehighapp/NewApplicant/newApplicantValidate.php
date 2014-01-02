<?php
/*
 * Copyright 2013 by Sawyer Bowman and Dwayne Bowman. This program is 
 * made originally for Woodlawn School, a nonprofit private school in
 * Davidson, NC. It comes with absolutely no warranty.  You can redistribute 
 * and/or modify it under the terms of the GNU Public License as published
 * by the Free Software Foundation (see <http://www.gnu.org/licenses/).
*/

/*
 *  validates information from the new applicant form
 *	@Sawyer Bowman
 *	@version 12/28/2013
 */
 
function validateForm($last) {
	//Applicant Information Tests
	//applicant tests
	$errors[] = array();
	if($_POST['firstname'] == null){
		$errors[] = 'Please enter a first name for the applicant.';
	}
	if($_POST['lastname'] == null){
		$errors[] = 'Please enter a last name for the applicant.';
	}
	if($_POST['gender'] == null){
		$errors[] = 'Please choose a gender for the applicant.';
	}
	//address tests
	if($_POST['applicantaddress'] == null){
		$errors[] = 'Please enter a street address for the applicant.';
	}
	if($_POST['applicantcity'] == null){
		$errors[] = 'Please enter a city for the applicant.';
	}
	if($_POST['applicantcountry'] == 'United States of America' && $_POST['applicantstate'] == null){
		$errors[] = 'Please enter a state for the applicant.';
	}
	if($_POST['applicantcountry'] == null){
		$errors[] = 'Please enter a country for the applicant.';
	}
	if($_POST['applicantcountry'] == 'United States of America' && $_POST['applicantzip'] == null){
		$errors[] = 'Please enter a zip code for the applicant.';
	}
	if($_POST['applicantzip'] != null && strlen($_POST['applicantzip']) < 5){
		$errors[] = 'Please enter a valid zip code for the applicant.';
	}
	//school tests
	if($_POST['prevschool'] == null){
		$errors[] = 'Please enter a current school for the applicant.';
	}
	if($_POST['schooltype'] == null){
		$errors[] = 'Please choose a school type for the current school.';
	}
	//Parent Information Tests
	//guardian 1 tests
	if($_POST['guardian1name'] == null){
		$errors[] = 'Please enter a name for Parent/Guardian 1.';
	}
	//guardian 1 address tests
	if($_POST['guardian1address'] == null){
		$errors[] = 'Please enter a street address for Parent/Guardian 1.';
	}
	if($_POST['guardian1city'] == null){
		$errors[] = 'Please enter a city for Parent/Guardian 1.';
	}
	if($_POST['guardian1country'] == 'United States of America' && $_POST['guardian1state'] == null){
		$errors[] = 'Please enter a state for Parent/Guardian 1.';
	}
	if($_POST['guardian1country'] == null){
		$errors[] = 'Please enter a country for Parent/Guardian 1.';
	}
	if($_POST['guardian1country'] == 'United States of America' && $_POST['guardian1zip'] == null){
		$errors[] = 'Please enter a zip code for Parent/Guardian 1.';
	}
	if($_POST['guardian1zip'] != null && strlen($_POST['guardian1zip']) < 5){
		$errors[] = 'Please enter a valid zip code for Parent/Guardian 1.';
	}
	//guardian 1 contact tests
	if($_POST['guardian1email'] == null){
		$errors[] = 'Please enter an email address for Parent/Guardian 1.';
	}
	if(!validPhone($_POST['guardian1homephone'])){
		$errors[] = 'Please enter a valid home phone number for Parent/Guardian 1.';
	}
	if(!validPhone($_POST['guardian1cellphone'])){
		$errors[] = 'Please enter a valid cell phone number for Parent/Guardian 1.';
	}
/*  the parent may not be working
	if($_POST['guardian1employer'] == null){
		$errors[] = 'Please enter an employer for Guardian 1.';
	}
	if($_POST['guardian1occupation'] == null){
		$errors[] = 'Please enter an occupation for Guardian 1.';
	}
*/
	//guardian 2 tests
	if($_POST['guardian2name'] == null){
		$errors[] = 'Please enter a name for Parent/Guardian 2.';
	}
	//guardian 2 address tests
	if($_POST['guardian2address'] == null){
		$errors[] = 'Please enter a street address for Parent/Guardian 2.';
	}
	if($_POST['guardian2city'] == null){
		$errors[] = 'Please enter a city for Parent/Guardian 2.';
	}
	if($_POST['guardian2country'] == 'United States of America' && $_POST['guardian2state'] == null){
		$errors[] = 'Please enter a state for Parent/Guardian 2.';
	}
	if($_POST['guardian2country'] == null){
		$errors[] = 'Please enter a country for Parent/Guardian 2.';
	}
	if($_POST['guardian2country'] == 'United States of America' && $_POST['guardian2zip'] == null){
		$errors[] = 'Please enter a zip code for Parent/Guardian 2.';
	}	
	if($_POST['guardian2zip'] != null && strlen($_POST['guardian2zip']) < 5){
		$errors[] = 'Please enter a valid zip code for Parent/Guardian 2.';
	}
	//guardian 2 contact tests
	if($_POST['guardian2email'] == null){
		$errors[] = 'Please enter an email address for Parent/Guardian 2.';
	}
	if(!validPhone($_POST['guardian2homephone'])){
		$errors[] = 'Please enter a valid home phone number for Parent/Guardian 2.';
	}
	if(!validPhone($_POST['guardian2cellphone'])){
		$errors[] = 'Please enter a valid cell phone number for Parent/Guardian 2.';
	}
/*  the parent may not be working
	if($_POST['guardian2employer'] == null){
		$errors[] = 'Please enter an employer for Guardian 2.';
	}
	if($_POST['guardian2occupation'] == null){
		$errors[] = 'Please enter an occupation for Guardian 2.';
	}
*/
	//General Information Tests
	//academic, medical, psychological history tests
	if($_POST['applicanthistory'] == null){
		$errors[] = 'Please choose Yes or No for academic, medical or psychological history.';
	}
	if($_POST['applicanthistory'] == 'Yes' && $_POST['applicanthistorytext'] == null){
		$errors[] = 'You chose Yes for academic, medical or psychological history.
		Please enter an explanation or choose No.';
	}
	//tests, counseling, treatment, judicial or discipline tests
	if($_POST['applicantpsychjudicial'] == null){
		$errors[] = 'Please choose Yes or No for psychological or educational testing, counseling or
		treatment, involvement with judicial system, or suspensions or expulsions from school.';
	}
	if($_POST['applicantpsychjudicial'] == 'Yes' && $_POST['applicantpsychjudicialtext'] == null){
		$errors[] = 'You chose Yes for psychological or educational testing, counseling or
		treatment, involvement with judicial system, or suspensions or expulsions from school.
		Please enter an explanation or choose No.';
	}
	if(!$errors)
        return "";
    else
        return $errors;
}

function showErrors($e){
	//should display all of the errors in our array
	?>
	<div class="warning">
	<ul>
	<?php 
	foreach($e as $error){
		echo("<li><strong><font color=\"red\">".$error."</font></strong></li>\n");
	}
	?>
	</ul></div>
	<?php
}

function validPhone($phone){
		if($phone==null) return false;
		$phone = str_replace(' ','',str_replace('+','',str_replace('(','',str_replace(')','',str_replace('-','',$phone)))));
		$test = str_replace('0','',str_replace('1','',str_replace('2','',str_replace('3','',str_replace('4','',str_replace('5','',str_replace('6','',str_replace('7','',str_replace('8','',str_replace('9','',$phone))))))))));
		if($test != null) return false;
		if (strlen($phone) < 10) return false;
		return true;
}

?>
