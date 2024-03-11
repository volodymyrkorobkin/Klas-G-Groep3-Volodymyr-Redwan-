<?php
$PATH = "../";

include $PATH . "php/email.php";

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


$receiverName = $voornaam . " " . ($tussenvoegsel ? $tussenvoegsel . " " : "") . $achternaam;
$subject = "Bevestiging van uw reservering";
$message = "<h1>Bedankt voor uw reservering!</h1>";
$message .= "<p>Uw reservering is bevestigd. We waarderen het dat u ons heeft gekozen.</p>";
$message .= "<p><strong>Naam:</strong> {$receiverName}</p>";
$message .= "<p><strong>Telefoonnummer:</strong> {$telefoonnummer}</p>";
$message .= "<p><strong>Email:</strong> {$email}</p>";
$message .= "<p><strong>Datum:</strong> {$datum}</p>";
$message .= "<p><strong>Tijd:</strong> {$time}</p>";
$message .= "<p><strong>Aantal personen:</strong> {$aantalPersonen}</p>";
$message .= "<p>We kijken ernaar uit u te verwelkomen in ons restaurant.</p>";


if (!isset($_GET['emailSent'])) {
    sendEmail($email, $receiverName, $subject, $message);
    $link = "reservation-overview.php?";
    foreach ($keys as $key) {
        $link .= $key . "=" . $_GET[$key] . "&";
    }
    $link .= "emailSent";

    header("Location: $link");
}




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

