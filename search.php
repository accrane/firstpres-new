<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ACStarter
 */

get_header("interior"); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <?php if(have_posts()):?>
                <section <?php post_class("template-archive"); ?>>
                    <div class="row-2 clear-bottom">
                        <div class="column-1">
                            <div class="title">
                                <header>
                                    <h1>Search</h1>
                                    <h2><?php the_search_query();?></h2>
                                </header><!-- .page-header -->
                            </div><!--.title-->
                            <div class="posts">
                                <?php while(have_posts()):the_post();?>
                                    <div class="post clear-bottom">
                                        <div class="title">
                                            <header>
                                                <h2>
                                                    <a href="<?php echo get_the_permalink();?>">
                                                        <?php the_title();?>
                                                    </a>
                                                </h2>
                                            </header>
                                        </div><!--.title-->
	                                    <?php if(get_the_excerpt()):?>
                                            <div class="copy">
			                                    <?php the_excerpt();?>
												<a href="<?php the_permalink();?>">
													<span class="read-more">Read More</span>
												</a>
                                            </div><!--.copy-->
	                                    <?php endif;?>
                                    </div><!--.post-->
                                <?php endwhile;?>
                            </div><!--.posts-->
                            <?php pagi_posts_nav_default();?>
                        </div><!--.column-1-->
                        <div class="column-2">
                            <?php //get_sidebar('archive');?>
                        </div><!--.column-2-->
                    </div><!--.row-3-->
                </section><!-- #post-## -->
            <?php endif;?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
