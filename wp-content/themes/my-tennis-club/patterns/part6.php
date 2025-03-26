<?php if (have_rows('daily_schedule')): ?>
    <div class="part6">
        <div class="up2">
            <p>Activities</p>
            <h2>Daily Schedule</h2>
        </div>
        <div class="all-table">
            <table class="styled-table">
                <thead>
                    <tr>
                        <td id="day" colspan="3"><?= esc_html(get_field('day_title')); ?></td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $times = [];
                    $activities = [];

                    while (have_rows('daily_schedule')): the_row();
                        $times[] = esc_html(get_sub_field('time'));
                        $activities[] = esc_html(get_sub_field('activity'));
                    endwhile;

                    $total = count($times);
                    for ($i = 0; $i < $total; $i += 3): ?>
                        <tr>
                            <?php for ($j = 0; $j < 3; $j++): ?>
                                <th><?= $times[$i + $j] ?? ''; ?></th>
                            <?php endfor; ?>
                        </tr>
                        <tr>
                            <?php for ($j = 0; $j < 3; $j++): ?>
                                <td><?= $activities[$i + $j] ?? ''; ?></td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                    <tr>
                        <td colspan="3">
                            <button id="readMore">Read More</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php endif; ?>
