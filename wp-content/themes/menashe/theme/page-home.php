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
    <div class="grid grid-cols-3">
        <div class="col-span-1">
            <div class="flex flex-col  justify-center gap-y-6">
                <div class="flex justify-center w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="h-auto w-28 flex justify-center" alt="">
                </div>
                <h1 class="text-center font-bold text-5xl">הטבות של פעם באלפי</h1>

                <div class="text-center mx-3">
                    <div class="bg-[#c8a950] h-20 w-full flex items-center justify-center">
                        <p class="text-white font-extrabold text-5xl leading-[48px]">פטור ממדד +</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/1585.png" alt="">
                    </div>
                    <div class="bg-black text-white h-8 w-full font-bold text-2xl">
                    ל- 5 דירות בלבד
                    </div>
                </div>
                <div class="text-[#c8a950] h-8 w-full text-center flex justify-center">
                    <p class="font-bold text-3xl">₪</p>
                    <p class="font-bold text-6xl">2.25M - </p>
                    <p class="text-3xl font-semibold">החל מ</p>
                </div>
                <div class="text-[#276658] h-8 w-full font-bold text-2xl text-center">
                דירות 4-6 חד',  גן ופנט' באלפי מנשה
                </div>
                <div class="text-black h-8 w-full text-center">
                <span>בואו להרגיש את הטבע ולקום בבוקר לנוף מרהיב ועוצר נשימה של רכס ה</span>
                </div>

            </div>
        </div>


        <div class="col-span-2 relative">
            <div class="carousel-container w-full mx-auto absolute inset-0 bg-white bg-opacity-80 pointer-events-none" id="carousel">
                <div class="carousel-images">
                    <img src="https://via.placeholder.com/600x400" alt="Image 1" class="carousel-image">
                    <img src="https://via.placeholder.com/600x400" alt="Image 2" class="carousel-image">
                    <img src="https://via.placeholder.com/600x400" alt="Image 3" class="carousel-image">
                </div>
                <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md" id="prevBtn">‹</button>
                <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md" id="nextBtn">›</button>
            </div>

        </div>


    </div>
    <div class="grid grid-cols-3 bg-[#276658]">
            <div class="col-span-1">
                        <form class="w-full  p-3 grid gap-2">
                    <h2 class="w-full text-center text-white">test</h2>
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
                        <label for="vehicle1"  class="text-white">אני מעוניין/ת לקבל מידע שיווקי והצעות (ללא התחייבות) במייל/וואט</label><br>
                    </div>
                    <div class="text-center">
                        <p class="text-white">מילוי פרטיך ולחיצה על כפתור ״שלחו״ מהווה הסכמה מנציג מכירות מטע</p>
                        <p class="text-white">* החברה רשאית להפסיק את ההטבה בכל עת. טל״ח</p>
                    </div>
                </form>
        </div>
        <div class="col-span-2 relative" id="target">

        </div>
    </div>

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