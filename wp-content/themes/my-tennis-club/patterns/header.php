<header>
    <div class="logo">
        <?php if ($location = get_field('header_group','options')): ?>
        <h2 class="title">
        <?=$location['title']; ?>
        </h2>
        <button>
        <?=$location['button_title']; ?>
            </button>
            <?php if (!empty($location['weeks_table'])): ?>
            <table class="htable">
                <tbody>
                    <?php foreach ($location['weeks_table'] as $week): ?>
                        <tr>
                            <td><?= $week['week']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
        <?php endif; ?>

    </div>
    <nav class="menu">
    <ul>
        <?php if( have_rows('header_menu', 'option') ): ?>
            <?php while( have_rows('header_menu', 'option') ): the_row();
                $label = get_sub_field('label');
                $url = get_sub_field('url');
            ?>
                <li>
                    <?php if( $url ): ?>
                        <a href="<?= esc_url($url); ?>"><?= esc_html($label); ?></a>
                    <?php else: ?>
                        <?= esc_html($label); ?>
                    <?php endif; ?>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
</nav>

</header>