<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator</title>
</head>
<body>

  <h1>Simple Calculator</h1>

  <form method="post">
    <label for="num1">First Number:</label>
    <input type="number" name="num1" id="num1"><br><br>

    <label for="operator">Operator (+, -, *, /):</label>
    <select name="operator" id="operator">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select><br><br>

    <label for="num2">Second Number:</label>
    <input type="number" name="num2" id="num2"><br><br>

    <button type="submit">Calculate</button>
  </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num1 = $_POST["num1"];
  $operator = $_POST["operator"];
  $num2 = $_POST["num2"];

  switch ($operator) {
    case "+":
      $result = $num1 + $num2;
      break;
    case "-":
      $result = $num1 - $num2;
      break;
    case "*":
      $result = $num1 * $num2;
      break;
    case "/":
      if ($num2 == 0) {
        echo "Error: Division by zero!";
      } else {
        $result = $num1 / $num2;
      }
      break;
    default:
      echo "Invalid operator!";
  }

  if (isset($result)) {
    echo "<p>Result: $num1 $operator $num2 = $result</p>";
  }
}
?>

</body>
</html>