<?php
/*
 * Copyright 2013 by Sawyer Bowman and Dwayne Bowman. This program is 
 * made originally for Woodlawn School, a nonprofit private school in
 * Davidson, NC. It comes with absolutely no warranty.  You can redistribute 
 * and/or modify it under the terms of the GNU Public License as published
 * by the Free Software Foundation (see <http://www.gnu.org/licenses/).
*/

/*
 *  implements editing of a new parent statement
 *	@Sawyer Bowman
 *	@version 12/28/2013
 */

include('parentStatementHeader.html');
include('parentStatementValidate.php');
	if(!array_key_exists('_form_submit', $_POST)){
		//the form has not been submitted, so show it
		include('parentStatementForm.php');
	}
	else {
		//form has been submitted, so validate it
		//step 1: errors array lists problems on form submitted
		$errors = validateForm();
		//get rid of 0th position
		array_shift($errors);
		//step 2: display the errors on the form to fix
		if($errors){
			//echo($errors[0]);
			showErrors($errors);
			include('parentStatementForm.php');
		}
		else {
			//This was a successful form submission
			echo("This was a successful form submission.");
			include('parentStatementForm2.php');
		}
		echo('</div>');
		echo('</div></body></html>');
		die();
	}
	?>
</div>
</body>
</html>