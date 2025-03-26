<hr class="hr7">
<div class="part7">
    <div class="up2">
        <p>Bring in</p>
        <h2>WHAT TO BRING?</h2>
    </div>

    <?php if ($contact_info = get_field('what_to_bring')): ?>
    <div class="grid-container">
        <?php foreach ($contact_info as $info): ?>
        <div class="grid-card">
            <div class="grid-icon">
                <img src="<?= $info['icon']; ?>" alt="">
            </div>
            <div class="grid-text">
                <h3><?= $info['number']; ?></h3>
                <p><?= $info['title']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>