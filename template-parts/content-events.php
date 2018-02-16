<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-events"); ?>>
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
            <div class="copy">
                <?php the_content();?>
            </div><!--.copy-->
            <?php $args = array(
                'post_type'=>'event',
                'posts_per_page' => -1,
                'order'=>'ASC',
                'orderby'=>'menu_order',
            );
            $query = new WP_Query($args);
            if($query->have_posts()):?>
                <div class="events-wrapper">
                    <?php while($query->have_posts()): $query->the_post();?>
                        <div class="event clear-bottom">
                            <a href="<?php echo get_the_permalink();?>">
                                <?php $date = get_field("date");
                                if($date):
                                    $date_array = explode(",",$date);
                                    if(!empty($date_array)):?>
                                        <div class="column-1 date">
                                            <div class="row-1 month">
                                                <?php echo $date_array[0].".";?>
                                            </div><!--.row-1-->
                                            <div class="row-2 day">
                                                <?php echo $date_array[1];?>
                                            </div><!--.row-2-->
                                        </div><!--.column-1-->
                                    <?php endif;
                                endif;?>
                                <div class="column-2 title">
                                    <?php the_title();?>
                                </div><!--.column-2-->
                            </a>
                        </div><!--.event-->
                    <?php endwhile;?>
                </div><!--.events-wrapper-->
            <?php endif;?>
        </div><!--.column-1-->
    </div><!--.row-3-->
</article><!-- #post-## -->
