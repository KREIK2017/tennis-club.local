<footer>
    <div class="footer-content">

        <div class="footer-column">
            <?php if ($location = get_field('footer_group', 'options')): ?>

                <h3><?= $location['camp_name']; ?></h3>
                <p id="#text"><?= $location['camp_description']; ?></p>
                <p><strong>Address:</strong><br><?= $location['camp_address']; ?></p>
                <p><strong>Academy Email:</strong><br><?= $location['camp_email']; ?></p>
                <p><strong>Jeremy Wilson (Camp Manager):</strong><br><?= $location['camp_phone']; ?></p>
            <?php endif; ?>
        </div>

        <div class="footer-column">
            <?php if ($footer_menu = get_field('footer_menu', 'options')): ?>
                <h4><?= $footer_menu['title']; ?></h4>

                <ul>
                    <?php foreach ($footer_menu['footer_category'] as $category):
                        $label = $category['label'];
                        $url = $category['url'];
                    ?>
                        <li>
                            <a href="<?= $url; ?>"><?= $label; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>


        <div class="footer-column">
            <?php if ($footer_social_links = get_field('footer_social_links', 'options')): ?>
                <h4><?= $footer_social_links['title']; ?></h4>

                <div class="contact-us">
                    <?php foreach ($footer_social_links['icons'] as $icons):
                        $icon_image = $icons['icon_image'];
                        $url = $icons['url'];
                    ?>
                        <a class="us-icon" href="<?= $url; ?>">
                            <img src="<?= $icon_image; ?>" alt="">
                        </a>
                    <?php endforeach; ?>
                </div>

            <?php endif; ?>
        </div>

        <div class="footer-column">
            <?php if ($footer_get_started = get_field('footer_get_started', 'options')): ?>
                <h4><?= esc_html($footer_get_started['title']); ?></h4>
                <p><?= esc_html($footer_get_started['description']); ?></p>
                <button href="<?= esc_url($footer_get_started['button_url']); ?>" class="cta-button">
                    <?= esc_html($footer_get_started['button_text']); ?>
                </button>
            <?php endif; ?>
        </div>
    </div>

    <div class="footer-bottom">
        <?php if ($footer_bottom = get_field('footer_bottom', 'options')): ?>
            <p><?= esc_html($footer_bottom['copyright_text']); ?></p>
            <p><?= esc_html($footer_bottom['developer_text']); ?></p>
        <?php endif; ?>
    </div>

    </div>

</footer>