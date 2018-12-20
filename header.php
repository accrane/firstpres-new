<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131182447-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131182447-1');
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<?php 
$alert=get_field('alert_message', 'option');
$showAlert=get_field('show_alert_message', 'option');
if($showAlert){$showAlert=$showAlert[0];}

// echo '<pre>';
// print_r($alert);
// echo '</pre>';
if($showAlert=='Yes' && $alert !='' ) : ?>
	<div class="alert">
		<?php echo $alert; ?>
	</div>
<?php endif; ?>
    <div id="hamburger">
        <div class="wrapper">
            <i class="fa fa-bars"></i>
            <div class="menu copy">
                <?php wp_nav_menu( array( 'theme_location' => 'menu' ) ); ?>
            </div><!--.menu-->
        </div><!--.wrapper-->
    </div><!--.hamburger-->
	<div id="content" class="site-content wrapper">
