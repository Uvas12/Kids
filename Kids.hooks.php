<?php

class Sky {
	
	public static function onParserFirstCallInit( Parser $parser ) {
		
		$parser->setHook( 'kids', [ self::class, 'renderBlue' ] );
		
	}
	
	public static function renderBlue( $input, array $args, Parser $parser, PPFrame $frame ) {
		
    $input = utf8_decode($input);
    $output = ""; // To stop the "Undefined Variable" errors in the webserver logfile
 
    for ($i = 0; $i < strlen($input); $i++)
      {
	
	$output .= 
      '<span style="font-size: 22px; font-family: Grandstander; color: blue;">';
    $output .= $input[$i];
    $output .= '</span>';
	  }

	return utf8_encode($output);
	}
	
}