<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package otono
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <div id="navbar" class="navbar navbar-default navbar-page-title">
        <div class="container">
            <?php
            the_custom_logo();
            ?>
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </div>
            <div class="navbar-responsive-collapse out" aria-expanded="true" style="">
                <?php
                $location = 'menu-1';
                if ( has_nav_menu( $location ) ) {
                        wp_nav_menu( array(
                            'theme_location' => $location,
                            'menu_id'        => 'primary-menu',
                            'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>'
                        ) 
                    );
                }
                ?>
            </div>            
	        <div class="menu-btn"></div>

        </div>
    </div>
    <header id="page-title" class="jumbotron background">
        <div class="container">
            <div class="horizontal-center vertical-center">
				<?php if(is_front_page()){ ?>
						<h1 class="article-title"><?php bloginfo( 'name' ); ?></h1>
						<?php $otono_description = get_bloginfo( 'description', 'display' );
						if ( $otono_description || is_customize_preview() ) {?>
						<h2 class="article-subtitle"><?php echo $otono_description; /* WPCS: xss ok. */ ?></h2>
				<?php }}
					elseif(is_archive()){
						the_archive_title( '<h1 class="article-title">', '</h1>' );
						the_archive_description( '<h2 class="article-subtitle">', '</div>' );
					}else{
					?>
					<h1 class="article-title"><?php echo get_the_title(); ?></h1>
					<?php
					}
				?>
            </div>
        </div>
    </header>

    <div class="container foreground">
