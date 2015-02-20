<?php
/**
 * Underscore.js templates for displaying the audio player bar across the top of
 * the site when it's enabled.
 *
 * @package Huesos
 * @since 1.0.0
 */
?>

<script type="text/html" id="tmpl-huesos-player">
	<div class="controls">
		<button class="previous"><?php _e( 'Previous Track', 'huesos' ); ?></button>
		<button class="play-pause"><?php _e( 'Play', 'huesos' ); ?></button>
		<button class="next"><?php _e( 'Next Track', 'huesos' ); ?></button>

		<div class="current-track-details">
			<span class="artist">{{ data.artist }}</span>
			<span class="title">{{ data.title }}</span>
		</div>

		<div class="volume-bar">
			<div class="volume-bar-current"></div>
		</div>

		<div class="progress-bar">
			<div class="play-bar"></div>
		</div>
	</div>
</script>

<script type="text/html" id="tmpl-huesos-player-track">
	<span class="track-status track-cell"></span>

	<span class="track-details track-cell">
		<span class="track-title">{{ data.title }}</span>
		<span class="track-artist">{{ data.artist }}</span>
	</span>

	<span class="track-length track-cell">{{ data.length }}</span>

	<span class="track-remove track-cell">
		<button class="remove js-remove"><?php _e( 'Remove Track', 'huesos' ); ?></button>
	</span>
</script>
