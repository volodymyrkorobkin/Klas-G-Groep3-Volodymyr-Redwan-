<?php
$PATH = '../';

$head = [
    'title' => 'Recensies',
    'styles' => ['../css/style.css'],
    'scripts' => ['../js/script.js', '../js/sticky-header.js']
];

session_start();

if (!isset($_SESSION['reviews'])) {
    $_SESSION['reviews'] = [];

    $_SESSION['reviews'][] = [
        'name' => 'Alex Jansen',
        'img' => '../img/reviewIMG.webp',
        'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, nunc nec'
    ];

    $_SESSION['reviews'][] = [
        'name' => 'Alex Jansen',
        'img' => '../img/reviewIMG.webp',
        'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, nunc nec'
    ];
}



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $review = $_POST['review'];

    $_SESSION['reviews'][] = [
        'name' => $name,
        'img' => '../img/user-plaseholder.jpg',
        'review' => $review
    ];

    header('Location: recensies.php');
}




?>

<!DOCTYPE html>
<html lang="nl">
<?php include '../php/head.php'; ?>
<body>
<?php include '../php/header.php'; ?>

<main class="main-margin flex-column gap-50 padding-50-0 tablet-home-main">
    <h1 class="center-text">Recinsies</h1>

    <section id="reviews">
        <?php foreach ($_SESSION['reviews'] as $review) : ?>
            <article class="review">
                <img src="<?= $review['img'] ?>" alt="Review">
                <h2><?= $review['name'] ?></h2>
                <p><?= $review['review'] ?></p>
            </article>

        <?php endforeach; ?>

        

        <form action="" method="post">
            <label for="review"><h3>Schrijf een recensie</h3></label>
            <input type="text" name="name" id="name" placeholder="Name" required>
            <textarea name="review" id="review" cols="30" rows="10" placeholder="Uw recensie" required></textarea>
            <input type="submit" value="Verstuur" id="submit" name="submit"> 
        </form>
    </section>
    
</main>

<?php include '../php/footer.php'; ?>   
</body>
</html>