<?php if ($info = get_field('information')): ?>
    <div class="part4">
        <div class="info">
            <div class="up">
                <p><?= $info['info_txt']; ?></p>
                <h2><?= $info['info_title']; ?></h2>
            </div>
            <p><?= $info['info_subtitle']; ?></p>
            <div class="card-buttons">
                <button class="custom-prev"><span>←</span></button>
                <button class="custom-next"><span>→</span></button>
            </div>
        </div>

        <?php if ($card_repeater = get_field('card_repeater')): ?>
            <div class="swiper-card mySwiper2">
                <div class="swiper-wrapper">
                    <?php foreach ($card_repeater as $card): ?>
                        <?php if ($coach = $card['coach_card1']): ?>
                            <div class="swiper-slide-card">
                                <img src="<?= $coach['coach_image1']; ?>" alt="Coach">
                                <div class="card-content">
                                    <p class="pose"><?= $coach['coach_position1']; ?></p>
                                    <h3><?= $coach['coach_name1']; ?></h3>
                                    <div class="short-text"><?= $coach['coach_short_text1']; ?></div>
                                    <div class="full-text"><?= $coach['coach_full_text1']; ?></div>
                                    <button class="read-more">Read More</button>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
