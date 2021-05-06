<?php
/**
 * The base configuration for WordPress
 *
 * @package WordPress
 * @link https://codex.wordpress.org/Editing_wp-config.php
 */


/** Database configuration. */
$table_prefix           = 'wp_';
const DB_HOST           = 'localhost';
const DB_NAME           = 'database_name_here';
const DB_USER           = 'username_here';
const DB_PASSWORD       = 'password_here';


/** Paths & URLs */
const WP_CONTENT_DIR    = __DIR__ . '/';
const WP_CONTENT_URL    = '/';
const UPLOADS           = 'files/';


const WP_SITEURL        = 'https://admin.neurony.ro';
const WP_HOME           = 'https://neurony.ro';

const WP_CONTENT_DIR    = __DIR__ . '/';
const WP_CONTENT_URL    = '//';
const UPLOADS           = 'files';


/** Security tokens. */
const AUTH_KEY          = 'put your unique phrase here';
const SECURE_AUTH_KEY   = 'put your unique phrase here';
const LOGGED_IN_KEY     = 'put your unique phrase here';
const NONCE_KEY         = 'put your unique phrase here';
const AUTH_SALT         = 'put your unique phrase here';
const SECURE_AUTH_SALT  = 'put your unique phrase here';
const LOGGED_IN_SALT    = 'put your unique phrase here';
const NONCE_SALT        = 'put your unique phrase here';


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
