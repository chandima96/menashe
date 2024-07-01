<?php
    /*
        Template Name: Home
    */
    get_header();
?>

<style>
        .carousel-container {
            position: relative;
            width: 100%;
            overflow: hidden;
        }
        .carousel-images {
            display: flex;
            transition: transform 0.5s ease;
        }
        .carousel-image {
            width: 100%;
            flex-shrink: 0;
        }
        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            padding: 10px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
        }
        .carousel-button.prev {
            left: 10px;
        }
        .carousel-button.next {
            right: 10px;
        }
        .bg-submit {
            background: linear-gradient(
                to right,
                #c8a950 47%,
                #ccbe99 47%,
                #ccbe99 53%,
                #c8a950 53%
            );
            }
    </style>

<div>
    <div class="grid grid-cols-1 md:grid-cols-3 m-3 md:mt-6 md:ml-6 md:mr-6">
        <div class="col-span-1 order-2 md:order-1 pr-0 md:pr-7">
            <div class="flex flex-col  justify-center">
                <div class="flex justify-center w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="h-auto w-28 flex justify-center" alt="">
                </div>
                <h1 class="text-center font-bold text-5xl font-heebo"><?php echo get_field('home_title'); ?></h1>

                <div class="text-center mx-3 mt-6">
                    <div class="bg-gradient-to-r from-gold from-47% via-gold-m via-6% to-gold to-53% h-20 w-full flex items-center justify-center">
                        <p class="text-white font-extrabold text-5xl leading-[48px] font-heebo"><?php echo get_field('gold_box_text'); ?></p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/1585.png" alt="">
                    </div>
                    <div class="bg-black text-white h-8 w-full font-bold text-2xl">
                        <?php get_field('black_box_text'); ?>
                    </div>
                </div>
                <div class="text-[#c8a950] w-full text-center flex justify-center mt-6">
                    <p class="font-bold text-3xl mt-auto font-heebo"><?php echo get_field('gold_text_one'); ?></p>
                    <p class="font-bold text-6xl font-heebo"><?php echo get_field('gold_text_two'); ?> </p>
                    <p class="text-3xl font-semibold my-auto font-heebo"><?php echo get_field('gold_text_three'); ?></p>
                </div>
                <div class="text-[#276658] w-full font-bold text-2xl text-center mt-6 font-heebo">
                <?php echo get_field('green_text'); ?>
                </div>
                <div class="text-black w-full text-center my-6 font-heebo">
                <span><?php echo get_field('paragraph'); ?></span>
                </div>

            </div>
        </div>


        <div class="order-1 md:order-2 col-span-2 relative">
            <div class="md:absolute md:inset-0 w-full h-full">
                <div class="carousel-container" id="carousel">
                    <div class="carousel-images" id="carouselImages">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Untitled-2.jpg" alt="Image 1" class="carousel-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Untitled-2.jpg" alt="Image 2" class="carousel-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Untitled-2.jpg" alt="Image 3" class="carousel-image">
                    </div>
                    <button class="carousel-button prev" id="prevBtn">‹</button>
                    <button class="carousel-button next" id="nextBtn">›</button>
                </div>
            </div>

        </div>


    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 bg-[#276658]">
            <div class="col-span-1 p-3 md:p-6">
                <div class="w-full  p-3 grid gap-2 font-heebo">
                    <h2 class="w-full text-center text-white"><?php echo get_field('contact_title'); ?></h2>
                    <?php echo do_shortcode('[contact-form-7 id="fa77f20" title="Contact form"]'); ?>
                        <!-- <div class="grid grid-cols-2 gap-2">
                            <div>
                                <input type="phone" class="w-full h-10 placeholder-black p-3" dir="rtl" placeholder="טלפון">
                            </div>
                            <div>
                                <input type="name" class="w-full h-10 placeholder-black p-3" dir="rtl" placeholder="שם מלא">
                            </div>
                        </div>
                        <div>
                            <input type="email" class="w-full h-10 placeholder-black p-3 mt-2" dir="rtl" placeholder="אימייל">
                        </div>
                        <div>
                            <button id="submit" type="submit" class="w-full bg-submit h-10 text-black  mt-2">שליחה</button>
                        </div>
                        <div dir="rtl">
                            <input type="checkbox">
                            <label for="vehicle1"  class="text-white">אני מעוניין/ת לקבל מידע שיווקי והצעות (ללא התחייבות) במייל/וואט</label>
                        </div> -->
                    <div class="text-center font-heebo">
                        <p class="text-white"><?php echo get_field('bottom_paragaph'); ?></p>
                        <p class="text-white"><?php echo get_field('bottom_paragaph_two'); ?></p>
                    </div>
                </div>
        </div>
        <div class="col-span-2 relative" id="target">

        </div>
    </div>
</div>

<div class="md:hidden block w-full">
    
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('carousel');
        const imagesContainer = document.getElementById('carouselImages');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const images = document.querySelectorAll('.carousel-image');

        let currentIndex = 0;

        function updateCarousel() {
            const width = carousel.offsetWidth;
            imagesContainer.style.transform = `translateX(-${currentIndex * width}px)`;
        }

        function showNextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            updateCarousel();
        }

        function showPrevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateCarousel();
        }

        nextBtn.addEventListener('click', showNextImage);
        prevBtn.addEventListener('click', showPrevImage);

        window.addEventListener('resize', updateCarousel);

        updateCarousel();
    });
</script>
<?php get_footer(); ?>