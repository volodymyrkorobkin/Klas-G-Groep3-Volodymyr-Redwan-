<header class="shadow ">
    <section class="flex aling-center wrap-height main-margin space-between tablet-header">
        <a href="<?php echo $PATH ?>" class="wrap-height">
            <img src="<?php echo $PATH ?>assets/logo-2.svg" alt="logo" class="wrap-height" id="header-img-sty">
        </a>
        <nav class="flex align-center">
            <input type="checkbox" id="burger-menu-checkbox" class="hidden">
            <ul class="no-decoration">
                <li><a href="<?php echo $PATH ?>pages/home.php" class="no-decoration">Home</a></li>
                <li><a href="<?php echo $PATH ?>pages/about-us.php" class="no-decoration">About</a></li>
                <li><a href="<?php echo $PATH ?>pages/menu.php" class="no-decoration">Menu</a></li>
                <li><a href="<?php echo $PATH ?>pages/galery.php" class="no-decoration">Galerij</a></li>
                <li><a href="<?php echo $PATH ?>pages/reserveren.php" class="no-decoration">Reserveren</a></li>
            </ul>
            <label for="burger-menu-checkbox" id="burger-menu-label">
                <img src="<?php echo $PATH ?>assets/burger-menu.svg" alt="burger-menu" id="burger-menu">
            </label>
        </nav>
    </section>
</header>