<?php
/**
 * Admin View: Displaying all LearnPress's related themes.
 *
 * @author  ThimPress
 * @package LearnPress/Views
 * @version 3.0.0
 */

defined( 'ABSPATH' ) || exit();

$last_checked = LP_Background_Query_Items::instance()->get_last_checked( 'plugins_tp' );
$check_url    = wp_nonce_url( add_query_arg( 'force-check-update', 'yes' ), 'lp-check-updates' );
?>

<p><?php printf( __( 'Last checked %1$s. <a href="%2$s">Check again</a>', 'learnpress' ), human_time_diff( $last_checked ), $check_url ); ?></p>

<?php
// Thimpress Education themes
$education_themes = LP_Plugins_Helper::get_related_themes( 'education' );
// Thimpress other themes
$other_themes = LP_Plugins_Helper::get_related_themes( 'other' );

if ( ! ( $education_themes || $other_themes ) ) {
	_e( 'No related themes.', 'learnpress' );
	return;
}

$all_themes = array(
	array(
		'title' => __( 'Education Support', 'learnpress' ),
		'items' => $education_themes,
	),
	array(
		'title' => __( 'Other', 'learnpress' ),
		'items' => $other_themes,
	),
);

require_once LP_PLUGIN_PATH . 'inc/background-process/class-lp-background-query-items.php';
$lp_query_items_bg = new LP_Background_Query_Items();
$lp_query_items_bg->query_related_themes();

foreach ( $all_themes as $themes ) {
	if ( $themes['items'] ) {
		?>
		<h2><?php echo $themes['title'] . ' (<span>' . sizeof( $themes['items'] ) . '</span>)'; ?></h2>
		<ul class="addons-browse related-themes widefat">
			<?php
			foreach ( $themes['items'] as $key => $item ) {
				$item['url'] = learn_press_get_item_referral( $item['id'] );

				learn_press_admin_view(
					'addons/html-loop-theme',
					array(
						'theme' => $item,
						'ref'   => '',
					)
				);
			}
			?>
		</ul>
		<?php
	}
}
