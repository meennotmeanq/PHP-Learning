<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & HTML</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>PHP ทำงานร่วมกับ HTML</h1>
    <?php

    echo "Kaveekit<br>";
    echo "<strong>Workshop</strong>";
    echo "<h1>เรียน php เบื้องต้น</h1>";

    print("Kaveekit print");
    ?>

    <form action="">
        <label for="">firstname</label>
        <input type="text" value="<?php echo "Kaveekit" ?>">
        <label for="">surname</label>
        <input type="text" value="<?php echo "Sawaengha" ?>">
        <label for="">email</label>
        <input type="email" value="<?php echo "Example@Email.com" ?>">
        <button type="submit">submit</button>

    </form>
</body>

</html>