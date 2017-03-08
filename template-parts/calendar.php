<div class="calendar">
	<?php 

	// Get RSS Feed(s)
	include_once( ABSPATH . WPINC . '/feed.php' );
	
	// Get a SimplePie feed object from the specified feed source.
	$rss = fetch_feed( 'http://calendar.firstpres-charlotte.org/MasterCalendar/RSSFeeds.aspx?data=fKKMKomtzIRQrJieD3uz14%2fzygXk13LULgHKa9r00EM%3d' );
	
	if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly
	
		// Figure out how many total items there are, but limit it to 1. 
		$maxitems = $rss->get_item_quantity( 10 ); 
	
		// Build an array of all the items, starting with element 0 (first element).
		$rss_items = $rss->get_items( 0, $maxitems );
	
	endif;
	?>
    <?php if ( $maxitems == 0 ) : ?>
    	<li><?php _e( 'No items', 'my-text-domain' ); ?></li>
	<?php else : ?>
    <?php // Loop through each feed item and display each item as a hyperlink. ?>
    <?php foreach ( $rss_items as $item ) : 

    // Apply filters to remove the images...
    $content = preg_replace('/<img[^>]*>/i', '', $item->get_description());
    $content = apply_filters('get_description', $content);

    // $content = wordwrap($content, 28);
    // $content = explode("\n", $content);
    // $content = $content[0] . '...';

    // echo ' <pre>';
    // print_r($item);
    // echo '</pre>';
    //if (strlen($content) > 10)
    //$content = substr($content, 0, 7) . '...';
    // $element_name = 'example';
    // $data = $item->get_item_tags(SIMPLEPIE_NAMESPACE_RSS_20, $element_name);
    // if ( isset($data[0]['data']) ) {
    //   echo '<!-- my dump';
    //   var_dump($element_name . ' is ' . $data[0]['data'] );
    //   echo '-->';
    // }
    
    ?>
    <div class="feed-item">
    	<h2><?php echo $item->get_title() ?></h2>
    	<div class="readmore">
    		<a href="<?php echo esc_url( $item->get_permalink() ); ?>">Read More</a>
    	</div>
    	<!-- date, time -->
    </div>


    <?php endforeach; ?>
<?php endif; ?>
</div>