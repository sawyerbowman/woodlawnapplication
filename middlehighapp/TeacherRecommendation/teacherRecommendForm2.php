<?php
/*
 * Copyright 2013 by Sawyer Bowman and Dwayne Bowman. This program is 
 * made originally for Woodlawn School, a nonprofit private school in
 * Davidson, NC. It comes with absolutely no warranty.  You can redistribute 
 * and/or modify it under the terms of the GNU Public License as published
 * by the Free Software Foundation (see <http://www.gnu.org/licenses/).
*/

/*
 *  a form for a teacher recommendation form
 *	@Sawyer Bowman
 *	@version 12/28/2013
 *
 */

$datetime = date('M-d-Y-g-i-a-e');
?>
<p>Your recommendation is being processed... Please wait!</p>

<form method="POST" id="teacherRecommendForm2" name="teacherRecommendForm2"
action="http://us.1.p10.webhosting.yahoo.com/forms?login=dwayneb">

<?php
if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
<input type="hidden" name="next_url" value="http://localhost/middlehighapp/TeacherRecommendations/teacherRecommendThankYou.php">
<?php } else { ?>
<input type="hidden" name="next_url" value="http://www.woodlawnschool.org/application/teacher_recommendation/teacherRecommendThankYou.php">
<?php } ?>

<input type="hidden" name="time_date" value="<?php echo($datetime);?>">

<?php 
include_once("teacherRecommendEdit.php");
?>

<input type="hidden" type="text" size="20"
                        id="firstname" name="firstname" value="<?php echo($_POST['firstname']); ?>">
<input type="hidden" type="text" size="20"
                        id="lastname" name="lastname" value="<?php echo($_POST['lastname']); ?>">

<input type="hidden" type="text" size="30" id="teachername" name="teachername" value="<?php echo($_POST['teachername']); ?>"> 
<input type="hidden" type="text" size="30" id="curriculum" name="curriculum" value="<?php echo($_POST['curriculum']); ?>"> 
<select style="display:none;" id="curgrade" name="curgrade"><?php
$grades = array("Select", "Kindergarten", "1st grade", "2nd grade", "3rd grade", "4th grade", "5th grade", "6th grade", "7th grade", "8th grade", "9th grade", "10th grade", "11th grade", "12th grade");
foreach ($grades as $grade) {
        echo "<option value'" . $grade . "' ";
        if ($grade == $_POST['curgrade']){
                echo(SELECTED);
        }
        echo ">" . $grade . "</option>";
}
?>
</select>
<input type="hidden" type="text" size="30" id="school" name="school" value="<?php echo($_POST['school']); ?>">
 <input type="hidden" type="text" size="30" id="phone" name="phone" value="<?php echo($_POST['phone']); ?>">

