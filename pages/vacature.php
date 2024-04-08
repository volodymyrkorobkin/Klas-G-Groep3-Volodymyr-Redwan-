<?php
$PATH = "../";

$head = [
    "title" => "About us - Eat Fish Restaurant",
    "styles" => ["{$PATH}css/style.css"],
    "scripts" => ["{$PATH}js/sticky-header.js", "{$PATH}js/search.js"]
];

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include $PATH . 'php/head.php'; ?>
</head>

<body>
<header>
    <?php include $PATH . 'php/header.php'; ?>
</header>

<main class="main-for-aboutus main-margin   ">
    
<h2 class="center-text vacat-head">Vacature</h2>
<p id="vacat-p">Welcome to Eat Fish, where passion for seafood meets exceptional service. If you're seeking a rewarding career in the culinary world, look no further. We're currently offering exciting job opportunities to join our dynamic team. Whether you're a seasoned chef, a skilled server, or an enthusiastic kitchen assistant, we have positions that match your expertise and ambition. Use the search bar below to explore our available positions and embark on a journey filled with flavor, teamwork, and growth. Join the Eat Fish family today and be part of something extraordinary.</p>

<section class="row">
  <article class="left">
    <h2>Menu</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <ul id="myMenu">
      <li><a href="#sch-mdw">Schoonmaak medewerker hotel</a></li>
      <li><a href="#frt-mdw">Frontoffice medewerker</a></li>
      <li><a href="#Bed-mdw">Medewerker Bediening</a></li>
      <li><a href="#facdi-mdw">Medewerker facilitaire dienst</a></li>
      <li><a href="#cockt-mdw">Medewerker Cocktailbar</a></li>
      <li><a href="#fiets-mdw">Medewerker Fietsverhuur</a></li>
      <li><a href="#tech-mdw">Medewerker technische dienst</a></li>
      <li><a href="#well-mdw">Medewerker Wellness</a></li>
      <li><a href="#pizchef-mdw">Pizza Chef</a></li>
    </ul>
  </article>
  
  <section class="right">
    <section class="vacature-sec" id="sch-mdw">
        <article class="vacature-art-cont">
            <h2>Schoonmaak medewerker hotel</h2>
            <p>Jij zorgt er er voor dat ons mooie hotel er spik en span bij ligt op Vakantiepark Cape Helius! In een schone kamer kunnen onze gasten nog meer genieten van hun vakantie!</p>
        </article>

        <article class="vacature-art-img">
            <img src="../img/schoonmaken.png" alt="" class="img-vacature" >
        </article>

        <article class="vacat-anchor">
           <a href="#">Bekijk deze vacature →</a>
        </article>
    </section>

    <section class="vacature-sec" id="frt-mdw">
        <article class="vacature-art-cont">
            <h2>Frontoffice medewerker</h2>
            <p>Als frontofficemedewerker is het jouw taak de gasten welkom te laten voelen op Noordzee Résidence Dishoek. Je bent verantwoordelijk voor een onvergetelijk verblijf van onze gasten en laat ze de pareltjes van de omgeving ontdekken!</p>
        </article>

        <article class="vacature-art-img">
            <img src="../img/frontend.png" alt="" class="img-vacature" >
        </article>
        
        <article class="vacat-anchor">
           <a href="#">Bekijk deze vacature →</a>
        </article>
    </section>


    <section class="vacature-sec"  id="Bed-mdw">
        <article class="vacature-art-cont">
            <h2>Medewerker Bediening</h2>
            <p>Hé, jij zoekt ons! Het leukste horecateam op een groot vakantiepark! Als medewerker bediening op vakantiepark Hunzedal ben jij inzetbaar in ons restaurant, keuken en snackbar en bar.</p>
        </article>

        <article class="vacature-art-img">
            <img src="../img/bediening2.jpg" alt="" class="img-vacature" >
        </article>
        
        <article class="vacat-anchor">
           <a href="#">Bekijk deze vacature →</a>
        </article>
    </section>


    <section class="vacature-sec" id="facdi-mdw">
        <article class="vacature-art-cont">
            <h2>Medewerker facilitaire dienst</h2>
            <p>Ben jij handig, sta je graag klaar voor onze gasten en werk jij graag buiten? Dan is de functie van Medewerker facilitaire dienst op Roompot Bloemendaal zeker passend voor jou!</p>
        </article>

        <article class="vacature-art-img">
            <img src="../img/facilitaires.png" alt="" class="img-vacature" >
        </article>
        
        <article class="vacat-anchor">
           <a href="#">Bekijk deze vacature →</a>
        </article>
    </section>


    <section class="vacature-sec" id="cockt-mdw">
        <article class="vacature-art-cont">
            <h2>Medewerker Cocktailbar</h2>
            <p>Ben jij klaar om onze gasten te verrassen met de meest heerlijke cocktails? Jij wekt de nieuwsgierigheid van onze gasten voor ons drankenaanbod.</p>
        </article>

        <article class="vacature-art-img">
            <img src="../img/Cocktail.jpg" alt="" class="img-vacature" >
        </article>
        
        <article class="vacat-anchor">
           <a href="#">Bekijk deze vacature →</a>
        </article>
    </section>


    <section class="vacature-sec" id="fiets-mdw">
        <article class="vacature-art-cont">
            <h2>Medewerker Fietsverhuur</h2>
            <p>Ben jij onze nieuwe 'fietsenmaker'? Dan ligt daar voor jou een geweldig leuke taak. In deze rol ben je verantwoordelijk voor de uitstraling van de totale fietsverhuur, het begeleiden en bedenken van fiets activiteiten en uiteraard inclusief de gastheerschap die daarbij hoort.</p>
        </article>

        <article class="vacature-art-img">
            <img src="../img/Fietsverhuur.png" alt="" class="img-vacature" >
        </article>
        
        <article class="vacat-anchor">
           <a href="#">Bekijk deze vacature →</a>
        </article>
    </section>


    <section class="vacature-sec" id="tech-mdw">
        <article class="vacature-art-cont">
            <h2>Medewerker technische dienst</h2>
            <p>In de functie van technische dienst medewerker zorg jij dat onze gasten onbezorgd kunnen genieten van alle faciliteiten die Kustpark Texel te bieden heeft. Zin om in de vakantiesferen te komen? Dan is deze functie perfect voor jou!</p>
        </article>

        <article class="vacature-art-img">
            <img src="../img/facilitair.png" alt="" class="img-vacature" >
        </article>
        
        <article class="vacat-anchor">
           <a href="#">Bekijk deze vacature →</a>
        </article>
    </section>


    <section class="vacature-sec" id="well-mdw">
        <article class="vacature-art-cont">
            <h2>Medewerker wellness</h2>
            <p>Jij vindt het heerlijk om gasten in de watten te leggen! Voor onze gasten is het wellness en beautycentrum op Roompot Vakantiepark Boomhiemke dé perfectie bestemming om tot rust te komen.</p>
        </article>

        <article class="vacature-art-img">
            <img src="../img/wellness.avif" alt="" class="img-vacature" >
        </article>
        
        <article class="vacat-anchor">
           <a href="#">Bekijk deze vacature →</a>
        </article>
    </section>


    <section class="vacature-sec" id="pizchef-mdw">
        <article class="vacature-art-cont">
            <h2>Pizza Chef</h2>
            <p>Als Pizza Chef ben je verantwoordelijk voor het creëren van smaakvolle en authentieke pizza's voor onze gasten, en draag je bij aan een onvergetelijke culinaire ervaring.</p>
        </article>

        <article class="vacature-art-img">
            <img src="../img/pizza.jpg" alt="" class="img-vacature" >
        </article>
        
        <article class="vacat-anchor">
           <a href="#">Bekijk deze vacature →</a>
        </article>
    </section>
  </section>
</section>
</main>

<footer>
    <?php include $PATH . 'php/footer.php'; ?>
</footer>   
</body>

</html>