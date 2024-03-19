<?php
$PATH = "../";

$head = [
    "title" => "Home - Eat Fish Restaurant",
    "styles" => ["{$PATH}css/style.css"],
    "scripts" => ["{$PATH}js/slideshow.js", "{$PATH}js/read-more.js", "{$PATH}js/sticky-header.js", "{$PATH}js/transform-view.js"]
];

?>

<!DOCTYPE html>
<html lang="nl">
<?php include $PATH . 'php/head.php'; ?>
<body>
<?php include $PATH . 'php/header.php'; ?>
<main class="main-margin flex-column gap-50 padding-50-0 tablet-home-main">

    <h1 class="center-text tablet-only">Home</h1>

    <section id="slideshow-wrap" class="shadow">
        <section id="slides-wrap" class="flex">
            <figure>
                <img src="../img/home-1.png">
            </figure>
            <figure>
                <img src="../img/home-2.png">
            </figure>
            <figure>
                <img src="../img/home-2.png">
            </figure>
            <figure>
                <img src="../img/home-2.png">
            </figure>
        </section>

        <button onclick="prevSlide()" id="prevSlide">
            <
        </button>

        <button onclick="nextSlide()" id="nextSlide">
            >
        </button>
    </section>

    <article class="block flex space-between home-img-txt">
        <img src="../img/home-2.png" class="shadow transform-view">
        <p class="readmore">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros elit, dictum a scelerisque maximus, accumsan a nunc. Etiam nunc ante, bibendum vitae dapibus sit amet, bibendum at orci. Mauris interdum, arcu ullamcorper mattis aliquam, metus odio finibus tellus, ut feugiat ligula felis a metus. Etiam efficitur ante sed tortor efficitur, vel congue purus viverra. Quisque ac turpis vehicula, ultricies arcu id, finibus nibh. Suspendisse potenti. </p>
    </article>
    <article class="block flex-reverse space-between home-img-txt">
        <img src="../img/home-3.png" class="shadow transform-view">
        <p class="readmore">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Phasellus bibendum, libero nec varius faucibus, quam risus suscipit libero, eget luctus justo libero eget odio. </p>
    </article>
    <article class="block flex space-between home-img-txt">
        <img src="../img/home-4.png" class="shadow transform-view">
        <p class="readmore">Maecenas eros elit, dictum a scelerisque maximus, accumsan a nunc. Etiam nunc ante, bibendum vitae dapibus sit amet, bibendum at orci. Mauris interdum, arcu ullamcorper mattis aliquam, metus odio finibus tellus, ut feugiat ligula felis a metus. Etiam efficitur ante sed tortor efficitur, vel congue purus viverra. Quisque ac turpis vehicula, ultricies arcu id, finibus nibh. Suspendisse potenti. Nam id ante mauris. Phasellus bibendum, libero nec varius faucibus, quam risus suscipit libero, eget luctus justo libero eget odio. </p>
    </article>
    
</main>
<?php include $PATH . 'php/footer.php'; ?>
</body>
</html>