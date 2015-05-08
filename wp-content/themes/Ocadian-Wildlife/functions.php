<?php



// add Westray digital Art credit to footer
function westweb_footer_credit() {
	echo ('<p id="westwebcredit"><a href="http://www.westraywebdesign.co.uk" target="_blank">site designed in Orkney by Westray Digital Art (web design)</a></p>');
}
add_action('thematic_after', 'westweb_footer_credit');

// add back exceprts functionality
function childtheme_content($content) {
	if ( is_home () ) {
		$content= 'excerpt';}
	return $content;
}
add_filter('thematic_content', 'childtheme_content');

// replace [...] at end of excerpts with reade more... 
function excerpt_ellipse($text) {
   return str_replace('[...]', ' <a href="'.get_permalink().'">...read more</a>', $text); }
add_filter('get_the_excerpt', 'excerpt_ellipse');


function childtheme_override_doctitle() {
        $separator = apply_filters('thematic_doctitle_separator', '|');
        $doctitle = '<title>' . wp_title( $separator, false, 'right' ) . ' Orcadian Wildlife</title>' . "\n";
        echo $doctitle;
	}


?>