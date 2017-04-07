<?php
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'exampleuser' );
define( 'DB_PASSWORD', 'examplepassword' );
define( 'DB_HOST', 'localhost' );

ini_set( 'display_errors', E_ALL );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG', true );

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp' );

