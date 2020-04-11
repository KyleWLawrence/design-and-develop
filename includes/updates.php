<?php
//
// Local All Functions
//
// Package: Design & Develop
// Subpackage: Design And Develop
// Version: 1.0.0 - 14-04-2019
// Author: design & develop - kyle@designanddevelop.io/
// License: MIT
//

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

//-----------------------------------------------------------------------------------
//  Set Contstants
//-----------------------------------------------------------------------------------

  // DND defines.
  define( 'DND_VERSION',            '1.0.4' );
  define( 'DND_PATH',               ealpath( get_template_directory() ) . '/' );
  define( 'DND_INCLUDES_PATH',      realpath( DND_PATH . 'includes/' ) . '/' );
  define( 'DND_LOG_PATH',           WP_CONTENT_DIR . 'debug.log' );
  define( 'DND_LOG_URL',            WP_CONTENT_URL . 'debug.log' );
