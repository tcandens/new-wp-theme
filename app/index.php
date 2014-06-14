<?php
/**
 * new_theme Index template
 *
 * @package new_theme
 * @since new_theme 1.0
 */

get_header(); ?>

	<body class="<?php body_class(); ?>">

		<h1 class="logo">Joey Thies</h1>

		<div class="content">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="post-<?php  the_ID(); ?>">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>
		</div>

		<?php wp_footer(); ?>
		
	</body>
</html>