<?php
/**
 * Single Event Template for Widgets
 *
 * This template is used to render single events for both the calendar and advanced
 * list widgets, facilitating a common appearance for each as standard.
 *
 * You can override this template in your own theme by creating a file at
 * [your-theme]/tribe-events/pro/widgets/modules/single-event.php
 *
 * @version 4.3
 *
 * @package TribeEventsCalendarPro
 *
 */

$mini_cal_event_atts = tribe_events_get_widget_event_atts();

$post_date = tribe_events_get_widget_event_post_date();

$organizer_ids = tribe_get_organizer_ids();
$multiple_organizers = count( $organizer_ids ) > 1;
?>

<div class="tribe-mini-calendar-event event-<?php esc_attr_e( $mini_cal_event_atts['current_post'] ); ?> <?php esc_attr_e( $mini_cal_event_atts['class'] ); ?>">

	<?php the_post_thumbnail(); ?>

	<div class="list-info">
		<div class="inner-content">
			<?php if ( isset( $instance[ 'tribe_is_list_widget' ] ) && date( 'm', $post_date ) != date( 'm', current_time( 'timestamp' ) ) ) { ?>
				<h5>
					<span class="list-dayname"><?php echo apply_filters( 'tribe-mini_helper_tribe_events_ajax_list_dayname', date_i18n( 'M', $post_date ), $post_date, $mini_cal_event_atts['class'] ); ?></span>
					<span class="list-daynumber"><?php echo apply_filters( 'tribe-mini_helper_tribe_events_ajax_list_daynumber', date_i18n( 'd', $post_date ), $post_date, $mini_cal_event_atts['class'] ); ?></span>
				</h5>
			<?php } else { ?>
				<h5>
					<span class="list-dayname"><?php echo apply_filters( 'tribe-mini_helper_tribe_events_ajax_list_dayname', date_i18n( 'n.j.Y', $post_date ), $post_date, $mini_cal_event_atts['class'] ); ?></span>
				</h5>
			<?php } ?>

			<h2 class="tribe-events-title"><?php the_title(); ?></h2>

			<hr></hr>

			<?php the_excerpt(); ?>

			<a class="button" href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark">View Event</a>
		</div><!--inner-content-->
	</div> <!-- .list-info -->
</div>
