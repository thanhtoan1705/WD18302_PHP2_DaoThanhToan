<?php
function get_courses(): array
{
    require 'data.php';
    return array_values($course);
}
function find_by_semester($semester)
{
    require 'data.php';
    return (array_key_exists($semester, $course) ? $course[$semester] : 'Invalid course');
}