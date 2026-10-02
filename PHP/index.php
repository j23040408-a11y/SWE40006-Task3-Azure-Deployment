<?php
$studentName = "Carol Au Wai Yee";
$studentId = "106214098";
$unit = "SWE40006 Software Deployment and Evolution";
$task = "Deployment Portfolio Task 3";
$platform = "PHP Web Application";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWE40006 PHP Deployment</title>
</head>
<body>

    <h1>SWE40006 PHP Web Application</h1>

    <h2>Deployment Portfolio Task 3</h2>

    <p>
        This web application was developed using PHP and is prepared
        for deployment to Microsoft Azure.
    </p>

    <hr>

    <p><strong>Student Name:</strong> <?php echo $studentName; ?></p>
    <p><strong>Student ID:</strong> <?php echo $studentId; ?></p>
    <p><strong>Unit:</strong> <?php echo $unit; ?></p>
    <p><strong>Task:</strong> <?php echo $task; ?></p>
    <p><strong>Technology:</strong> <?php echo $platform; ?></p>

    <hr>

    <p>
        <strong>PHP Version:</strong>
        <?php echo PHP_VERSION; ?>
    </p>

    <p>
        <strong>Application Status:</strong>
        PHP is running successfully.
    </p>

</body>
</html>
