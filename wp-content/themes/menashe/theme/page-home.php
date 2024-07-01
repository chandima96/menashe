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
    height: calc(100vh* 0.8);
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
    font-weight: 600;
}
.submit-button {
display: flex;
align-items: center;
justify-content: center;
height: 2.5rem; /* 10 in 4 units (default unit size) */
width: 8rem; /* 32 in 4 units (default unit size) */
width: 130px; /* 100% width for large screens */
border-radius: 9999px; /* full rounded corners */
background-color: var(--color-submit);
color: #000000; /* black */
margin-top: 0.5rem; /* 2 in 4 units (default unit size) */
font-size: 1.5rem; /* 2xl */
font-weight: 700; /* bold */
gap: 0.25rem; /* Space between icon and text */
position: relative;
padding-left: 2rem; /* Adjust to provide space for the icon */
}

.submit-button::before {
content: '';
display: inline-block;
width: 24px;
height: 24px;
background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/><path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/></svg>');
background-size: contain;
background-repeat: no-repeat;
position: absolute;
left: 0.5rem; /* Adjust icon position */
}

/* Large screen styles */
@media (min-width: 1024px) {
.submit-button {
width: 100%;
border-radius: 0;
}
.submit-button::before {
display: none;
}

}
#contact{
margin-top: 4px !important;
}
#checkbox-524{
color:white;
}

#checkbox-524 input[type="checkbox"]{
    width: 28px;
    height: 28px;
    accent-color: #276658; /* For modern browsers */
    border-color: white;
    border-style: solid;
    background-color: #276658;
}
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 28px;
  width: 28px;
  border-color: white;
  border-style: solid;
  background-color: #276658;;
}
#email{
margin-top: 8px;
}


.wpcf7-spinner{
display:none;
}

#checkbox-524 label{
    direction: rtl;
    display: flex;
    gap:6px;
}

</style>

<div class="mb-[72px] lg:mb-0">
    <div class="grid grid-cols-1 lg:grid-cols-10 m-3 lg:mt-4 lg:ml-4 lg:mr-4">
        <div class="col-span-3 order-2 lg:order-1 pr-0 lg:pr-7">
            <div class="flex flex-col justify-center">
                <div class="grid gap-3">
                    <div class="flex justify-center w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="h-auto w-24 flex justify-center" alt="">
                    </div>
                    <h1 class="text-center font-bold text-black text-4xl md:text-4xl Heebo"><?php echo get_field('home_title'); ?></h1>

                    <div class="text-center mx-3">
                        <div class="bg-submit h-16 w-full flex items-center justify-center">
                            <p class="text-white font-extrabold text-3xl md:text-4xl leading-[48px] Heebo"><?php echo get_field('gold_box_text'); ?></p>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/1585.png" class="h-auto w-20" alt="">
                        </div>
                        <div class="bg-black text-white lg:h-8 h-6 w-full font-bold Heebo md:text-2xl">
                            <?php echo get_field('black_box_text'); ?>
                        </div>
                    </div>
                    <div class="text-[#c8a950] w-full text-center flex lg:flex-row flex-col justify-center">
                        <div class="flex order-2 lg:order-1">
                            <p class="font-medium text-2xl md:text-3xl mt-auto Heebo"><?php echo get_field('gold_text_one'); ?></p>
                            <p class="font-bold text-4xl md:text-5xl Heebo"><?php echo get_field('gold_text_two'); ?> </p>
                        </div>
                        <p class="text-3xl font-medium my-auto Heebo order-1 lg:order-2"><?php echo get_field('gold_text_three'); ?></p>
                    </div>
                    <div class="text-[#276658] w-full font-bold text-2xl text-center Heebo">
                    <?php echo get_field('green_text'); ?>
                    </div>
                </div>

                <div class="text-black w-full text-center text-lg Heebo mt-3">
                <span><?php echo get_field('paragraph'); ?></span>
                </div>

            </div>
        </div>


        <div class="order-1 lg:order-2 col-span-7 relative">
            <div class="lg:absolute lg:inset-0 w-full h-full">
                <div class="carousel-container" id="carousel">
                    <div class="carousel-images" id="carouselImages">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Untitled-2.jpg" alt="Image 1" class="carousel-image 80vh object-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Untitled-2.jpg" alt="Image 2" class="carousel-image 80vh object-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Untitled-2.jpg" alt="Image 3" class="carousel-image 80vh object-cover">
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
                    <div class="absolute left-0 bottom-0 bg-white shadow-lg">
                        <p>* הדמיות להמחשה בלבד</p>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div class="grid grid-cols-1 lg:grid-cols-10 bg-[#276658]">
            <div class="col-span-3 pb-3 pr-3 pl-3 lg:pb-4 lg:pr-4 lg:pl-4 lg:pt-3">
                <div class="w-full grid gap-2 Heebo">
                    <h2 class="w-full text-center text-white  font-bold text-2xl Heebo mt-2 lg:mt-0"><?php echo get_field('contact_title'); ?></h2>
                    <?php echo do_shortcode('[contact-form-7 id="fa77f20" title="Contact form"]'); ?>
                        <!-- <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
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
                        <div class="flex gap-3 lg:block">
                            <div class="mb-2">
                                <button id="submit" type="submit" class="submit-button bg-submit lg:w-full w-32 rounded-full lg:rounded-none">שליחה</button>
                            </div>
                            <div class="">
                                <div class="flex justify-end gap-2">
                                    <div><label dir="rtl" class="text-white text-right">אני מעוניין/ת לקבל מידע שיווקי והצעות (ללא התחייבות) במייל/וואט</label></div>
                                    <div><input class="appearance-none h-7 w-7 bg-[#276658] border-2 border-white checked:bg-white" type="checkbox"></div>
                                </div>
                            </div>
                        </div> -->
                    <div class="text-center Heebo">
                        <p class="text-white mb-2"><?php echo get_field('bottom_paragaph'); ?></p>
                        <p class="text-white"><?php echo get_field('bottom_paragaph_two'); ?></p>
                    </div>
                </div>
        </div>
        <div class="col-span-7 relative" id="target">

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