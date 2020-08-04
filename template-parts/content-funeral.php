<?php
/**
 * Template part for displaying page content in single.php.
 *
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-live"); ?>>
    <?php $post = get_post(5);
    setup_postdata($post);
    $sections = get_field("sections");
    $link = get_the_permalink();
    wp_reset_postdata();
    if($sections):?>
        <div class="row-1">
            <div class="wrapper sub-menu">
                <ul id="sub-menu" class="expanded">
                    <?php foreach($sections as $section):
                        if($section['menu_title']):?>
                            <li><a href="<?php echo $link.'#'.sanitize_title_with_dashes($section['menu_title']);?>"><?php echo $section['menu_title'];?></a></li>
                        <?php endif;
                    endforeach;?>
                    <li>
                        <a href="<?php echo get_the_permalink();?>"><?php the_title();?></a>
                    </li>
                </ul>
            </div><!--.wrapper-->
        </div><!--.row-1-->
    <?php endif;?>
    <?php $image = get_field("banner");
    if($image):?>
        <div class="row-2">
            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
        </div><!--.row-2-->
    <?php endif;?>
    <div class="row-3 clear-bottom">
        <div class="column-z">
            <div class="title">
                <header>
                    <h1><?php the_title();?></h1>
                </header>
            </div><!--.title-->
            <?php if(get_the_content()):?>
                <div class="copy">
                    <?php the_content();?>
                </div><!--.copy-->
            <?php endif;?>



            <?php
            $past_title = get_field("past_title");
            $live_title = get_field("live_title"); ?>
        
        <!-- new live stream code for funerals -->

        <div id="boxcast-widget-cpshpw33yqrw0i0pejvs"></div><script type="text/javascript" charset="utf-8">(function(d, s, c, o) {var js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];var h = (('https:' == document.location.protocol) ? 'https:' : 'http:');js.src = h + '//js.boxcast.com/v3.min.js';js.onload = function() { boxcast.noConflict()('#boxcast-widget-'+c).loadChannel(c, o); };js.charset = 'utf-8';fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'cpshpw33yqrw0i0pejvs', {"showTitle":1,"showDescription":1,"showHighlights":1,"showRelated":true,"defaultVideo":"closest","market":"unknown","showCountdown":true,"showDocuments":true,"showIndex":false,"showDonations":false,"playInline":true}));</script>


        
        <!-- Changed embed on Aug 3, 2020 -->
        <!-- Changed embed on Aug 3, 2020 -->
        <!-- <div id="boxcast-widget-ruhi5ferzvbo8bqmbi52"></div><script type="text/javascript" charset="utf-8">(function(d, s, c, o) {var js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];var h = (('https:' == document.location.protocol) ? 'https:' : 'http:');js.src = h + '//js.boxcast.com/v3.min.js';js.onload = function() { boxcast.noConflict()('#boxcast-widget-'+c).loadChannel(c, o); };js.charset = 'utf-8';fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'ruhi5ferzvbo8bqmbi52', {"showTitle":1,"showDescription":1,"showHighlights":1,"showRelated":true,"defaultVideo":"closest","market":"unknown","showCountdown":true,"showDocuments":false,"showIndex":false,"showDonations":false}));</script> -->
        
        
        
        
                <!--
        <div class="live">
                    <?php if($live_title):?>
                        <h2><?php echo $live_title;?></h2>
                    <?php endif;?>
                    <style>.embed-container { position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
                    <div class='embed-container'>
                        <iframe id="playerIFrame" frameborder="0" scrolling="no" align="middle"
                                src="https://player.piksel.com/playerlive.php?s=b2tj2evy&r=true&doResize=false"
                                height="360" width="640"
                                allowtransparency="true" allowfullscreen>
                        </iframe>
                    </div>
                </div><!--.live-->
                <?php // change | will add feed in backend later ?>
                <!--
        <div class="past">
                    <?php if($past_title):?>
                        <h2><?php echo $past_title;?></h2>
                    <?php endif;?>
                    <div class="iframe-wrapperbbbb">
                        <style>.embed-container-2 { position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden; max-width: 100%; height: 1000px; } .embed-container-2 iframe, .embed-container-2 object, .embed-container-2 embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
                        <div class='embed-container-2'>
                                <iframe frameborder="0" scrolling="no" align="middle"
                                    src="https://player.piksel.com/player.php?p=dek7nez2&wmode=transparent&r=true"
                                    height="400" width="640"
                                    allowtransparency="true" allowfullscreen>
                                </iframe>
                            </div>
                    </div>
                </div><!--.past-->
        </div><!--.column-1-->
        <div class="column-2">
            <?php get_sidebar('staff-2');?>
        </div><!--.column-2-->
    </div><!--.row-3-->
</article><!-- #post-## -->
