<?php
/**
 * Template part for displaying page content in page-about.php.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-this-week"); ?>>
    <?php $sections = get_field("sections");
    $blog_title = get_field("blog_title");
    $row_4_title = get_field("row_4_title");
    $tickets_title = get_field("tickets_title");
    $newsletter_title = get_field("newsletter_title");
    if($sections):?>
        <div class="row-1">
            <div class="wrapper sub-menu">
                <ul id="sub-menu">
	                <?php if($row_4_title):?>
                        <li><a href="#<?php echo sanitize_title_with_dashes($row_4_title);?>"><?php echo $row_4_title;?></a></li>
	                <?php endif;?>
                    <?php foreach($sections as $section):
                        if($section['menu_title']):?>
                            <li>
                                <a href="#<?php echo sanitize_title_with_dashes($section['menu_title']);?>">
                                    <?php if($section['menu_title'] == 'Eat @ First') :
                                        echo '<span class="js-at-word">';
                                    endif;?>
                                            <?php echo $section['menu_title'];?>
                                    <?php if($section['menu_title'] == 'Eat @ First') :
                                        echo '</span>';
                                    endif;?>
                                </a>
                            </li>
                        <?php endif;
                    endforeach;?>
	                <?php if($tickets_title):?>
                        <li><a href="#<?php echo sanitize_title_with_dashes($tickets_title);?>"><?php echo $tickets_title;?></a></li>
	                <?php endif;?>
	                <?php if($newsletter_title):?>
                        <li><a href="#<?php echo sanitize_title_with_dashes($newsletter_title);?>"><?php echo $newsletter_title;?></a></li>
	                <?php endif;?>
	                <?php if($blog_title):?>
                        <li><a href="#<?php echo sanitize_title_with_dashes($blog_title);?>"><?php echo $blog_title;?></a></li>
	                <?php endif;?>
                </ul>
            </div><!--.wrapper-->
        </div><!--.row-1-->
    <?php endif;?>
<section class="now-at-top">
    <div class="row-4 clear-bottom">
        <?php $more_button_text = get_field("more_button_text");
        for($i=1;$i<=4;$i++):?>
        <div class="column column-<?php echo $i;?>">
            <?php $image = get_field("section_{$i}_image");
            $title = get_field("section_{$i}_title");
            $copy = get_field("section_{$i}_copy");
            $link = get_field("section_{$i}_link");
            $button_text = get_field("section_{$i}_button_text");?>
            <div class="overlay">
                <?php if($link):?>
                    <a href="<?php echo $link;?>"></a>
                <?php endif;?>
                <?php if($title):?>
                    <div class="title">
                        <h2><?php echo $title;?><h2>
                    </div><!--.title-->
                <?php endif;?>
                <?php if($copy):?>
                    <div class="copy">
                        <?php echo $copy;?>
                    </div><!--.copy-->
                <?php endif;?>
                <?php if(($more_button_text ||$button_text) && $link):?>
                    <div class="more">
                        <a href="<?php echo $link;?>" target="_blank">
                            <?php if($button_text) echo $button_text; else echo $more_button_text;?>
                        </a>
                    </div><!--.more-->
                <?php endif;?>
            </div><!--.overlay-->
            <?php if($i%2===1):?>
                <div class="row-1">
                    <?php if($image):?>
                        <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                    <?php endif;?>
                </div><!--.row-1-->
            <?php endif;?>
            <div class="row-2">
                <?php if($image):?>
                    <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                <?php endif;?>
                <?php if($title):?>
                    <div class="title">
                        <?php echo $title;?>
                    </div>
                <?php endif;?>
            </div><!--.row-2-->
            <?php if($i%2===0):?>
                <div class="row-1">
                    <?php if($image):?>
                        <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                    <?php endif;?>
                </div><!--.row-1-->
            <?php endif;?>
        </div><!--.column-#-->
        <?php endfor;?>
    </div><!--.row-4-->
</section>

    
    <div class="row-3 clear-bottom">
        <div class="column-1">
            <div class="title">
                <header>
                    <h1 class="js-at-word"><?php the_title();?></h1>
                </header>
            </div><!--.title-->
            <?php if(get_the_content()):?>
                <div class="copy">
                    <?php the_content();?>
                </div><!--.copy-->
            <?php endif;?>
        </div><!--.column-1-->
        <div class="column-2">
            <?php 
            $image = get_field("event_image");
            if($image):
                 ?>
                 <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
            <?php endif;?>

        </div><!--.column-2-->
    </div><!--.row-3-->
    <?php $row_4_copy = get_field("row_4_copy");?>
    <?php if($row_4_title):?>
        <a name="<?php echo sanitize_title_with_dashes($row_4_title);?>"></a>
    <?php endif;?>
    <div class="row-big-event clear-bottom row-4">
		<?php if($row_4_title):?>
            <div class="title">
				<?php if (strpos($row_4_title, '@') !== false) {
					$headerClass = 'js-at-word';
				} else {$headerClass = '';} ?>
                <h2 class="<?php echo $headerClass; ?>"><?php echo $row_4_title;?></h2>
            </div><!--.title-->
		<?php endif;?>
        <div class="column-1 copy">
			<?php if($row_4_copy):?>
				<?php echo $row_4_copy?>
			<?php endif;?>
        </div><!--.column-1-->
        <div class="column-2">
            <?php $tn_title = get_field("tickets_and_newsletter_title");
            $tn_link = get_field("tickets_and_newsletter_link");
            $tickets_repeater = get_field("tickets_repeater");
            $newsletter_repeater = get_field("newsletter_repeater");?>
            <?php if($tn_title):?>
                <div class="row-1">
                    <?php if($tn_link):?>
                        <a href="<?php echo $tn_link;?>" target="_blank">
                    <?php endif;?>
                    <?php echo $tn_title;?>
                    <?php if($tn_link):?>
                        </a>
                    <?php endif;?>
                </div><!--.row-1-->
            <?php endif;?>
            <!-- the videos -->
                <?php if( have_rows('sidebar_videos') ) : while( have_rows('sidebar_videos') ): the_row(); 
                    $titlev = get_sub_field('title');
                    $videov = get_sub_field('video');
                ?>
                <div class="theembeds">
                    <div class="video-row">
                        <div class="titlev"><h3><?php echo $titlev; ?></h3></div>
                        <div class="videov">
                            <div class="embed-container"><?php echo $videov; ?></div>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
            <?php if($tickets_repeater||$newsletter_repeater):?>
                <div class="row-2 clear-bottom">
                    <?php if($tickets_repeater&&!empty($tickets_repeater)):?>
                        <div class="column-1">
                            <?php if($tickets_title):?>
                                <a name="<?php echo sanitize_title_with_dashes($tickets_title);?>"></a>
                                <div class="row-1">
                                    <?php echo $tickets_title;?>
                                </div><!--.row-1-->
                            <?php endif;?>
                            <div class="row-2">
                                <?php foreach($tickets_repeater as $item):?>
                                    <?php if($item['title']):?>
                                        <div class="item">
	                                        <?php if($item['link']):?>
	                                            <a href="<?php echo $item['link'];?>" target="_blank">
                                            <?php endif;?>
                                                <?php echo $item['title'];?>
	                                        <?php if($item['link']):?>
                                                </a>
	                                        <?php endif;?>
                                        </div><!--.item-->
                                   <?php endif;?>
                                <?php endforeach;?>
                            </div><!--.row-2-->
                        </div><!--.column-1-->
                    <?php endif;?>
	                <?php if($newsletter_repeater&&!empty($newsletter_repeater)):?>
                        <div class="column-2">
                            <?php if($newsletter_title):?>
                                <a name="<?php echo sanitize_title_with_dashes($newsletter_title);?>"></a>
                                <div class="row-1">
                                    <?php echo $newsletter_title;?>
                                </div><!--.row-1-->
                            <?php endif;?>
                            <div class="row-2">
	                            <?php foreach($newsletter_repeater as $item):?>
		                            <?php if($item['title']):?>
                                        <div class="item">
				                            <?php if($item['link']):?>
                                            <a href="<?php echo $item['link'];?>" target="_blank">
					                            <?php endif;?>
					                            <?php echo $item['title'];?>
					                            <?php if($item['link']):?>
                                            </a>
			                            <?php endif;?>
                                        </div><!--.item-->
		                            <?php endif;?>
	                            <?php endforeach;?>
                            </div><!--.row-2-->

                        </div><!--.column-2-->
                    <?php endif;?>
                </div><!--.row-2-->
            <?php endif;?>
        </div><!--.column-2-->
    </div><!--.row-4-->
	<?php if($sections):
		for($i=0;$i<count($sections);$i++):
			$title = $sections[$i]['title'];
			$copy = $sections[$i]['copy'];
			$menu_title = $sections[$i]['menu_title'];
			$image = $sections[$i]['image'];
            $imageLink = $sections[$i]['link'];?>
            <a name="<?php echo sanitize_title_with_dashes($menu_title);?>"></a>
            <div class="content-row clear-bottom row-<?php echo $i+5;?>">
				<?php if($title):?>
                    <div class="title">
                    <?php if (strpos($title, '@') !== false) {
                        $headerClass = 'js-at-word';
                    } else {$headerClass = '';} ?>
                        <h2 class="<?php echo $headerClass; ?>"><?php echo $title;?></h2>
                    </div><!--.title-->
				<?php endif;?>
                <div class="column-1 copy">
					<?php if($copy):?>
						<?php echo $copy?>
					<?php endif;?>
                </div><!--.column-1-->
                <div class="column-2">
					<?php if($image):
                        if($imageLink) {echo '<a href="'.$imageLink.'">';}?>
                            <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                        <?php if($imageLink) {echo '</a>';} $imageLink ='';?>
					<?php endif;?>

                </div><!--.column-2-->
            </div><!--.row-#-->
		<?php endfor;
	endif;//if for sections?>
    <?php if($blog_title):?>
        <a name="<?php echo sanitize_title_with_dashes($blog_title);?>"></a>
        <div class="row-blog clear-bottom">
            <?php $image = get_field("blog_image");
            $picker = get_field("blog_picker");?>
            <div class="title">
                <header>
                    <h2><?php echo $blog_title;?></h2>
                </header>
            </div><!--.title-->
            <div class="column-1 copy <?php if($image) echo "two-column";?>">
                <?php if($picker):
                    $post = get_post($picker);
                    setup_postdata($post);?>
                    <h3><a href="<?php echo get_the_permalink();?>"><?php echo the_title();?></a></h3>
                    <p><?php echo the_date();?></p>
                    <?php the_content('. . . <span class="read-more">Read More</span>');?>
                    <?php wp_reset_postdata();
                endif;?>
            </div><!--.column-1-->
            <?php if($image):?>
                <div class="column-2">
                    <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                </div><!--.column-2-->
            <?php endif;?>
        </div><!--.row-4-->
    <?php endif;?>
</article><!-- #post-## -->
