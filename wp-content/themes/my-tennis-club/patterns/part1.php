<?php if ($slide_repeater = get_field('slide_repeater')): ?>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php foreach ($slide_repeater as $slide): ?>
                <?php if ($slide_data = $slide['slide_1']): ?>
                    <div class="swiper-slide">
                        <div class="overlay"></div>
                        <img src="<?= $slide_data['slide_image1'] ?>" alt="Slide">
                        <div class="carousel-content">
                            <h4><?= $slide_data['slide_txt1'] ?></h4>
                            <h1><?= $slide_data['slide_title1'] ?></h1>
                            <p><?= $slide_data['slide_subtitle1'] ?></p>
                            <div class="carousel-controls">
                                <button class="carousel-custom-prev"><span>←</span></button>
                                <button class="carousel-custom-next"><span>→</span></button>
                                <span class="pagination-numbers">
                                    <span class="current-slide"></span>
                                    <div class="progress-bar">
                                        <div class="progress-fill"></div>
                                    </div>03
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <div class="swiper-pagination"></div>
    </div>
<?php endif; ?>