<?php
function get_courses()
{
    include 'data.php';
    return array_values($course);
}
function find_by_semesters($semesters)
{
    include 'data.php';
    return (array_key_exists($semesters, $course) ? $course[$semesters] : ' Mời bạn chọn ');
}

?>