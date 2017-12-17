<?php
/**
 * This Week Single Event
 * This file loads the this week widget single event
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/pro/widgets/this-week/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>
<div id="tribe-events-event-<?php echo esc_attr( $event->ID ); ?>" class="<?php tribe_events_event_classes( $event->ID ) ?> tribe-this-week-event" >

	<h2 class="entry-title summary">
		<?php echo esc_html( $event->post_title ); ?>
	</h2>

	<div class="fn org tribe-venue">
		<?php echo tribe_get_event_meta( $post_id, '_EventURL', true );?>

		<?php echo tribe_get_event_website_link( $event->ID ); ?>
	</div>

</div>