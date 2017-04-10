<?php
/**
 * Template part for displaying page content in single.php.
 *
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-single"); ?>>
    <?php $image = get_field("banner");
    if($image):?>
        <div class="row-1">
            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
        </div><!--.row-2-->
    <?php endif;?>
    <div class="row-2 clear-bottom">
        <div class="column-1">
            <div class="title">
                <header>
                    <h1><?php the_title();?></h1>
                </header>
            </div><!--.title-->
            <div class="copy">
                <?php the_content();?>
                <?php $rows = get_field("sermon");
                if($rows):?>
                    <table>
                        <?php foreach($rows as $sermon):
                            $date = $sermon["date"];
                            $speaker = $sermon["speaker"];
                            $download_title = $sermon["download_title"];
                            $download = $sermon["download_pdf"];
	                        $audio_file = $sermon["audio_file"];
	                        $audio_title = $sermon["audio_title"];?>
                            <tr>
	                            <?php if($date):?>
                                    <td><?php echo $date;?></td>
                                <?php else:?>
                                    <td></td>
	                            <?php endif;?>
	                            <?php if($speaker):?>
	                                <td><?php echo $speaker;?></td>
	                            <?php else:?>
                                    <td></td>
                                <?php endif;?>
	                            <?php if($download_title):?>
                                    <td>
                                        <?php if($download):?>
                                            <a href="<?php echo $download;?>" target="_blank">
                                        <?php endif;?>
                                            <?php echo $download_title;?>
                                        <?php if($download):?>
                                            </a>
                                        <?php endif;?>
                                    </td>
	                            <?php else:?>
                                    <td></td>
                                <?php endif;?>
	                            <?php if($audio_file):?>
                                    <td><a href="<?php echo $audio_file;?>" target="_blank"><?php echo !empty($audio_title) ? $audio_title: "Audio";?></a></td>
	                            <?php else:?>
                                    <td></td>
                                <?php endif;?>
                            </tr>
                        <?php endforeach;?>
                    </table>
                <?php endif;?>
            </div><!--.copy-->
        </div><!--.column-1-->
        <div class="column-2">
	        <?php get_sidebar('archive-sermons');?>
        </div><!--.column-2-->
    </div><!--.row-3-->
</article><!-- #post-## -->
