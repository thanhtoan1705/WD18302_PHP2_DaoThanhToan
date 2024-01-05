<?php
echo "PC06598 - Lab1.1 <br>";
$course = [
    's1' => 'Javascript nâng cao',
    's2' => 'PHP2',
    's3' => 'Dự Án 1'
];

/**
 * Hàm này để lấy ra mảng tuần tự của khóa học
 * @return array
 */

//model
function get_courses(): array
{
    global $course;
    return array_values($course);
}
// get_courses();
// var_dump(get_courses());

/**
 * @param string $course
 * 
 * Hàm này kiểm tra xem có khóa học gì đó không
 * 
 */

function find_by_semester($semester)
{
    global $course;
    return (array_key_exists($semester, $course) ? $course[$semester] : 'Invalid course');
}
// echo find_by_semester("s2");

//controller
$list_of_courses = get_courses();
$semester = (!empty($_GET['semester']) ? $_GET['semester'] : '');
$course_name = find_by_semester($semester);
?>


<!--view-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1.1</title>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Khóa học <?= $course_name ?></h2>
        <form action="" class="mb-4">
            <div class="input-group">
                <select name="semester" class="form-select" aria-label="Select semester">
                    <?php foreach ($course as $key => $value) : ?>
                        <option value="<?= $key ?>"><?= $value ?></option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" class="btn btn-primary">Tìm khóa học</button>
            </div>
        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts here if needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
