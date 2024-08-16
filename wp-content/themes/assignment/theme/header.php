<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package assignment
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/src/output.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/customcss.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Assignment</title>
  <?php wp_head(); ?>
</head>

<body>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header class="bg-white shadow-md font-montserrat sticky top-0 z-50">
    <div class="container mx-auto max-w-7xl flex items-center justify-between p-4">

      <a href="#" class="flex items-center space-x-2">
        <img class="h-auto w-[150px]" src="<?php echo get_template_directory_uri(); ?>/img/Iconiq_Capital_Logo.png" alt="Logo">
      </a>

      <nav class="hidden lg:flex items-center space-x-6">
        <a href="<?php bloginfo('url'); ?>/" class="text-gray-800 text-lg font-semibold hover:text-[#B8CB22] transition duration-300 <?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'active' : ''; ?>">HOME</a>
        <a href="#aboutus" class="text-gray-800 text-lg font-semibold hover:text-[#B8CB22] transition duration-300 <?php echo ($_SERVER['REQUEST_URI'] == '/#aboutus') ? 'active' : ''; ?>">ABOUT</a>
        <a href="#services" class="text-gray-800 text-lg font-semibold hover:text-[#B8CB22] transition duration-300 <?php echo ($_SERVER['REQUEST_URI'] == '/#services') ? 'active' : ''; ?>">SERVICES</a>
        <a href="#partners" class="text-gray-800 text-lg font-semibold hover:text-[#B8CB22] transition duration-300 <?php echo ($_SERVER['REQUEST_URI'] == '/#partners') ? 'active' : ''; ?>">PARTNERS</a>
        <a href="#team" class="text-gray-800 text-lg font-semibold hover:text-[#B8CB22] transition duration-300 <?php echo ($_SERVER['REQUEST_URI'] == '/#team') ? 'active' : ''; ?>">TEAM</a>
      </nav>


      <a href="#contactus"
        class="hidden lg:inline-flex items-center px-5 py-2 hover:bg-[#B8CB22] border border-gray-800 text-gray-800 text-lg shadow-md font-semibold rounded-full hover:text-white transition duration-300">
        CONTACT US
      </a>

      <div class="lg:hidden">
        <button id="mobile-menu-button" class="text-gray-700 hover:text-zinc-700 focus:outline-none">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </button>
      </div>
    </div>

    <nav id="mobile-menu" class="lg:hidden hidden bg-white py-2 shadow-md">
      <div class="space-y-1 px-2">
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-100">HOME</a>
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-100">PAGES</a>
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-100">OPPORTUNITIES</a>
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-100">SERVICES</a>
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-100">ABOUT</a>
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-100">CONTACT US</a>
      </div>
    </nav>
  </header>


