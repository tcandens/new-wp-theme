<?php
/**
 * new_theme Index template
 *
 * @package new_theme
 * @since new_theme 1.0
 */

get_header(); ?>

	<body class="<?php body_class(); ?>">

		<nav class="nav">
			<div class="logo"></div>
			<?php 

			$menu_settings = array(
				'container'		=> 'div',
				'menu_class'	=> 'menu'
				);

			wp_nav_menu( $menu_settings ); 

			?>
		</nav>

		<div class="content">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="post-<?php  the_ID(); ?>">
				<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'featured', array('class' => 'circle') );
				}
				?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>
		</div>

		<?php wp_footer(); ?>
		
	</body>
</html>