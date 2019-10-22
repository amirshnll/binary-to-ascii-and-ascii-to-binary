<?php

	header("Content-Type: text/html; charset=utf-8");

	function text_to_binary($text){
		$bin = array();
	    for( $i = 0 ; strlen( $text ) > $i ; $i++ )
	    	$bin[] = decbin( ord( $text[$i] ) );
	    return implode( ' ' , $bin );
	}
	
	function binary_to_text($bin){
		$text = array();
		$bin = explode( " ", $bin );
		for( $i=0 ; count( $bin ) > $i ; $i++ )
			$text[] = chr( bindec( $bin[$i] ) );
		return implode( $text );
	}

?>