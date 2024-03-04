<?php
$PATH = "../";

$head = [
    "title" => "Galerij - Eat Fish Restaurant",
    "styles" => ["{$PATH}css/style.css"],
    "scripts" => ["{$PATH}js/zoom.js"]
];

?>

<!DOCTYPE html>
<html lang="nl">
<?php include $PATH . 'php/head.php'; ?>

<body>
    <?php include $PATH . 'php/header.php'; ?>
    <main class="flex-column gap-50 padding-50-0">

        <h1 class="center-text">Galerij</h1>

        <section class="masonry-grid">
            <img src="../img/A_grilled_salmon_fillet_with_lemon_slices_and_dill.png" class="zoom">
            <img src="../img/A_cod_fish_baked_in_foil_with_garlic_and_rosemary,.png" class="zoom">
            <img src="../img/A_trout_stuffed_with_herbs,_presented_on_a_ceramic.png" class="zoom">
            <img src="../img/Smoked_carp_with_orange_slices_on_a_large_round_pl.png" class="zoom">
            <img src="../img/Tuna_steak_with_black_and_white_sesame_seeds,_serv.png" class="zoom">
            <img src="../img/Salmon_teriyaki_on_a_wooden_plank_with_rice_and_ve.png" class="zoom">
            <img src="../img/Grilled_sardines_with_lemon_and_olive_oil_on_a_sto.png" class="zoom">
            <img src="../img/Mussels_in_white_wine_sauce_with_herbs,_served_in_.png" class="zoom">
            <img src="../img/Squid_stuffed_with_vegetables_and_rice,_presented_.png" class="zoom">
            <img src="../img/Halibut_baked_with_tomatoes_and_olives,_presented_.png" class="zoom">
            <img src="../img/Tuna_tartare_with_avocado,_served_on_a_small_round.png" class="zoom">
            <img src="../img/Whole_baked_gurnard_with_potatoes_and_onions,_pres.png" class="zoom">
            <img src="../img/Mackerel_marinated_in_a_mix_of_vinegar,_olive_oil,.png" class="zoom">
            <img src="../img/Pink_salmon_baked_with_a_cheese_crust,_served_on_a.png" class="zoom">
            <img src="../img/Anchovies_marinated_in_olive_oil_and_chili,_served.png" class="zoom">
            <img src="../img/Pike_baked_with_mushrooms,_presented_on_a_rectangu.png" class="zoom">
        </section>

    </main>
    <?php include $PATH . 'php/footer.php'; ?>
</body>

</html>