<?php

/* Database connection */
define( 'DB_NAME', '' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'mariadb' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', 'utf8mb4_general_ci' );

$table_prefix = 'wp_';

/* Security */
/* Security Keys */
define( 'AUTH_KEY', 'V@bQ1>Sid*!<K%tmd:v$kc+;>J.W&BA~a#St@1[U|>((PwYQtF<0.S6FJg%@u;C:' );
define( 'SECURE_AUTH_KEY', 'kh(US$XNc]YPbHM9j5&mA8ZduD8bl)BcNVKBUW>e;4mT1z#zAwlA~;uXFRk#H($T' );
define( 'LOGGED_IN_KEY', '1*(uj1VcUZ:Mit&dgCOaq$*ae|idfCrR*s|5]ih*t4:#i^aa15$~pL2RR!:nne(p' );
define( 'NONCE_KEY', '8y#rFsLXrpt(q)BLT{Z|WXijz;]U)2rvDAM>yx_P4(%Fvyl-GSmXlAT0rhM(:hr)' );
define( 'AUTH_SALT', 'X&GI<vaII(D%*aTf}LL*sTdMMj|IXdj28P69-yCG^g+awh.Lt^UGrd$V,np^<@HF' );
define( 'SECURE_AUTH_SALT', 'jX&f.i(q0_yDTP)D0(=3Vnhf<8BaY%1Rq9&EXtB5v*n.#.~flzaqk6OMa5SGIDZ8' );
define( 'LOGGED_IN_SALT', 'S!$r:a8:3@n:+abm0u+=#*ys4v>@dzTP;4tYEZ~X#[JA%l3wpa3<A*:|*ehnpu0u' );
define( 'NONCE_SALT', '4K41Y%<b<HBC.I56lw@S:$Ad5*)x%1AlH*~f^A^^bi9:pV;c/.OAD{If7d~<fSqL' );
/* HTTPS */
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', false );
define( 'WP_DISABLE_ADMIN_EMAIL_VERIFY_SCREEN', false );

/* URL / Path */

/* Cookies */
define( 'TEST_COOKIE', 'wordpress_test_cookie' );
define( 'COOKIEHASH', 'd5fKm9hbh9R33HaRRFzjdZj0IgdJVeuMynmE7LXbRdj7EJxTZRIJ3dZq50nvlnwk' );
define( 'LOGGED_IN_COOKIE', 'wordpress_logged_in_d5fKm9hbh9R33HaRRFzjdZj0IgdJVeuMynmE7LXbRdj7EJxTZRIJ3dZq50nvlnwk' );
define( 'SECURE_AUTH_COOKIE', 'wordpress_logged_in_d5fKm9hbh9R33HaRRFzjdZj0IgdJVeuMynmE7LXbRdj7EJxTZRIJ3dZq50nvlnwk' );
define( 'AUTH_COOKIE', 'wordpress_d5fKm9hbh9R33HaRRFzjdZj0IgdJVeuMynmE7LXbRdj7EJxTZRIJ3dZq50nvlnwk' );
define( 'PASS_COOKIE', 'wordpresspass_d5fKm9hbh9R33HaRRFzjdZj0IgdJVeuMynmE7LXbRdj7EJxTZRIJ3dZq50nvlnwk' );
define( 'USER_COOKIE', 'wordpressuser_d5fKm9hbh9R33HaRRFzjdZj0IgdJVeuMynmE7LXbRdj7EJxTZRIJ3dZq50nvlnwk' );
define( 'RECOVERY_MODE_COOKIE', 'wordpress_rec_d5fKm9hbh9R33HaRRFzjdZj0IgdJVeuMynmE7LXbRdj7EJxTZRIJ3dZq50nvlnwk' );


/* Debug */
define( 'WP_DEBUG', false );
if ( WP_DEBUG ) {
	define( 'WP_DEBUG_DISPLAY', false );
	define( 'WP_DEBUG_LOG', false );
}

/* Do not change anything else after this line! Thank you! */

if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );
require_once ABSPATH . 'wp-settings.php';
