<?php
/**
 * Template part for displaying page content in page-about.php.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-blog"); ?>>
    <?php $image = get_field("banner");
    if($image):?>
        <div class="row-2">
            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
        </div><!--.row-2-->
    <?php endif;?>
    <div class="row-3 clear-bottom">
        <div class="column-1">
            <div class="title">
                <header>
                    <h1><?php the_title();?></h1>
                </header>
            </div><!--.title-->
            <?php $args = array(
                'post_type'=>'post',
                'posts_per_page'=>10,
                'orderby'=>'date',
                'order'=>'DESC',
                'paged'=>$paged
            );
            $query = new WP_Query($args);
            if($query->have_posts()):?>
                <div class="row-blog">
                    <?php while($query->have_posts()): $query->the_post();
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                        $alt = $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);?>
                        <div class="row-post clear-bottom">
                            <div class="column-1 copy <?php if($image) echo "two-column";?>">
                                <h3><a href="<?php echo get_the_permalink();?>"><?php echo the_title();?></a></h3>
                                <p><?php echo the_date();?></p>
                                <?php the_content('. . . <span class="read-more">Read More</span>');?>
                            </div><!--.column-1-->
                            <?php if($image):?>
                                <div class="column-2">
                                    <img src="<?php echo $image[0];?>" <?php if($alt):?>alt="<?php echo $alt;?>"<?php endif;?>>
                                </div><!--.column-2-->
                            <?php endif;?>
                        </div><!--.row-post-->
                    <?php endwhile;?>
                </div><!--.row-blog-->
                <?php pagi_posts_nav($query);?>
                <?php wp_reset_postdata();
            endif;?>
        </div><!--.column-1-->
        <div class="column-2">
            <?php get_sidebar('archive');?>
        </div><!--.column-2-->
    </div><!--.row-3-->
</article><!-- #post-## -->
