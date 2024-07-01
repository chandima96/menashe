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
            padding: 10px;
            cursor: pointer;
        }
        .carousel-button.prev {
            left: 10px;
        }
        .carousel-button.next {
            right: 10px;
        }
        .bg-submit {
            background-image: radial-gradient(circle, #fce098, #c8a950, #c8a950);
        }
        input::placeholder {
            text-align: right;
        }
    </style>

<div>
    <div class="grid grid-cols-1 lg:grid-cols-3 m-3 lg:mt-6 lg:ml-6 lg:mr-6">
        <div class="col-span-1 order-2 lg:order-1 pr-0 lg:pr-7">
            <div class="flex flex-col  justify-center">
                <div class="flex justify-center w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="h-auto w-28 flex justify-center" alt="">
                </div>
                <h1 class="text-center font-bold text-5xl font-heebo"><?php echo get_field('home_title'); ?></h1>

                <div class="text-center mx-3 mt-6">
                    <div class="bg-submit h-20 w-full flex items-center justify-center">
                        <p class="text-white font-extrabold text-5xl leading-[48px] font-heebo"><?php echo get_field('gold_box_text'); ?></p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/1585.png" alt="">
                    </div>
                    <div class="bg-black text-white h-8 w-full font-bold text-2xl">
                        <?php echo get_field('black_box_text'); ?>
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


        <div class="order-1 lg:order-2 col-span-2 relative">
            <div class="lg:absolute lg:inset-0 w-full h-full">
                <div class="carousel-container" id="carousel">
                    <div class="carousel-images" id="carouselImages">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Untitled-2.jpg" alt="Image 1" class="carousel-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Untitled-2.jpg" alt="Image 2" class="carousel-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Untitled-2.jpg" alt="Image 3" class="carousel-image">
                    </div>
                    <button class="carousel-button prev" id="prevBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-chevron-left text-white" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                        </svg>
                    </button>
                    <button class="carousel-button next" id="nextBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-chevron-right text-white" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                    <div class="absolute hidden lg:block bottom-0 right-0 bg-white shadow-lg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-2.png" class="p-2 w-full h-24" alt="">
                    </div>
                    <div class="absolute block lg:hidden left-0 top-0 bg-white shadow-lg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-2.png" class="p-2 w-full h-24" alt="">
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 bg-[#276658]">
            <div class="col-span-1 p-3 lg:pb-6 lg:pr-6 lg:pl-6 lg:pt-3">
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

<div class="lg:hidden block w-full">
    <div class="grid grid-cols-2 gap-3 m-3">
        <div>
            <button class="flex justify-center items-center border-2 border-black bg-[#2ed02e] w-full text-white p-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0"/>
                </svg>
                <div class="text-4xl font-karantina pl-3">לשיחה עם נציג</div>
            </button>
        </div>
        <div>
            <button class="flex justify-center items-center border-2 border-black bg-submit w-full text-black p-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                    <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                </svg>
                <div class="text-4xl font-karantina pl-3">לפרטים נוספים</div>
            </button>
        </div>
    </div>



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