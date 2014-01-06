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
<td width="200"><b>Student Qualities</b></td>
<td width="50" align="center"><b>Excellent</b></td>
<td width="50" align="center"><b>Good</b></td>
<td width="50" align="center"><b>Average</b></td>
<td width="50" align="center"><b>Fair</b></td>
<td width="50" align="center"><b>Poor</b></td></tr>
<tr>
<td>Work Habits</td>
<td align="center"><input <?php if(!(strcmp($_POST['workhabits'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="workhabits" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['workhabits'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="workhabits" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['workhabits'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="workhabits" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['workhabits'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="workhabits" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['workhabits'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="workhabits" id="poor" value="poor"></td></tr>
<tr>
<td>Motivation</td>
<td align="center"><input <?php if(!(strcmp($_POST['motivation'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="motivation" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['motivation'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="motivation" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['motivation'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="motivation" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['motivation'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="motivation" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['motivation'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="motivation" id="poor" value="poor"></td></tr>
<tr>
<td>Works Independently</td>
<td align="center"><input <?php if(!(strcmp($_POST['works_independently'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="works_independently" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['works_independently'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="works_independently" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['works_independently'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="works_independently" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['works_independently'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="works_independently" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['works_independently'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="works_independently" id="poor" value="poor"></td></tr>
<tr>
<td>Works Cooperatively</td>
<td align="center"><input <?php if(!(strcmp($_POST['works_cooperatively'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="works_cooperatively" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['works_cooperatively'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="works_cooperatively" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['works_cooperatively'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="works_cooperatively" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['works_cooperatively'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="works_cooperatively" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['works_cooperatively'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="works_cooperatively" id="poor" value="poor"></td></tr>
<tr>
<td>Intellectual Curiosity</td>
<td align="center"><input <?php if(!(strcmp($_POST['curiosity'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="curiosity" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['curiosity'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="curiosity" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['curiosity'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="curiosity" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['curiosity'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="curiosity" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['curiosity'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="curiosity" id="poor" value="poor"></td></tr>
<tr>
<td>Organizational Skills</td>
<td align="center"><input <?php if(!(strcmp($_POST['organizational'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="organizational" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['organizational'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="organizational" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['organizational'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="organizational" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['organizational'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="organizational" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['organizational'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="organizational" id="poor" value="poor"></td></tr>
<tr>
<td>Classroom Behavior</td>
<td align="center"><input <?php if(!(strcmp($_POST['behavior'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="behavior" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['behavior'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="behavior" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['behavior'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="behavior" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['behavior'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="behavior" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['behavior'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="behavior" id="poor" value="poor"></td></tr>
<tr>
<td>Passion for Learning</td>
<td align="center"><input <?php if(!(strcmp($_POST['passion'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="passion" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['passion'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="passion" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['passion'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="passion" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['passion'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="passion" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['passion'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="passion" id="poor" value="poor"></td></tr>
<tr>
<td>Attendance</td>
<td align="center"><input <?php if(!(strcmp($_POST['attendance'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="attendance" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['attendance'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="attendance" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['attendance'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="attendance" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['attendance'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="attendance" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['attendance'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="attendance" id="poor" value="poor"></td></tr>
</table>
<p></p>
<table><tr>
<td width="200"><b>Character</b></td>
<td width="50" align="center"><b>Excellent</b></td>
<td width="50" align="center"><b>Good</b></td>
<td width="50" align="center"><b>Average</b></td>
<td width="50" align="center"><b>Fair</b></td>
<td width="50" align="center"><b>Poor</b></td></tr>
<tr>
<td>Leadership</td>
<td align="center"><input <?php if(!(strcmp($_POST['leadership'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="leadership" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['leadership'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="leadership" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['leadership'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="leadership" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['leadership'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="leadership" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['leadership'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="leadership" id="poor" value="poor"></td></tr>
<tr>
<td>Peer Relations</td>
<td align="center"><input <?php if(!(strcmp($_POST['peer_relations'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="peer_relations" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['peer_relations'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="peer_relations" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['peer_relations'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="peer_relations" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['peer_relations'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="peer_relations" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['peer_relations'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="peer_relations" id="poor" value="poor"></td></tr>
<tr>
<td>Concern for Others</td>
<td align="center"><input <?php if(!(strcmp($_POST['concern_for_others'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="concern_for_others" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['concern_for_others'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="concern_for_others" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['concern_for_others'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="concern_for_others" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['concern_for_others'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="concern_for_others" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['concern_for_others'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="concern_for_others" id="poor" value="poor"></td></tr>
<tr>
<td>Responsibility</td>
<td align="center"><input <?php if(!(strcmp($_POST['responsibility'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="responsibility" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['responsibility'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="responsibility" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['responsibility'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="responsibility" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['responsibility'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="responsibility" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['responsibility'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="responsibility" id="poor" value="poor"></td></tr>
<tr>
<td>Resourcefulness</td>
<td align="center"><input <?php if(!(strcmp($_POST['resourcefulness'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="resourcefulness" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['resourcefulness'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="resourcefulness" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['resourcefulness'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="resourcefulness" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['resourcefulness'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="resourcefulness" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['resourcefulness'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="resourcefulness" id="poor" value="poor"></td></tr>
<tr>
<td>Creatvity</td>
<td align="center"><input <?php if(!(strcmp($_POST['creativity'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="creativity" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['creativity'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="creativity" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['creativity'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="creativity" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['creativity'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="creativity" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['creativity'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="creativity" id="poor" value="poor"></td></tr>
<tr>
<td>Confidence</td>
<td align="center"><input <?php if(!(strcmp($_POST['confidence'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="confidence" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['confidence'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="confidence" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['confidence'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="confidence" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['confidence'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="confidence" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['confidence'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="confidence" id="poor" value="poor"></td></tr>
<tr>
<td>Sense of Humor</td>
<td align="center"><input <?php if(!(strcmp($_POST['humor'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="humor" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['humor'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="humor" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['humor'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="humor" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['humor'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="humor" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['humor'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="humor" id="poor" value="poor"></td></tr>
<tr>
<td>Integrity</td>
<td align="center"><input <?php if(!(strcmp($_POST['integrity'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" name="integrity" id="excellent" value="excellent"></td>
<td align="center"><input <?php if(!(strcmp($_POST['integrity'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" name="integrity" id="good" value="good"></td>
<td align="center"><input <?php if(!(strcmp($_POST['integrity'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" name="integrity" id="average" value="average"></td>
<td align="center"><input <?php if(!(strcmp($_POST['integrity'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" name="integrity" id="fair" value="fair"></td>
<td align="center"><input <?php if(!(strcmp($_POST['integrity'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" name="integrity" id="poor" value="poor"></td></tr>
</table>

<p></p>
<table><tr>
<td width="200"><b>Academics</b></td>
<td width="80" align="center"><b>Above Grade Level</b></td>
<td width="80" align="center"><b>On Grade Level</b></td>
<td width="80" align="center"><b>Below Grade Level</b></td></tr>
<tr>
<td>Reading Fluency</td>
<td align="center"><input <?php if(!(strcmp($_POST['reading_fluency'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="reading_fluency" id="above_level" value="above_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['reading_fluency'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="reading_fluency" id="on_level" value="on_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['reading_fluency'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="reading_fluency" id="below_level" value="below_level"></td></tr>
<tr>
<td>Reading Comprehension</td>
<td align="center"><input <?php if(!(strcmp($_POST['reading_comp'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="reading_comp" id="above_level" value="above_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['reading_comp'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="reading_comp" id="on_level" value="on_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['reading_comp'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="reading_comp" id="below_level" value="below_level"></td></tr>
<tr>
<td>Oral Language</td>
<td align="center"><input <?php if(!(strcmp($_POST['oral_language'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="oral_language" id="above_level" value="above_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['oral_language'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="oral_language" id="on_level" value="on_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['oral_language'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="oral_language" id="below_level" value="below_level"></td></tr>
<tr>
<td>Writing Content</td>
<td align="center"><input <?php if(!(strcmp($_POST['writing_content'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="writing_content" id="above_level" value="above_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['writing_content'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="writing_content" id="on_level" value="on_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['writing_content'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="writing_content" id="below_level" value="below_level"></td></tr>
<tr>
<td>Writing Style</td>
<td align="center"><input <?php if(!(strcmp($_POST['writing_style'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="writing_style" id="above_level" value="above_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['writing_style'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="writing_style" id="on_level" value="on_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['writing_style'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="writing_style" id="below_level" value="below_level"></td></tr>
<tr>
<td>Writing Mechanics</td>
<td align="center"><input <?php if(!(strcmp($_POST['writing_mechanics'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="writing_mechanics" id="above_level" value="above_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['writing_mechanics'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="writing_mechanics" id="on_level" value="on_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['writing_mechanics'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="writing_mechanics" id="below_level" value="below_level"></td></tr>
<tr>
<td>Math Computational Skills</td>
<td align="center"><input <?php if(!(strcmp($_POST['math_skills'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="math_skills" id="above_level" value="above_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['math_skills'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="math_skills" id="on_level" value="on_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['math_skills'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="math_skills" id="below_level" value="below_level"></td></tr>
<tr>
<td>Math Comprehension</td>
<td align="center"><input <?php if(!(strcmp($_POST['math_comp'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="math_comp" id="above_level" value="above_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['math_comp'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="math_comp" id="on_level" value="on_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['math_comp'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="math_comp" id="below_level" value="below_level"></td></tr>
<tr>
<td>Problem Solving</td>
<td align="center"><input <?php if(!(strcmp($_POST['problem_solving'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="problem_solving" id="above_level" value="above_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['problem_solving'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="problem_solving" id="on_level" value="on_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['problem_solving'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="problem_solving" id="below_level" value="below_level"></td></tr>
<tr>
<td>Critical Thinking</td>
<td align="center"><input <?php if(!(strcmp($_POST['critical_thinking'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="critical_thinking" id="above_level" value="above_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['critical_thinking'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="critical_thinking" id="on_level" value="on_level"></td>
<td align="center"><input <?php if(!(strcmp($_POST['critical_thinking'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" name="critical_thinking" id="below_level" value="below_level"></td></tr>
</table>
<p></p>

<p>What are the student's greatest strengths?<br>
<textarea id="greatest_strengths" name="greeatest_strengths" rows="7" cols="80" ></textarea></p>

<p>What are the student's greatest challenges?<br>
<textarea id="greatest_challenges" name="greeatest_challenges" rows="7" cols="80" ></textarea></p>

<p>Please provide any additional information that may help us make an informed decision.<br>
<textarea id="other_info" name="other_info" rows="7" cols="80" ></textarea></p>

<p></p>


<button type="submit" value="_form_submit" name="_form_submit">Submit Recommendation </button>
<button type="reset" value="Clear" name="Clear All">Clear Form</button>

<?php 
include('../applicationFooter.html');
?>

</form>
