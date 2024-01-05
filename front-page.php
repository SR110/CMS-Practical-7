<?php get_header();?>


<!-- Start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coursify Courses</title>
</head>
<body>

<h1>Welcome to our Website - The Perfect Professional Course Site</h1>

<?php

$courses = [
    [
        'name' => 'PHP Essential Training',
        'code' => 'CS101',
        'instructor' => 'Prof. Parry Smith',
    ],
    [
        'name' => 'Statistics Fundamentals',
        'code' => 'STT201',
        'instructor' => 'Prof. Samantha Johnson',
    ],
    [
        'name' => 'Data Ingestioon with Python',
        'code' => 'ENG301',
        'instructor' => 'Prof. Kelly Paul',
    ],
];


foreach ($courses as $course) {
    echo "<h2>{$course['name']}</h2>";
    echo "<p>Course Code: {$course['code']}</p>";
    echo "<p>Instructor: {$course['instructor']}</p>";
    

    if ($course['name'] === 'PHP Essential Training') {
        echo "<p>This course is very useful for Content Management Systems.</p>";
    } else {
        echo "<p>Details for this course will be provided during the class.</p>";
    }

    echo "<hr>"; 
}
?>

</body>
</html>

<!-- End -->

<div class="container">
    <div class="row">
        <div class="col">
            <!-- Left Side -->
        </div>

        <div class="col">
            <!-- Right Side -->
        </div>
    </div>
</div>
<?php get_footer();?>