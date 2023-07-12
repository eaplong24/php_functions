<?php

function deleteRecurringElements($sortedList) {
    $result = [];
    $prevElement = null;

    foreach ($sortedList as $element) {
        if ($element !== $prevElement) {
            $result[] = $element;
        }
        $prevElement = $element;
    }

    return array_values($result);
}

if (isset($_POST['submit'])) {
    $inputValues = [];
    for ($i = 1; $i <= 10; $i++) {
        $inputField = 'input' . $i;
        $value = $_POST[$inputField];
        if (!empty($value)) {
            $inputValues[] = $value;
        }
    }

    $uniqueValues = deleteRecurringElements($inputValues);
    print_r($uniqueValues);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Number 4</title>
</head>
<body>
    <form method="POST" action="">
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <label for="input<?php echo $i; ?>">Input <?php echo $i; ?>:</label>
            <input type="text" id="input<?php echo $i; ?>" name="input<?php echo $i; ?>"><br>
        <?php } ?>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>