<header class="shadow tablet-header ">
    <section class="flex aling-center wrap-height main-margin space-between ">
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
                <li id="openDropDown">
                    <a class="no-decoration">Meer...</a>

                    <ul class="dropdown" id="dropdown">
                        <li><a href="<?php echo $PATH ?>pages/reserveren.php" class="no-decoration">Reserveren</a></li>
                        <li><a href="<?php echo $PATH ?>pages/vacature.php" class="no-decoration">Vacature</a></li>
                        <li><a href="<?php echo $PATH ?>pages/dranken.php" class="no-decoration">Dranken</a></li>
                        <li><a href="<?php echo $PATH ?>pages/arrangementen.php" class="no-decoration">Arrangementen</a></li>
                        <li><a href="<?php echo $PATH ?>pages/recensies.php" class="no-decoration">Reviews</a></li>
                    </ul>

                </li>
            </ul>
            <label for="burger-menu-checkbox" id="burger-menu-label">
                <img src="<?php echo $PATH ?>assets/burger-menu.svg" alt="burger-menu" id="burger-menu">
            </label>
        </nav>
    </section>
</header>