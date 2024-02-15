<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $head["title"] ?></title>
    <link rel="icon" href="../assets/logo-4.svg">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <?php
        foreach ($head["styles"] as $style) {
            echo "<link rel='stylesheet' href='$style'>";
        }

        foreach ($head["scripts"] as $script) {
            echo "<script src='$script'></script>";
        }
    ?>
</head>