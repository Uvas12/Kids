<?php

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This is not a valid entry point to MediaWiki.' );
}
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'Kids' );
}
