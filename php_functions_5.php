<?php

function isArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = strlen((string)$number);

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }

    return (int)$number === $sum;
}

if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    if (isArmstrongNumber($number)) {
        $message = "$number is an Armstrong Number.";
    } else {
        $message = "$number is not an Armstrong Number.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Number 5</title>
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
