
<?php
/*
	Template Name: Home
*/
get_header(); 

?>


  <section class="relative">
    <img class="w-full h-[500px] object-cover" src="<?php echo get_template_directory_uri(); ?>/img/banner.png" alt="Banner Image">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col justify-center h-full">
                <h1 class="text-white text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-center">
                Making Realty a <span class="text-[#B8CB22]">Reality</span>
                </h1>
                  <p class="text-xl sm:text-2xl md:text-3xl text-[#F5F5F5] font-bold pt-7 px-8 sm:px-8 md:px-8 lg:px-0 mt-16 text-center">
                  Providing unparalleled services for wealth creation               
                  </p>
            </div>
        </div>
    </div>
</section>


  <div class="bg-[#3D3D3D]" id="aboutus">
    <div class="max-w-7xl mx-auto py-28  font-inter">
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[#B8CB22] text-center">ABOUT US</h2>
      <p class="text-lg sm:text-xl md:text-2xl text-[#F5F5F5] font-normal pt-7 px-8 sm:px-8 md:px-8 lg:px-0  ">
        Iconiq Capital (Pvt) Ltd, a subsidiary of Iconiq One Holdings (Pvt) Ltd, offers a diverse range of services to 
        meet the needs of companies that require financial expertise for wealth creation. Our team consists of skilled professionals 
        with varied backgrounds and expertise, united by a shared dedication to providing personalized service and expert guidance. 
        Whether you seek development sales and marketing consultants, traditional brokerage services, or aid with special asset disposition, 
        we aim to deliver a customized, results-driven approach to help clients optimize their investment returns.
      </p>
      <p class="text-lg sm:text-xl md:text-2xl text-[#F5F5F5] font-normal mt-2 px-8 sm:px-8 md:px-8 lg:px-0">
        At Iconiq Capital, we understand that each client is unique and deserves a tailored approach to financial success. 
        Our team of specialists is dedicated to providing top-notch services that cater to your specific needs. Whether you 
        are looking to grow your wealth, enhance your marketing strategies, or navigate complex financial decisions, we are 
        here to guide you every step of the way.
      </p>
    </div>
  </div>

  <div class="max-w-7xl mx-auto py-28  font-inter px-8 sm:px-8 md:px-8 lg:px-0" id="services">
    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[#B8CB22] text-center">OUR SERVICES</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 pt-7 gap-8">
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
          <p class="text-lg font-normal text-white">
              <?php 
              $service_heading = get_field('service_heading');
              echo limit_words($service_heading, 8);
              ?>
          </p>        
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

<div class="max-w-7xl mx-auto py-28  font-inter px-8 sm:px-8 md:px-8 lg:px-0" id="partners">
  <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[#B8CB22] text-center">OUR PARTNERS</h2>
  <div class="caro-container mt-8">
          <div class="carousel">
            <div class="carousel__track">
                <div class="carousel__slide px-5"><img src="<?php echo get_template_directory_uri(); ?>/img/Iconiq_Capital_Logo.png" alt="Logo 1"></div>
                <div class="carousel__slide px-5"><img src="<?php echo get_template_directory_uri(); ?>/img/Iconiq_Capital_Logo.png" alt="Logo 2"></div>
                <div class="carousel__slide px-5"><img src="<?php echo get_template_directory_uri(); ?>/img/Iconiq_Capital_Logo.png"></div>
                <div class="carousel__slide px-5"><img src="<?php echo get_template_directory_uri(); ?>/img/Iconiq_Capital_Logo.png"></div>
                <div class="carousel__slide px-5"><img src="<?php echo get_template_directory_uri(); ?>/img/Iconiq_Capital_Logo.png" alt="Logo 5"></div>
                <!-- Repeat logos to create the infinite effect -->
                <div class="carousel__slide px-5"><img src="<?php echo get_template_directory_uri(); ?>/img/Iconiq_Capital_Logo.png" alt="Logo 1"></div>
                <div class="carousel__slide px-5"><img src="<?php echo get_template_directory_uri(); ?>/img/Iconiq_Capital_Logo.png" alt="Logo 2"></div>
                <div class="carousel__slide px-5"><img src="<?php echo get_template_directory_uri(); ?>/img/Iconiq_Capital_Logo.png" alt="Logo 3"></div>
                <div class="carousel__slide px-5"><img src="<?php echo get_template_directory_uri(); ?>/img/Iconiq_Capital_Logo.png" alt="Logo 4"></div>
                <div class="carousel__slide px-5"><img src="<?php echo get_template_directory_uri(); ?>/img/Iconiq_Capital_Logo.png" alt="Logo 5"></div>
            </div>
        </div>
    </div>
</div>

<div class="bg-[#3D3D3D]" id="team">
  <div class="max-w-7xl mx-auto py-28  font-inter px-8 sm:px-8 md:px-8 lg:px-0">
    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[#B8CB22] text-center">MEET THE TEAM</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 pt-7 gap-8">
      <div class="bg-[#D9D9D9] p-5 border rounded-3xl flex flex-col items-center text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Female Team Member.png" class="w-40" alt="">
        <h4 class="text-lg font-bold text-[#3D3D3D]">Team Member Name</h4>
        <p class="text-[#3D3D3D] font-normal">Team Member Designation</p>
        <div class="grid grid-cols-3 gap-5 mt-3">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-gray-500 hover:text-[#A4B61D] transition-colors duration-300 ease-in-out" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-gray-500 hover:text-[#A4B61D] transition-colors duration-300 ease-in-out" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
            </svg>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-gray-500 hover:text-[#A4B61D] transition-colors duration-300 ease-in-out" viewBox="0 0 16 16">
              <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
            </svg>
          </div>
        </div>
      </div>
      
  
      <div class="bg-[#D9D9D9] p-5 border rounded-3xl flex flex-col items-center text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Female Team Member.png" class="w-40" alt="">
        <h4 class="text-lg font-bold text-[#3D3D3D]">Team Member Name</h4>
        <p class="text-[#3D3D3D] font-normal">Team Member Designation</p>
        <div class="grid grid-cols-3 gap-5 mt-3">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-gray-500 hover:text-[#A4B61D] transition-colors duration-300 ease-in-out" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-gray-500 hover:text-[#A4B61D] transition-colors duration-300 ease-in-out" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
            </svg>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-gray-500 hover:text-[#A4B61D] transition-colors duration-300 ease-in-out" viewBox="0 0 16 16">
              <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
            </svg>
          </div>
        </div>
      </div>
  
      <div class="bg-[#D9D9D9] p-5 border rounded-3xl flex flex-col items-center text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Female Team Member.png" class="w-40" alt="">
        <h4 class="text-lg font-bold text-[#3D3D3D]">Team Member Name</h4>
        <p class="text-[#3D3D3D] font-normal">Team Member Designation</p>
        <div class="grid grid-cols-3 gap-5 mt-3">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-gray-500 hover:text-[#A4B61D] transition-colors duration-300 ease-in-out" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-gray-500 hover:text-[#A4B61D] transition-colors duration-300 ease-in-out" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
            </svg>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-gray-500 hover:text-[#A4B61D] transition-colors duration-300 ease-in-out" viewBox="0 0 16 16">
              <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="max-w-7xl mx-auto py-28 font-inter">
  <h1 class="text-black text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold text-center">Join our team at</h1>
  <h1 class="text-[#B8CB22] text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold text-center ">Iconiq One Realty</h1>

    <p class="text-black text-2xl sm:text-3xl md:text-4xl px-8 sm:px-8 md:px-8 lg:px-0 font-bold mt-16 text-center">
      We are always on the look out for experienced and energetic individuals who would like to work with a 
      professional Realty company. If you would like to explore available career opportunities please do get 
      in touch.             
    </p>
</div>



<div class="bg-[#3D3D3D]" id="contactus">
  <div class="max-w-7xl mx-auto py-28 font-inter px-8 sm:px-8 md:px-8 lg:px-0">
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

<?php get_footer(); ?>
