<?php
$PATH = "../";
$head = [
    "title" => "Privacy - Eat Fish Restaurant",
    "styles" => ["{$PATH}css/style.css"],
    "scripts" => ["{$PATH}js/sticky-header.js"]
];


?>

<!DOCTYPE html>
<html lang="nl">
<head>
<?php include $PATH . 'php/head.php'; ?>
<body>
<?php include $PATH . 'php/header.php'; ?>
<main class="flex-column gap-50 padding-50-0">
    <h1 class="center-text">Privacyverklaring voor Reserveringen</h1>

    <p class="reserveren-p">
    Wij zijn toegewijd aan de bescherming van uw persoonlijke gegevens. Deze privacyverklaring legt uit hoe wij uw persoonsgegevens verzamelen, gebruiken, delen en beschermen in verband met uw reservering bij ons restaurant.
    </p>

    <ol class="privacy">
        <li><strong>Verzameling van gegevens:</strong> Wij verzamelen de volgende gegevens: voornaam, tussenvoegsel, achternaam, telefoonnummer, e-mailadres, aantal personen voor de reservering, en de tijd en datum van uw reservering.</li>
        <li><strong>Gebruik van gegevens:</strong> Uw gegevens worden gebruikt om uw reservering te verwerken en om u te informeren over uw reservering. Indien u daarvoor toestemming geeft, kunnen we uw gegevens ook gebruiken om u promotionele e-mails te sturen.</li>
        <li><strong>Delen van gegevens:</strong> Uw gegevens worden niet gedeeld met derden, tenzij dit noodzakelijk is voor het verwerken van de reservering of om te voldoen aan wettelijke verplichtingen.</li>
        <li><strong>Bescherming van uw gegevens:</strong> Wij nemen passende beveiligingsmaatregelen om uw persoonsgegevens te beschermen tegen ongeoorloofde toegang, wijziging, openbaring of vernietiging.</li>
        <li><strong>Uw rechten:</strong> U heeft het recht om uw gegevens in te zien, te corrigeren of te verwijderen. U kunt ook uw toestemming voor het gebruik van uw gegevens op elk moment intrekken.</li>
    </ol>

    <p class="reserveren-p">
    Voor meer informatie over hoe wij met uw gegevens omgaan of als u uw rechten wilt uitoefenen, kunt u contact met ons opnemen via contact@eatfish.nl
    </p>


</main>
<?php include $PATH . 'php/footer.php'; ?>
</body>
</html>

