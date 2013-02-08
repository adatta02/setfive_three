<?php 

add_shortcode( 'latestposts', 'get_shout_latestposts' );

function get_shout_latestposts( $attr ){
    
    $html = "<div class='blogroll'>";    
    $rss = @simplexml_load_file('http://shout.setfive.com/feed/') or array();
    
    $max = 3;
    $c = 0;
    
    foreach( $rss->channel->item as $post ){
        
        $html .= '
    <ul class="listless">
	    <li><a target="_blank" href="' . $post->link . '" class="title_link">' . $post->title . '</a></li>
	    <li><p>' . substr($post->description, 0, 200) . ' <a href="' . $post->link . '">...</a></p></li>
    </ul>';
        
        $c ++;
        
        if( $c == $max ){ break; }        
    }
    
    $html .= "</div>";
    
    return $html;
}