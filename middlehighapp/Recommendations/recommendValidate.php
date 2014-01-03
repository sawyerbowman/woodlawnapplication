<?php
/*
 * Copyright 2013 by Sawyer Bowman and Dwayne Bowman. This program is 
 * made originally for Woodlawn School, a nonprofit private school in
 * Davidson, NC. It comes with absolutely no warranty.  You can redistribute 
 * and/or modify it under the terms of the GNU Public License as published
 * by the Free Software Foundation (see <http://www.gnu.org/licenses/).
*/

/*
 *  validates information from the new parent statement form
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
	if($_POST['teacher1name'] == null){
		$errors[] = 'Please enter a name for Teacher 1.';
	}
	if ($_POST['futuregrade'] != '1st grade' && $_POST['futuregrade'] != '2nd grade' && 
	$_POST['futuregrade'] != 'Kindergarten' && $_POST['futuregrade'] != '3rd grade' &&
	$_POST['futuregrade'] != '4th grade' && $_POST['futuregrade'] != '5th grade'){
			if($_POST['teacher2name'] == null){
				$errors[] = 'Please enter a name for Teacher 2.';
			}
	}
	if($_POST['teacher1email'] == null){
		$errors[] = 'Please enter an email for Teacher 1.';
	}
	else{
		$teacher1email = $_POST['teacher1email'];
		$atboolean = false;
		$periodboolean = false;
		for($i=0; $i<strlen($teacher1email); $i++) {
			if ($teacher1email[$i] == '@'){
				$atboolean = true;
			}
			if ($teacher1email[$i] == '.') {
				$periodboolean = true;
			}
		}
		if (!$atboolean && !$periodboolean) {
			$errors[] = 'Please enter a valid email address with both an \'@\' symbol and a \'.\' symbol for Teacher 1.';
		}
                else if (!$atboolean) {
                        $errors[] = 'Please enter a valid email address with an \'@\' symbol for Teacher 1.';
                }
                else if (!$periodboolean) {
			$errors[] = 'Please enter a valid email address with a \'.\' symbol for Teacher 1.';
		}
	}
	if ($_POST['futuregrade'] != '1st grade' && $_POST['futuregrade'] != '2nd grade' && 
	$_POST['futuregrade'] != 'Kindergarten' && $_POST['futuregrade'] != '3rd grade' &&
	$_POST['futuregrade'] != '4th grade' && $_POST['futuregrade'] != '5th grade'){
			if($_POST['teacher2email'] == null){
				$errors[] = 'Please enter an email for Teacher 2.';
			}
			else{
				$teacher2email = $_POST['teacher2email'];
				$atboolean2 = false;
				$periodboolean2 = false;
				for($i=0; $i<strlen($teacher2email); $i++) {
					if ($teacher2email[$i] == '@'){
						$atboolean2 = true;
					}
					if ($teacher2email[$i] == '.'){
						$periodboolean2 = true;
					}
				}
		                if (!$atboolean2 && !$periodboolean2) {
			                $errors[] = 'Please enter a valid email address with both an \'@\' symbol and a \'.\' symbol for Teacher 2.';
		                }
                               else if (!$atboolean2) {
                                       $errors[] = 'Please enter a valid email address with an \'@\' symbol for Teacher 2.';
                               }
                              else if (!$periodboolean2) {
                        	     	$errors[] = 'Please enter a valid email address with a \'.\' symbol for Teacher 2.';
	 	              }
			}
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
