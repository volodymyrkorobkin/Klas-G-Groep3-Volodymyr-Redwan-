<?php
$PATH = "../";

$head = [
    "title" => "Eat Fish Restaurant",
    "styles" => ["{$PATH}css/style.css"],
    "scripts" => ["{$PATH}js/zoom.js", "{$PATH}js/slideshow.js"]
];

?>

<!DOCTYPE html>
<html lang="nl">
<?php include $PATH . 'php/head.php'; ?>
<body>
<?php include $PATH . 'php/header.php'; ?>
<main class="main-margin flex-column gap-100">

    <section class="block" id="slideshow-wrap">
        <section id="slides-wrap" class="flex">
            <img src="../img/slide1.png">
            <img src="../img/slide2.png">
        </section>

        <button onclick="prevSlide()" id="prevSlide">
            <
        </button>

        <button onclick="nextSlide()" id="nextSlide">
            >
        </button>
    </section>

    <section class="block flex space-between">
        <img src="../img/fish-dish 2.png">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros elit, dictum a scelerisque maximus, accumsan a nunc. Etiam nunc ante, bibendum vitae dapibus sit amet, bibendum at orci. Mauris interdum, arcu ullamcorper mattis aliquam, metus odio finibus tellus, ut feugiat ligula felis a metus. Etiam efficitur ante sed tortor efficitur, vel congue purus viverra. Quisque ac turpis vehicula, ultricies arcu id, finibus nibh. Suspendisse potenti. Nam id ante mauris. Phasellus bibendum, libero nec varius faucibus, quam risus suscipit libero, eget luctus justo libero eget odio. </p>
    </section>
    
</main>
<?php include $PATH . 'php/footer.php'; ?>
</body>
</html>