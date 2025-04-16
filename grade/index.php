<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>

<body>
    <h1>Grade Calculator</h1>
    <form method="post">
        <label for="percentage">Enter your percentage:</label>
        <input type="number" name="percentage" id="percentage">
        <button type="submit">Calculate Grade</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $percentage = (float) $_POST["percentage"];

        if ($percentage < 0 || $percentage > 100) {
            echo "<p style='color: red;'>Invalid percentage. Please enter a number between 0 and 100.</p>";
        } else {
            if ($percentage >= 90) {
                $grade = "A+";
            } elseif ($percentage >= 80) {
                $grade = "A";
            } elseif ($percentage >= 70) {
                $grade = "A-";

            } elseif ($percentage >= 60) {
                $grade = "B+";
            } elseif ($percentage >= 50) {
                $grade = "B";
            } elseif ($percentage >= 40) {
                $grade = "C";
            } elseif ($percentage >= 33) {
                $grade = "D";
            } else {
                $grade = "Fail";
            }

            echo "<p>Your percentage is: $percentage</p>";
            echo "<p>Your grade is: $grade</p>";
        }
    }
    ?>
</body>

</html>