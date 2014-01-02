<?php
/*
 * Copyright 2013 by Sawyer Bowman and Dwayne Bowman. This program is 
 * made originally for Woodlawn School, a nonprofit private school in
 * Davidson, NC. It comes with absolutely no warranty.  You can redistribute 
 * and/or modify it under the terms of the GNU Public License as published
 * by the Free Software Foundation (see <http://www.gnu.org/licenses/).
*/

/*
 *  a thank you page for a new applicant for middle or high school at Woodlawn School
 *	@Sawyer Bowman
 *	@version 12/28/2013
 */

include('newApplicantHeader.html');

?>
<div class="success">
	<ul>
	<li><strong><font color="green">You have successfully submitted your application!</font></strong></li>
	</ul></div>
<br>

<p>Thank you for your submission. Below, you can find other links to complete your application.<br><br>

<a href="http://www.woodlawnschool.org/application/applicant_statement/applicantStatementEdit.php">Applicant Personal Statement</a> (for middle and upper school applicants only)<br>
<a href="http://www.woodlawnschool.org/application/parent_statement/parentStatementEdit.php">Parent Personal Statement</a>

<?php 
include('newApplicantFooter.html');
?>	
