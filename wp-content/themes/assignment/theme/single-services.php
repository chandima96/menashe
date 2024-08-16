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
      <div class="text-lg sm:text-xl md:text-2xl text-[#F5F5F5] font-normal pt-7 px-8 sm:px-8 md:px-8 lg:px-0 space-y-2"><?php echo $service_description; ?></div>
    </div>
  </div>

  <div class="bg-[#3D3D3D]" id="contactus">
  <div class="max-w-4xl mx-auto py-28 font-inter px-8 sm:px-8 md:px-8 lg:px-0">
    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[#B8CB22] text-center">CONTACT US</h2>
    <div class="form-container">
      <!-- <form action="#" method="POST">
        <div>
          <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Send Message</button>
            </div>
        </div>
      </form> -->
      <?php echo do_shortcode('[contact-form-7 id="44abc4f" title="Contact form"]'); ?>
    </div>              

  </div>
</div>

<?php
get_footer();
