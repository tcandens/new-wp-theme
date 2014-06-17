<?php
/**
 * tester template for displaying the header
 *
 * @package new_theme
 * @since new_theme 1.0
 */
?>

<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php

		wp_title( '|', true, 'right' );

		bloginfo( 'name' ); 

		?>
		</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>