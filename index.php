<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time</title>
</head>
<body>
    <p>
        <?php

            date_default_timezone_set('America/New_York');

            $nextWeek = time() + (7 * 24 * 60 * 60);
            echo 'Now:        '. date('Y-m-d') ."\n";
            echo 'Next Week     '. date('Y-m-d', $nextWeek) ."\n";

         
            $now = new DateTime();
            $nextWeek = new DateTime('today +1 week');

        ?>
    </p>
</body>
</html>