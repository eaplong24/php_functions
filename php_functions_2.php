<?php

function convertDigitToWord($number) {
    $wordMap = array(
        0 => 'Zero',
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        4 => 'Four',
        5 => 'Five',
        6 => 'Six',
        7 => 'Seven',
        8 => 'Eight',
        9 => 'Nine'
    );

    $digits = str_split($number);
    $result = '';

    foreach ($digits as $digit) {
        $result .= $wordMap[$digit] . ' ';
    }

    return trim($result);
}

if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    $word = convertDigitToWord($number);
    echo "The word counterpart of $number is: $word";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Number 2</title>
</head>
<body>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <button type="submit" name="submit">Convert</button>
    </form>
</body>
</html>