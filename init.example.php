<?php
/**
 * Example file for settin up the environment specific configuration
 *
 * Note: you probably don't want to use the configuration in your project
 * directly, but instead you want to:
 * 1) copy this file
 * 2) make the changes to the copy for your specific environment
 * 3) load your specific configuration file in the init.deployment.php file
 *
 * PHP version 5.5
 *
 * @category   OpCacheGUI
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk <https://github.com/PeeHaa>
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace OpCacheGUI;

use OpCacheGUI\I18n\FileTranslator;
use OpCacheGUI\Network\Router;

/**
 * Setup error reporting
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 0);

/**
 * Setup timezone
 */
ini_set('date.timezone', 'Europe/Amsterdam');

/**
 * Setup the translator
 */
$translator = new FileTranslator(__DIR__ . '/texts', 'en');

/**
 * Setup URI scheme (url rewrites [Router::URL_REWRITE] / query strings [Router::QUERY_STRING])
 */
$uriScheme = Router::URL_REWRITE;

/**
 * Login credentials
 * 
 * The password can be any password hash which contains the hash algorithm, the cost and the salt
 * (e.g as returned by password_hash() or crypt())
 */
$login = [
    'username' => 'peehaa',
    'password' => '$2y$14$kHoRlbxPF7Bf1903cDMTgeYBsFgF8aJA46LIH9Nsg4/ocDa9HTTbe',
];