<input <?php if(!(strcmp($_POST['workhabits'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="workhabits" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['workhabits'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="workhabits" id="good" value="good">
<input <?php if(!(strcmp($_POST['workhabits'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="workhabits" id="average" value="average">
<input <?php if(!(strcmp($_POST['workhabits'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="workhabits" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['workhabits'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="workhabits" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['motivation'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="motivation" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['motivation'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="motivation" id="good" value="good">
<input <?php if(!(strcmp($_POST['motivation'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="motivation" id="average" value="average">
<input <?php if(!(strcmp($_POST['motivation'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="motivation" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['motivation'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="motivation" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['works_independently'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="works_independently" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['works_independently'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="works_independently" id="good" value="good">
<input <?php if(!(strcmp($_POST['works_independently'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="works_independently" id="average" value="average">
<input <?php if(!(strcmp($_POST['works_independently'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="works_independently" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['works_independently'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="works_independently" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['works_cooperatively'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="works_cooperatively" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['works_cooperatively'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="works_cooperatively" id="good" value="good">
<input <?php if(!(strcmp($_POST['works_cooperatively'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="works_cooperatively" id="average" value="average">
<input <?php if(!(strcmp($_POST['works_cooperatively'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="works_cooperatively" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['works_cooperatively'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="works_cooperatively" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['curiosity'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="curiosity" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['curiosity'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="curiosity" id="good" value="good">
<input <?php if(!(strcmp($_POST['curiosity'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="curiosity" id="average" value="average">
<input <?php if(!(strcmp($_POST['curiosity'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="curiosity" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['curiosity'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="curiosity" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['organizational'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="organizational" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['organizational'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="organizational" id="good" value="good">
<input <?php if(!(strcmp($_POST['organizational'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="organizational" id="average" value="average">
<input <?php if(!(strcmp($_POST['organizational'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="organizational" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['organizational'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="organizational" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['behavior'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="behavior" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['behavior'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="behavior" id="good" value="good">
<input <?php if(!(strcmp($_POST['behavior'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="behavior" id="average" value="average">
<input <?php if(!(strcmp($_POST['behavior'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="behavior" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['behavior'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="behavior" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['passion'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="passion" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['passion'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="passion" id="good" value="good">
<input <?php if(!(strcmp($_POST['passion'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="passion" id="average" value="average">
<input <?php if(!(strcmp($_POST['passion'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="passion" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['passion'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="passion" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['attendance'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="attendance" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['attendance'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="attendance" id="good" value="good">
<input <?php if(!(strcmp($_POST['attendance'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="attendance" id="average" value="average">
<input <?php if(!(strcmp($_POST['attendance'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="attendance" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['attendance'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="attendance" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['leadership'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="leadership" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['leadership'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="leadership" id="good" value="good">
<input <?php if(!(strcmp($_POST['leadership'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="leadership" id="average" value="average">
<input <?php if(!(strcmp($_POST['leadership'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="leadership" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['leadership'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="leadership" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['peer_relations'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="peer_relations" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['peer_relations'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="peer_relations" id="good" value="good">
<input <?php if(!(strcmp($_POST['peer_relations'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="peer_relations" id="average" value="average">
<input <?php if(!(strcmp($_POST['peer_relations'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="peer_relations" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['peer_relations'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="peer_relations" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['concern_for_others'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="concern_for_others" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['concern_for_others'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="concern_for_others" id="good" value="good">
<input <?php if(!(strcmp($_POST['concern_for_others'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="concern_for_others" id="average" value="average">
<input <?php if(!(strcmp($_POST['concern_for_others'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="concern_for_others" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['concern_for_others'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="concern_for_others" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['responsibility'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="responsibility" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['responsibility'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="responsibility" id="good" value="good">
<input <?php if(!(strcmp($_POST['responsibility'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="responsibility" id="average" value="average">
<input <?php if(!(strcmp($_POST['responsibility'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="responsibility" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['responsibility'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="responsibility" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['resourcefulness'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="resourcefulness" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['resourcefulness'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="resourcefulness" id="good" value="good">
<input <?php if(!(strcmp($_POST['resourcefulness'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="resourcefulness" id="average" value="average">
<input <?php if(!(strcmp($_POST['resourcefulness'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="resourcefulness" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['resourcefulness'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="resourcefulness" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['creativity'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="creativity" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['creativity'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="creativity" id="good" value="good">
<input <?php if(!(strcmp($_POST['creativity'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="creativity" id="average" value="average">
<input <?php if(!(strcmp($_POST['creativity'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="creativity" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['creativity'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="creativity" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['confidence'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="confidence" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['confidence'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="confidence" id="good" value="good">
<input <?php if(!(strcmp($_POST['confidence'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="confidence" id="average" value="average">
<input <?php if(!(strcmp($_POST['confidence'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="confidence" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['confidence'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="confidence" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['humor'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="humor" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['humor'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="humor" id="good" value="good">
<input <?php if(!(strcmp($_POST['humor'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="humor" id="average" value="average">
<input <?php if(!(strcmp($_POST['humor'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="humor" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['humor'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="humor" id="poor" value="poor">

<input <?php if(!(strcmp($_POST['integrity'],"excellent"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="integrity" id="excellent" value="excellent">
<input <?php if(!(strcmp($_POST['integrity'],"good"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="integrity" id="good" value="good">
<input <?php if(!(strcmp($_POST['integrity'],"average"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="integrity" id="average" value="average">
<input <?php if(!(strcmp($_POST['integrity'],"fair"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="integrity" id="fair" value="fair">
<input <?php if(!(strcmp($_POST['integrity'],"poor"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="integrity" id="poor" value="poor">


<input <?php if(!(strcmp($_POST['reading_fluency'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="reading_fluency" id="above_level" value="above_level">
<input <?php if(!(strcmp($_POST['reading_fluency'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="reading_fluency" id="on_level" value="on_level">
<input <?php if(!(strcmp($_POST['reading_fluency'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="reading_fluency" id="below_level" value="below_level">

<input <?php if(!(strcmp($_POST['reading_comp'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="reading_comp" id="above_level" value="above_level">
<input <?php if(!(strcmp($_POST['reading_comp'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="reading_comp" id="on_level" value="on_level">
<input <?php if(!(strcmp($_POST['reading_comp'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="reading_comp" id="below_level" value="below_level">

<input <?php if(!(strcmp($_POST['oral_language'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="oral_language" id="above_level" value="above_level">
<input <?php if(!(strcmp($_POST['oral_language'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="oral_language" id="on_level" value="on_level">
<input <?php if(!(strcmp($_POST['oral_language'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="oral_language" id="below_level" value="below_level">

<input <?php if(!(strcmp($_POST['writing_content'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="writing_content" id="above_level" value="above_level">
<input <?php if(!(strcmp($_POST['writing_content'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="writing_content" id="on_level" value="on_level">
<input <?php if(!(strcmp($_POST['writing_content'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="writing_content" id="below_level" value="below_level">

<input <?php if(!(strcmp($_POST['writing_style'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="writing_style" id="above_level" value="above_level">
<input <?php if(!(strcmp($_POST['writing_style'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="writing_style" id="on_level" value="on_level">
<input <?php if(!(strcmp($_POST['writing_style'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="writing_style" id="below_level" value="below_level">

<input <?php if(!(strcmp($_POST['writing_mechanics'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="writing_mechanics" id="above_level" value="above_level">
<input <?php if(!(strcmp($_POST['writing_mechanics'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="writing_mechanics" id="on_level" value="on_level">
<input <?php if(!(strcmp($_POST['writing_mechanics'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="writing_mechanics" id="below_level" value="below_level">

<input <?php if(!(strcmp($_POST['math_skills'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="math_skills" id="above_level" value="above_level">
<input <?php if(!(strcmp($_POST['math_skills'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="math_skills" id="on_level" value="on_level">
<input <?php if(!(strcmp($_POST['math_skills'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="math_skills" id="below_level" value="below_level">

<input <?php if(!(strcmp($_POST['math_comp'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="math_comp" id="above_level" value="above_level">
<input <?php if(!(strcmp($_POST['math_comp'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="math_comp" id="on_level" value="on_level">
<input <?php if(!(strcmp($_POST['math_comp'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="math_comp" id="below_level" value="below_level">

<input <?php if(!(strcmp($_POST['problem_solving'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="problem_solving" id="above_level" value="above_level">
<input <?php if(!(strcmp($_POST['problem_solving'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="problem_solving" id="on_level" value="on_level">
<input <?php if(!(strcmp($_POST['problem_solving'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="problem_solving" id="below_level" value="below_level">

<input <?php if(!(strcmp($_POST['critical_thinking'],"above_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="critical_thinking" id="above_level" value="above_level">
<input <?php if(!(strcmp($_POST['critical_thinking'],"on_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="critical_thinking" id="on_level" value="on_level">
<input <?php if(!(strcmp($_POST['critical_thinking'],"below_level"))) {echo 'checked="checked"';}?>
    type="Radio" style="display:none;" name="critical_thinking" id="below_level" value="below_level">

<textarea style="display:none;" id="greatest_strengths" name="greatest_strengths" rows="7" cols="80" ></textarea>

<textarea style="display:none;" id="greatest_challenges" name="greatest_challenges" rows="7" cols="80" ></textarea>

<textarea style="display:none;" id="other_info" name="other_info" rows="7" cols="80" ></textarea>

<button type="submit" value="_form_submit" name="_form_submit">Submit Recommendation </button>
<button type="reset" value="Clear" name="Clear All">Clear Form</button>

<?php 
include('../applicationFooter.html');
?>

</form>

<script type="text/javascript">
document.teacherRecommendForm2.submit();
</script>
