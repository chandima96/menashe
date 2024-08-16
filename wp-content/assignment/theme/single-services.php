<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package assignment
 */

get_header();

$service_heading = get_field('service_heading');
$service_description = get_field('service_description');

?>

<section class="relative">
    <img class="w-full h-[500px] object-cover" src="<?php echo get_template_directory_uri(); ?>/img/banner.png" alt="Banner Image">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col justify-center h-full">
                <h1 class="text-white text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-center">
				<?php the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

  <div class="bg-[#3D3D3D]" id="aboutus">
    <div class="max-w-7xl mx-auto py-16 font-inter">
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[#B8CB22] text-center"><?php echo $service_heading; ?></h2>
      <div class="text-xl sm:text-2xl md:text-3xl text-[#F5F5F5] font-normal pt-7 px-8 sm:px-8 md:px-8 lg:px-0 space-y-2"><?php echo $service_description; ?></div>
    </div>
  </div>

  <div class="bg-[#3D3D3D]" id="contactus">
  <div class="max-w-7xl mx-auto py-28 font-inter">
    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[#B8CB22] text-center">CONTACT US</h2>
    <!-- <form class="px-8">
      <div class="mb-4">
        <label class="block text-[#B8CB22] text-sm font-medium mb-2" for="name">Name</label>
        <input 
          type="text" 
          id="name" 
          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#B8CB22]" 
          placeholder="Your Name">
      </div>
  
      <div class="mb-4">
        <label class="block text-[#B8CB22] text-sm font-medium mb-2" for="email">Email</label>
        <input 
          type="email" 
          id="email" 
          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#B8CB22]" 
          placeholder="Your Email">
      </div>
  
      <div class="mb-4">
        <label class="block text-[#B8CB22] text-sm font-medium mb-2" for="message">Message</label>
        <textarea 
          id="message" 
          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#B8CB22]" 
          rows="4" 
          placeholder="Your Message"></textarea>
      </div>
  
      <div class="text-center">
        <button 
          type="submit" 
          class="bg-[#B8CB22] text-white px-4 py-2 rounded-md hover:bg-[#A4B61D] focus:outline-none focus:ring-2 focus:ring-[#8AA017]">
          Submit
        </button>
      </div>
    </form> -->
    <?php echo do_shortcode('[contact-form-7 id="44abc4f" title="Contact form"]'); ?>

  </div>
</div>

<?php
get_footer();
