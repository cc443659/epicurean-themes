<?php
header('Access-Control-Allow-Origin: *');
// header('Content-Type: text/css');

$thisdir = explode(DIRECTORY_SEPARATOR, __DIR__);
var_dump($thisdir);
echo "<br>";
$basedir = array_splice($thisdir, -count($thisdir), -2);
var_dump($basedir);
echo "<br>";
$basedir = implode(DIRECTORY_SEPARATOR, $basedir);
var_dump($basedir);
echo "<br>";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epicurean Themes - Booking Handle</title>
    <link rel="stylesheet" type="text/css" href="<?= "{$basedir}/styles.css" ?>" crossorigin="anonymous" referrerpolicy="origin">
</head>
<body>
    <!-- navigation -->
    <?php include "{$basedir}/assets/components/navbar.php"; ?>

    <!-- main body content -->
    <article>
        <p>This page would not be visible in production. It would handle the data, send to the database and then relay the user back to the home page.</p>
        <p>After the completion of the main functionality, it may also send a reciept. This would be a <em>Should Have</em> or <em>Could Have</em> feature on the MoSCoW prioritasion matrix.</p>
        <?php

        include './resources/db-connect.php';
        include './resources/validate-input.php';

        foreach ($_POST as $key => $value) {
            echo "<p>{$key} ";
            var_dump($value);
            echo "</p>";
        }

        $booking_datetime
        = $guest_amount
        = $first_name
        = $last_name
        = $dob
        = $email
        = $phone_no
        = $post_code 
        = $card_number
        = $name_on_card
        = $card_expiry_date
        = $cvv
        = "";

        $accommodations = [];

        ?>
        <!-- footer -->
        <?php include "{$basedir}/assets/components/footer.php"; ?>
    </article>

    <script type="module" src="<?= "{$basedir}/script.js" ?>"></script>
</body>
</html>
