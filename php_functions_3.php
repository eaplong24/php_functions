<?php

function isDivisibleByThree($number) {
    if ($number % 3 == 0) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    if (isDivisibleByThree($number)) {
        $message = "$number is divisible by 3.";
    } else {
        $message = "$number is not divisible by 3.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Number 3</title>
</head>
<body>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="submit">Check</button>
    </form>
    <?php if (isset($message)) { echo "<p>$message</p>"; } ?>
</body>
</html>
