<?php
$PATH = "../";

$head = [
    "title" => "Eat Fish Restaurant",
    "styles" => ["{$PATH}css/style.css"],
    "scripts" => ["{$PATH}js/zoom.js", "{$PATH}js/slideshow.js", "{$PATH}js/reed-more.js"]
];

?>

<!DOCTYPE html>
<html lang="nl">
<?php include $PATH . 'php/head.php'; ?>
<body>
<?php include $PATH . 'php/header.php'; ?>
<main class="main-margin flex-column gap-50 padding-50-0">

<!-- 
• De gegevens die ingevuld moeten worden op het formulier zijn:
o Voornaam, tussenvoegsel, achternaam, telefoonnummer, emailadres, aantal
personen waar de reservering voor is, de tijd en datum van reservering.
Zorg dat ze een keuze kunnen maken per uur.
• Er moet voldaan worden aan de AVG wet, er moet dus een scherm zijn met daarin de
verantwoording van de AVG wet. (meer info hierover in de map van het project)
• Na het invullen van het formulier moet de ingevulde gegevens verwerkt worden
en getoond worden op een nieuwe pagina of pop-up met daarin bedankt voor
uw reservering en de naam, telefoonnummer, email adres, datum, tijd en het aantal
personen waarvoor de klant gereserveerd heeft.
• Extra zorg dat de klant automatisch een mailtje krijgt met de reservering. -->
    <h1 class="center-text">Reserveren</h1>
    <p class="reserveren-p">Om een tafel voor u te reserveren, hebben we uw gegevens nodig. Vul dit reserveringsformulier in. U ontvangt een bevestigingsmail van uw reservering.</p>

    <form action="" id="reserveren">
        <section>
            <label for="voornaam">Voornaam</label>
            <input type="text" id="voornaam" name="voornaam" required>
        </section>
        <section>
            <label for="tussenvoegsel">Tussenvoegsel</label>
            <input type="text" id="tussenvoegsel" name="tussenvoegsel">
        </section>
        <section>
            <label for="achternaam">Achternaam</label>
            <input type="text" id="achternaam" name="achternaam" required>
        </section>
        <section>
            <label for="telefoonnummer">Telefoonnummer</label>
            <input type="tel" id="telefoonnummer" name="telefoonnummer" required>
        </section>
        <section>
            <label for="email">Emailadres</label>
            <input type="email" id="email" name="email" required>
        </section>
        <section id="date-time">
            <section>
                <label for="datum">Datum</label>
                <input type="date" id="datum" name="datum" required>
            </section>
            <section>
                <label for="time">Tijd</label>
                <select name="time" id="time">
                    <?php 
                        for ($i = 12; $i < 24; $i++) {
                            echo "<option value='$i:00'>". $i . ":00 - " . $i+1  . ":00</option>";
                        }
                    ?>
                </select>
            </section>
        </section>
        <section id="aantalPersonenBox">
            <label for="aantalPersonen">Aantal personen</label>
            <select name="aantalPersonen" id="aantalPersonen" required>
                <?php
                    for ($i = 1; $i <= 20; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
        </section>
        <section id="accepteerBox">
            <input name="accepteer" type="checkbox" id="accepteer" required>
            <label for="accepteer">Ik accepteer de <a href="privacy.php">privacyvoorwaarden</a> en stem in met de verwerking van mijn gegevens voor mijn reservering.</label>
        </section>
        <section>
            <input name="submit" class="button" type="submit" value="Reserveren">
        </section>
    </form>
</main>
<?php include $PATH . 'php/footer.php'; ?>
</body>
</html>
