<?php
/**
 * This Week Widget Nav
 * This file loads the this week widget navigation
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/pro/widgets/this-week/nav.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>
<!-- .tribe-events-sub-nav -->
<h3 class="left">Food Truck Schedule :</h3>
<ul class="tribe-events-sub-nav">
	<!-- .tribe-events-nav-previous -->
	<li class="tribe-this-week-nav-link nav-previous">
		<?php echo tribe_events_this_week_previous_link( $start_date ); ?>
	</li>

	<!-- .tribe-events-nav-next -->
	<li class="tribe-this-week-nav-link nav-next">
		<?php echo tribe_events_this_week_next_link( $end_date ); ?>
	</li>
</ul>
<span class="tribe-events-ajax-loading">
	<img class="tribe-events-spinner-medium" src="<?php echo esc_url( tribe_events_resource_url( 'images/tribe-loading.gif' ) ); ?>" alt="Loading Events">
</span>