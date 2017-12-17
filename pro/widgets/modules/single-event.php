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

	<div class="list-info test">
		<div class="list-date">
			<?php if ( isset( $instance[ 'tribe_is_list_widget' ] ) && date( 'm', $post_date ) != date( 'm', current_time( 'timestamp' ) ) ) { ?>
				<span class="list-dayname test"><?php echo apply_filters( 'tribe-mini_helper_tribe_events_ajax_list_dayname', date_i18n( 'M', $post_date ), $post_date, $mini_cal_event_atts['class'] ); ?></span>
			<?php } else { ?>
				<span class="list-dayname"><?php echo apply_filters( 'tribe-mini_helper_tribe_events_ajax_list_dayname', date_i18n( 'n', $post_date ), $post_date, $mini_cal_event_atts['class'] ); ?></span>
			<?php } ?>

			<span class="list-daynumber"><?php echo apply_filters( 'tribe-mini_helper_tribe_events_ajax_list_daynumber', date_i18n( 'd', $post_date ), $post_date, $mini_cal_event_atts['class'] ); ?></span>
		</div>

		<?php do_action( 'tribe_events_list_widget_before_the_event_title' ); ?>

		<h2 class="tribe-events-title">
			<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>

		<?php the_content(); ?>

	</div> <!-- .list-info -->
</div>
