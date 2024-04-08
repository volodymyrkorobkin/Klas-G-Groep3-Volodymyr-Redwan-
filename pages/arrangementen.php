<?php
$PATH = '../';

$head = [
    'title' => 'Arrangementen',
    'styles' => ['../css/style.css'],
    'scripts' => ['../js/script.js', '../js/sticky-header.js']
];



?>

<!DOCTYPE html>
<html lang="nl">
<?php include '../php/head.php'; ?>
<body>
<?php include '../php/header.php'; ?>

<main class="main-margin flex-column gap-50 padding-50-0 tablet-home-main">
    <h1 class="center-text">Arrangementen</h1>

    <section id="arrangementen-grid">
        <article>
            <img src="../img/arrangementen/DALL·E 2024-04-02 13.28.51 - A large, wit.webp" alt="Arrangement 1">
            <span>
                <h2>Zeebries Sharing Platter</h2>
                <p>€&nbsp45,00</p>
            </span>
            <p>Een rijkelijk gevulde schaal met een selectie van de beste zeevruchten, waaronder garnalen, oesters, gerookte zalm, en verse krab. Geserveerd met een assortiment van sausjes en versgebakken brood.</p>
        </article>
        <article>
            <img src="../img/arrangementen/DALL·E 2024-04-02 13.47.25 - An elegant table set with a starter of seafoo.webp" alt="Arrangement 2">
            <span>
                <h2>Drie-Gangen Zee Genot</h2>
                <p>€&nbsp60,00</p>
            </span>
            <p>Begin met een frisse zeevruchtensalade, gevolgd door een hoofdgerecht van zacht gegaarde zeebaars in een rijke saus, en sluit af met een hemels dessert van citroen-sorbet.
Prijs: €60,00 per persoon, inclusief bijpassende wijnen.</p>
        </article>
        <article>
            <img src="../img/arrangementen/DALL·E 2024-04-02 13.47.48 - A close-up of a romantic dinner setting .webp" alt="Arrangement 3">
            <span>
                <h2>Familie Feestmaal</h2>
                <p>€&nbsp35,00</p>
            </span>
            <p>Een feestelijke tafel vol met visdelicatessen, waaronder een hele gebakken zalm, mosselen in witte wijn saus, en een rijke paella vol zeevruchten. Perfect voor het delen met de hele familie.</p>
        </article>
        <article>
            <img src="../img/arrangementen/DALL·E 2024-04-02 13.48.28 - A refreshing and light lunch setting, featuring a plate of cucumber and.webp" alt="Arrangement 4">
            <span>
                <h2>Romantisch Diner voor Twee</h2>
                <p>€&nbsp80,00</p>
            </span>
            <p>Geniet van een intiem diner met een voorgerecht van carpaccio van coquilles, gevolgd door kreeft Thermidor als hoofdgerecht, en sluit af met een passievrucht panna cotta.
Prijs: €80,00 voor twee personen.</p>
        </article>
        <article>
            <img src="../img/arrangementen/DALL·E 2024-04-02 13.49.07 - A rustic, earthenware plate filled with richly colored.webp" alt="Arrangement 5">
            <span>
                <h2>Lunch aan Zee</h2>
                <p>€&nbsp25,00</p>
            </span>
            <p>Een lichte, verfrissende lunch bestaande uit een gazpacho van komkommer en munt, gevolgd door een salade Niçoise met versgevangen tonijn.</p>
        </article>
        <article>   
            <img src="../img/arrangementen/DALL·E 2024-04-02 13.53.55 - A side view of a variety of seafood dishes.webp" alt="Arrangement 6">
            <span>
                <h2>De Ultieme Visserij</h2>
                <p>€&nbsp50,00</p>
            </span>
            <p>Een avontuurlijke selectie van lokale visserijspecialiteiten, waaronder gerookte paling, gebakken makreel, en een stoofpotje van diverse vissoorten. Begeleid door traditionele bijgerechten.</p>
        </article>

    </section>
    
</main>

<?php include '../php/footer.php'; ?>   
</body>
</html>