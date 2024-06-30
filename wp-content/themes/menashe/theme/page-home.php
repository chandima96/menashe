<?php
    /*
        Template Name: Home
    */
    get_header();
?>

<style>
        .carousel-container {
            position: relative;
            overflow: hidden;
        }

        .carousel-images {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-image {
            min-width: 100%;
            box-sizing: border-box;
        }
    </style>

<div>
    <div class="grid grid-cols-1 md:grid-cols-3 m-3 md:m-6">
        <div class="col-span-1 order-2 md:order-1 pr-0 md:pr-7">
            <div class="flex flex-col  justify-center">
                <div class="flex justify-center w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="h-auto w-28 flex justify-center" alt="">
                </div>
                <h1 class="text-center font-bold text-5xl"><?php echo get_field('home_title'); ?></h1>

                <div class="text-center mx-3 mt-6">
                    <div class="bg-gradient-to-r from-[#c8a950] from-47% via-[#c6bda4] via-6% to-[#c8a950] to-53% h-20 w-full flex items-center justify-center">
                        <p class="text-white font-extrabold text-5xl leading-[48px]"><?php echo get_field('gold_box_text'); ?></p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/1585.png" alt="">
                    </div>
                    <div class="bg-black text-white h-8 w-full font-bold text-2xl">
                        <?php get_field('black_box_text'); ?>
                    </div>
                </div>
                <div class="text-[#c8a950] h-8 w-full text-center flex justify-center mt-6">
                    <p class="font-bold text-3xl"><?php echo get_field('gold_text_one'); ?></p>
                    <p class="font-bold text-6xl"><?php echo get_field('gold_text_two'); ?> </p>
                    <p class="text-3xl font-semibold"><?php echo get_field('gold_text_three'); ?></p>
                </div>
                <div class="text-[#276658] h-8 w-full font-bold text-2xl text-center mt-6">
                <?php echo get_field('green_text'); ?>
                </div>
                <div class="text-black h-8 w-full text-center my-6">
                <span><?php echo get_field('paragraph'); ?></span>
                </div>

            </div>
        </div>


        <div class="order-1 md:order-2 col-span-2 relative">
            <div class="md:absolute md:inset-0 w-full h-full">
            <div class="carousel-container w-full mx-auto absolute inset-0 bg-white bg-opacity-80 pointer-events-none" id="carousel">
                <div class="carousel-images">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Untitled-2.jpg" alt="Image 1" class="carousel-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Untitled-2.jpg" alt="Image 2" class="carousel-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Untitled-2.jpg" alt="Image 3" class="carousel-image">
                </div>
                <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md" id="prevBtn">‹</button>
                <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md" id="nextBtn">›</button>
            </div>
            </div>

        </div>


    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 bg-[#276658]">
            <div class="col-span-1 p-3 md:p-6">
                <div class="w-full  p-3 grid gap-2">
                    <h2 class="w-full text-center text-white"><?php echo get_field('contact_title'); ?></h2>
                    <!-- <?php echo do_shortcode('[contact-form-7 id="fa77f20" title="Contact form"]'); ?> -->
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <input type="phone" class="w-full h-10 placeholder-black p-3" dir="rtl" placeholder="טלפון">
                        </div>
                        <div>
                            <input type="name" class="w-full h-10 placeholder-black p-3" dir="rtl" placeholder="שם מלא">
                        </div>
                    </div>
                    <div>
                        <input type="email" class="w-full h-10 placeholder-black p-3" dir="rtl" placeholder="אימייל">
                    </div>
                    <div>
                        <button id="submit" type="submit" class="w-full bg-[#c8a950] h-10 text-black">שליחה</button>
                    </div>
                    <div dir="rtl">
                        <input type="checkbox">
                        <label for="vehicle1"  class="text-white">אני מעוניין/ת לקבל מידע שיווקי והצעות (ללא התחייבות) במייל/וואט</label>
                    </div>
                    <div class="text-center">
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
    let currentIndex = 0;
const images = document.querySelectorAll('.carousel-image');
const totalImages = images.length;

document.getElementById('prevBtn').addEventListener('click', showPrevImage);
document.getElementById('nextBtn').addEventListener('click', showNextImage);

function showPrevImage() {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalImages - 1;
    updateCarousel();
}

function showNextImage() {
    currentIndex = (currentIndex < totalImages - 1) ? currentIndex + 1 : 0;
    updateCarousel();
}

function updateCarousel() {
    const offset = -currentIndex * 100;
    document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
}

</script>
<?php get_footer(); ?>