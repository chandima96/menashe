<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package menashe
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo( 'charset' ); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/custom.css" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Karantina:wght@300;400;700&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&display=swap');

.Heebo {
  font-family: "Heebo", sans-serif;
}
.Karantina {
  font-family: 'Karantina', cursive;
}
</style>
