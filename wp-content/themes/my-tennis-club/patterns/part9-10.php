<?php if ($location = get_field('our_location')): ?>
    <div class="part9">
        <h2><?=$location['title']; ?></h2>
    </div>
<?php endif; ?>

<?php if ($sponsors = get_field('sponsors')): ?>
    <section class="part10">
        <h2><?= $sponsors['title']; ?></h2>
        <?php if (!empty($sponsors['sponsor_logos'])): ?>
            <div class="sponsor-logos">
                <?php foreach ($sponsors['sponsor_logos'] as $sponsor): ?>
                    <img src="<?= $sponsor['image']; ?>" alt="">
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>
