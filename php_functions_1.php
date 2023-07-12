<?php

function checkVowelOrConsonant($char) {
    $lowerChar = strtolower($char);

    if (ctype_alpha($lowerChar)) {
        $vowels = array('a', 'e', 'i', 'o', 'u');

        if (in_array($lowerChar, $vowels)) {
            return 'vowel';
        } else {
            return 'consonant';
        }
    } else {
        return 'number';
    }
}

if (isset($_POST['submit'])) {
    $character = $_POST['character'];

    if (is_numeric($character)) {
        $result = 'It is a number.';
    } else {
        $result = checkVowelOrConsonant($character);
        $result = "It is a $result.";
    }

    echo "The input '$character' is: $result";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Number 1</title>
</head>
<body>
    <form method="POST" action="">
        <label for="character">Enter a character:</label>
        <input type="text" id="character" name="character" required>
        <button type="submit" name="submit">Check</button>
    </form>
</body>
</html>
