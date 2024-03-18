<?php
$PATH = "../";

$head = [
    "title" => "About us - Eat Fish Restaurant",
    "styles" => ["{$PATH}css/style.css"],
    "scripts" => ["{$PATH}js/zoom.js", "{$PATH}js/slideshow.js", "{$PATH}js/reed-more.js"]
];

?>

<!DOCTYPE html>
<html lang="nl">
<?php include $PATH . 'php/head.php'; ?>


<body>
<?php include $PATH . 'php/header.php'; ?>

<main class="main-for-aboutus main-margin   ">
    <h1 class="h1-for-aboutus center-text gap-50 padding-50-0">About-Us</h1>
    <video autoplay muted loop>
        <source src="../img/Fish-cooking video-2.mp4" type="video/mp4">
    </video>
    <h2 id="h2-for-aboutus">Dive into Deliciousness: Indulge in Oceanic Delights at Our Premier Fish Restaurant, Where Every Bite Tells a Tale of Freshness and Flavor.</h2><br>
    <p id="exceptional-p-for-aboutus">At our premier fish restaurant, we invite you to immerse yourself in a culinary journey like no other. From the depths of the ocean to your plate, each dish is meticulously crafted to deliver an unparalleled dining experience. Our commitment to excellence is evident in every aspect, from sourcing the freshest seafood to the skilled hands of our chefs who transform it into delectable creations. Whether you're a seafood aficionado or new to the world of oceanic cuisine, our menu offers something for everyone to savor and enjoy. Come join us and embark on a flavorful adventure that celebrates the bounty of the sea in every mouthwatering bite.</p>

    <section class="class-for-aboutus-1">
        <img src="../img/resta-img.png " alt="">
        <article>
            <h3>Our Inspiring Journey</h3>
            <p class="reed-more">Our fish restaurant was born out of a shared passion for seafood and a desire to create a dining experience that celebrates the flavors of the ocean in every bite. What started as a humble dream has blossomed into a beloved culinary destination, where we strive to offer exceptional dishes that delight the senses and create lasting memories for our guests.</p>
        </article>
    </section>

    <section class="class-for-aboutus-2">
        <article>
            <h3>Sustainable Sourcing</h3>
            <p class="reed-more">At our restaurant, sustainability isn't just a buzzword—it's a way of life. We are committed to sourcing our seafood responsibly, partnering with local fishermen and trusted suppliers who share our dedication to preserving marine ecosystems for future generations. By prioritizing sustainable practices, we ensure that every ingredient on our menu is not only delicious but also environmentally conscious.</p>
        </article>
        <img src="../img/fish-sustaina.jfif" alt="">
    </section>

    <section class="class-for-aboutus-1">
        <img src="../img/quality.jfif " alt="">
        <article>
            <h3>Uncompromising Quality</h3>
            <p class="reed-more">Quality is at the heart of everything we do. From the moment our seafood is caught to the final presentation on your plate, we uphold the highest standards of freshness, flavor, and integrity. Our chefs meticulously select the finest ingredients, hand-crafting each dish with precision and passion to deliver an unparalleled dining experience that exceeds expectations.</p>
        </article>
    </section>

    <section class="class-for-aboutus-2">
        <article>
            <h3>A commitment To Health And Sustainability</h3>
            <p class="reed-more">We believe that good food should nourish both body and soul, which is why we prioritize health and sustainability in every aspect of our operation. Our menu features a diverse array of nutritious and wholesome seafood options, prepared with care to preserve their natural goodness. Additionally, we are dedicated to minimizing our environmental footprint, implementing eco-friendly practices such as waste reduction, energy conservation, and plastic-free packaging.</p>
        </article>
        <img src="../img/health and sust.webp" alt="">
    </section>

    <section class="class-for-aboutus-1">
        <img src="../img/support.jfif " alt="">
        <article>
            <h3>Supporting Our Community</h3>
            <p class="reed-more">As a locally owned and operated establishment, we are deeply rooted in our community and are proud to give back in meaningful ways. We partner with local organizations and charities to support initiatives that promote ocean conservation, marine education, and sustainable fishing practices. By fostering strong ties with our community, we strive to make a positive impact that extends far beyond our restaurant walls.</p>
        </article>
    </section>

    <section class="class-for-aboutus-2">
        <article>
            <h3>Join Us For a culinary Adventure </h3>
            <p class="reed-more">Ready to experience the magic of our fish restaurant for yourself? Book your table today and embark on a culinary adventure that celebrates the best of the ocean's bounty. We look forward to welcoming you and creating unforgettable memories together!</p>
        </article>
        <img src="../img/join us.webp" alt="">
    </section>




</main>
    
<?php include $PATH . 'php/footer.php'; ?>
</body>

</html>