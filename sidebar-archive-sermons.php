<?php
/**
 * The sidebar containing the archive area.
 *
 */

?>
<aside class="archive copy" role="complementary">
    <h2>Archives</h2>
    <?php $args = array("post_type"=>"sermon","posts_per_page"=>-1,"orderby"=>"menu_order","order"=>"ASC");
    $query = new WP_Query($args);
    if($query->have_posts()): ?>
        <ul>
            <?php while($query->have_posts()):$query->the_post();?>
                <li><a href="<?php echo get_the_permalink();?>"><?php the_title();?></a></li>
            <?php endwhile;?>
        </ul>
        <?php wp_reset_postdata();
    endif;?>
</aside><!-- #secondary -->
