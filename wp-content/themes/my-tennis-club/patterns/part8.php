<div class="part8">
    <div class="info">
        <?php if ($faq_section = get_field('faq_section')): ?>
            <div class="up">
                <p><?= $faq_section['subtitle']; ?></p>
                <h2><?= $faq_section['title']; ?></h2>
            </div>
            <p><?= $faq_section['description']; ?></p>
        <?php endif; ?>

    </div>

    <?php if ($faq_list = get_field('faq_list')): ?>
        <div class="scroll-list">
            <?php foreach ($faq_list as $index => $faq): ?>
                <div class="list-item">
                    <div class="item-number"><?= sprintf("%02d.-", $index + 1); ?></div>
                    <div class="item-content">
                        <h3><?= $faq['question']; ?></h3>
                        <p><?= $faq['answer']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>