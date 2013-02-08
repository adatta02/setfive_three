<?php 

add_shortcode( 'latestposts', 'get_shout_latestposts' );

function get_shout_latestposts( $attr ){
    
	$attr = is_array($attr) ? $attr : array();
	
	$attr = array_merge( array("url" => "http://shout.setfive.com/feed/", "num" => 3, "excerpt" => 200), $attr );
	
    $html = "<div class='blogroll'>";    
    $rss = @simplexml_load_file( $attr["url"] ) or array();
    
    $max = $attr["num"];
    $c = 0;
    
    foreach( $rss->channel->item as $post ){
        
    	$desc = $attr["excerpt"] == "full" ? $post->description : substr($post->description, 0, $attr["excerpt"]);
    	
        $html .= '
    <ul class="listless">
	    <li><a target="_blank" href="' . $post->link . '" class="title_link">' . $post->title . '</a></li>
	    <li><p>' . $desc . '<a href="' . $post->link . '">...</a></p></li>
    </ul>';
        
        $c ++;
        
        if( $c == $max ){ break; }        
    }
    
    $html .= "</div>";
    
    return $html;
}