<?php
$hero_highlight = get_field('hero_highlight');
$hero_description = get_field('hero_description');
$hero_button_text = get_field('hero_button_text');
$hero_register_link = get_field('hero_register_link');
$hero_main_image = get_field('hero_main_image');
$hero_price = get_field('hero_price');

$hero_weeks = get_field('hero_weeks');
$week1 = $hero_weeks['week1'];
$week2 = $hero_weeks['week2'];
?>

<section class="hero-section">
    <div class="grid-text-content">
        <h1><span class="highlight"><?php echo $hero_highlight?></h1>
        <p><?php echo $hero_description?>
        </p>
        <button class="register" href="<?php echo $hero_register_link;?>">
            <?php echo $hero_button_text?>
        </button>
    </div>
    <div class="image-content">

    <?php if ($contact_info = get_field('hero_info_boxes')): ?>
    <div class="top-info">
        <?php foreach ($contact_info as $info): ?>
            <div class="info-box">
                <div class="info-icon">
                    <img src="<?= $info['icon']; ?>" alt="<?= $info['title']; ?>">
                </div>
                <h3><?= $info['title']; ?></h3>
                <p><?= $info['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


        <img src="<?php echo $hero_main_image;?>" alt="Tennis Player">
        <div class="price-box">
            <p><strong>$<?php echo $hero_price;?></strong> / for the week</p>
            <h3>Week 1: <?php echo $week1;?></h3>
            <h3>Week 2: <?php echo $week2;?></h3>
        </div>
    </div>
</section>