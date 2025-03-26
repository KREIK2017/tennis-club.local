<?php
$video_file = get_field('video_file');
$video_poster = get_field('video_poster');
$volume_icon = get_field('volume_icon');
?>

<div class="part3">
    <div class="custom-player">
        <video class="custom-player__video"
            src="<?php echo $video_file; ?>"
            poster="<?php echo $video_poster; ?>"
            preload="metadata">
        </video>

        <button class="play-btn-center" aria-label="Play"></button>

        <div class="controls">
            <div class="left-controls">
                <button class="play-pause" aria-label="Play/Pause"></button>
            </div>
            <div class="time-display">
                <span class="current-time">0:00</span> / <span class="total-time">0:00</span>
            </div>

            <div class="video-progress-bar">
                <div class="video-progress"></div>
            </div>

            <div class="right-controls">
                <img src="<?php echo $volume_icon; ?>" alt="Volume Icon" class="volume-icon">
                <input type="range" id="radius" class="volume-control" min="0" max="1" step="0.01" value="0.5" aria-label="Volume">
            </div>
        </div>
    </div>
</div>