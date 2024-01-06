<?php
$course = [
    's1' => 'course1',
    's2' => 'course2',
    's3' => 'course3'
];
//model
function get_courses()
{
    global $course;
    return array_values($course);
}
function find_by_semesters($semesters)
{
    global $course;
    return (array_key_exists($semesters, $course)? $course[$semesters] : 'Invalid course');
}
//controller
$list_of_courses = get_courses();
$semesters = (!empty($_GET['semester']) ? $_GET['semester'] : '');
$course_name = find_by_semesters($semesters);
$page_content = $course_name;
?>
<!-- view -->
<?= $page_content; ?>
<select name="course">

    <?php
    foreach ($list_of_courses as $course_name): ?>
        <option>
            <?= $course_name ?>
        </option>

    <?php endforeach; ?>

</select>