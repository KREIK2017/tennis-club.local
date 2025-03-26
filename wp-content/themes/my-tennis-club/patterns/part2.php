<?php
$mission_title = get_field('mission_title');
$mission_text = get_field('mission_text');
$button_register = get_field('button_register');
$button_talk = get_field('button_talk');
$background_image = get_field('background_image');
?>

<div class="background-container">
    <div class="left-part">
        <div class="left-text">
            <h2 class="back-title"><?php echo $mission_title; ?></h2>
            <p><?php echo $mission_text; ?></p>
            <div class="buttons">
                <button class="register"><?php echo $button_register; ?></button>
                <button class="talk"><?php echo $button_talk; ?></button>
            </div>
        </div>
    </div>
    <div class="right-part" style="background-image: url('<?php echo $background_image; ?>');">
    </div>
</div>
