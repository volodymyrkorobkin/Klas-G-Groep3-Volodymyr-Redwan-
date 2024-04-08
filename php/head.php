<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $head["title"] ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../assets/logo-4.svg">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="description" content="Eat Fish Restaurant">
    <meta name="keywords" content="fish, restaurant, food, eat, menu">
    <meta name="author" content="Volodymyr en Redwan">

    <?php
        foreach ($head["styles"] as $style) {
            echo "<link rel='stylesheet' href='$style'>";
        }

        foreach ($head["scripts"] as $script) {
            echo "<script src='$script'></script>";
        }
    ?>
</head>