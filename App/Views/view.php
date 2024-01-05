<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1.2</title>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <?php include __DIR__ . '/../Model/data.php'; ?>
        <h2 class="mb-4">Khóa học <?= $course_name ?></h2>
        <form action="" method="get" class="mb-4">
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
