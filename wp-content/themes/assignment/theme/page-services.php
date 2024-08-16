
<?php
/*
	Template Name: Services
*/
get_header(); 


?>


<section class="relative">
    <img class="w-full h-[500px] object-cover" src="<?php echo get_template_directory_uri(); ?>/img/banner.png" alt="Banner Image">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col justify-center h-full">
                <h1 class="text-white text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-center">
                  We provide data driven<span class="text-[#B8CB22]">real</span> <br>
                  <span class="text-[#B8CB22]">estate </span>investment advice.
                </h1>
                  <p class="text-xl sm:text-2xl md:text-3xl text-[#F5F5F5] font-bold pt-7 px-8 sm:px-8 md:px-8 lg:px-0 mt-16 text-center">
                    Global expertise with local knowledge. <br>
                    We make real estate transactions simple and efficient.                
                  </p>
            </div>
        </div>
    </div>
</section>



  <div class="max-w-7xl mx-auto py-16 font-inter px-8 sm:px-8 md:px-8 lg:px-0" id="services">
    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[#B8CB22] text-center">OUR SERVICES</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 pt-7 gap-8">
                <?php $the_query = new WP_Query( array('post_type' =>'services','posts_per_page' => '100',  'post__not_in'   => array( $id),) );?>
							     <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>

									   <?php
										$thumbnail_id = get_post_thumbnail_id();
										$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
										$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);

                                        $categories = get_the_category();

								?> 
      <div class="bg-[#3D3D3D] p-5 border rounded-lg">
                <?php
                  if ( has_post_thumbnail() ) {
					        $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
				          ?>

        <img src="<?php echo $attachment_image; ?>" class="w-40" alt="">
                  <?php } ?>  
        <h4 class="text-lg font-bold text-white"><?php the_title(); ?></h4>
        <p class="text-lg font-normal text-white"><?php echo get_field('service_heading'); ?></p>
        <div class="flex items-center text-[#B8CB22] mt-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
          </svg>
          <a href="<?php the_permalink(); ?>">Learn More</a>
        </div>
      </div>
      <?php endwhile; endif; ?>

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

<?php get_footer(); ?>
