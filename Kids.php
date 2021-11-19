<?php

$wgExtensionCredits['parserhook']['Kids'] = array(
        'name' => 'Kids',
		'author' => 'La pluma azul',
		'version' => '2.0',
		'description' => 'Añade una fuente de letra que llama la atención el texto a los niños y adolescentes.'
		
);

$wgHooks['ParserFirstCallInit'] = 'kidstag';

function kidstag($parser) {
	
	$parser->setHook( 'kids', 'wfconfig' );
}

function wfconfig( $input, $argv, $parser ) {
	
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
