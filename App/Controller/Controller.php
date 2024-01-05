<?php
include __DIR__ . '/../Model/model.php';

$list_of_courses = get_courses();
$semester = (!empty($_GET['semester']) ? $_GET['semester'] : '');
$course_name = find_by_semester($semester);
// var_dump($semester);

include __DIR__ . '/../Views/view.php';
?>