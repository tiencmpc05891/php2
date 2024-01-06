<?php
include 'model.php';
$list_of_courses = get_courses();
$semesters = (!empty($_GET['semester']) ? $_GET['semester'] : '');
$course_name = find_by_semesters($semesters);
$page_content = $course_name;

include 'view.php';

?>