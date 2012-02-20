<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.2
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'nova' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'nova' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'nova' ); ?>" />
	</form>
