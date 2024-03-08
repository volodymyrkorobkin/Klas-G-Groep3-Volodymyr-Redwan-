<?php
$PATH = "../";
$head = [
    "title" => "Reservation overview - Eat Fish Restaurant",
    "styles" => ["{$PATH}css/style.css"],
    "scripts" => []
];

$keys = ["voornaam", "tussenvoegsel", "achternaam", "telefoonnummer", "email", "datum", "time", "aantalPersonen", "accepteer", "submit"];

foreach ($keys as $key) {
    if (!isset($_GET[$key])) {
        echo "404 wrong url";
        return;
    }
}

$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$telefoonnummer = $_GET['telefoonnummer'];
$email = $_GET['email'];
$datum = $_GET['datum'];
$time = $_GET['time'];
$aantalPersonen = $_GET['aantalPersonen'];

//Na het invullen van het formulier moet de ingevulde gegevens verwerkt worden
// en getoond worden op een nieuwe pagina of pop-up met daarin bedankt voor
// uw reservering en de naam, telefoonnummer, email adres, datum, tijd en het aantal
// personen waarvoor de klant gereserveerd heeft.

?>

<!DOCTYPE html>
<html lang="nl">
<head>
<?php include $PATH . 'php/head.php'; ?>
<body>
<?php include $PATH . 'php/header.php'; ?>
<main class="flex-column gap-50 padding-50-0">
    <h1 class="center-text">Bedankt voor uw reservering!</h1>

    <p class="reserveren-p">Op dit scherm kunt u uw gegevens controleren. Dit vormt geen bevestiging van een tafelreservering. Er wordt per e-mail een bevestiging naar u verzonden.</p>

    <section id="reservation-overview">
        <p><strong>Naam:</strong> <?php echo $voornaam . " " . $tussenvoegsel . " " . $achternaam; ?></p>
        <p><strong>Telefoonnummer:</strong> <?php echo $telefoonnummer; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Datum:</strong> <?php echo $datum; ?></p>
        <p><strong>Tijd:</strong> <?php echo $time; ?></p>
        <p><strong>Aantal personen:</strong> <?php echo $aantalPersonen; ?></p>
    </section>
</main>
<?php include $PATH . 'php/footer.php'; ?>
</body>
</html>

