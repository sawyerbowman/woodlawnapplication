<?php
/*
 * Copyright 2013 by Sawyer Bowman and Dwayne Bowman. This program is 
 * made originally for Woodlawn School, a nonprofit private school in
 * Davidson, NC. It comes with absolutely no warranty.  You can redistribute 
 * and/or modify it under the terms of the GNU Public License as published
 * by the Free Software Foundation (see <http://www.gnu.org/licenses/).
*/

/*
 *  validates information from the teacher recommendation form
 *	@Sawyer Bowman
 *	@version 12/28/2013
 */
 
function validateForm() {
	$errors[] = array();
	if($_POST['firstname'] == null){
		$errors[] = 'Please enter a first name for the applicant.';
	}
	if($_POST['lastname'] == null){
		$errors[] = 'Please enter a last name for the applicant.';
	}
	if($_POST['teachername'] == null){
		$errors[] = 'Please enter a name for the teacher completing this form.';
	}
	if($_POST['curriculum'] == null){
		$errors[] = 'Please enter the curriculum name or the name of a text used in your class.';
	}
	if($_POST['curgrade'] == "Select"){
		$errors[] = 'Please enter the grade level of the applicant when he/she was in your class.';
	}
	if($_POST['school'] == null){
		$errors[] = 'Please enter the name of the school where you taught the applicant.';
	}
	if($_POST['phone'] == null){
		$errors[] = 'Please enter a phone number where we could reach you if further info is needed.';
	}
	if($_POST['greatest_strengths'] == null){
		$errors[] = 'Please enter the greatest strengths of the applicant.';
	}
	if($_POST['greatest_challenges'] == null){
		$errors[] = 'Please enter the greatest challenges faced by the applicant.';
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
