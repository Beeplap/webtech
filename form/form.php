<?php
if (isset($_POST["submit"])) {
    $entered_name = $_POST['name'];
    

    if ($entered_name == "Beeplap") {
        echo "<p style='text-align: center;'>Matched</p>";
    } else {
        echo "<p style='text-align: center ;'>Not Matched</p>";
        
    }
}
?>