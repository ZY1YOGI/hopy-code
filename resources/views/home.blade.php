<x-app-layout title="Home">


    <x-section name="main" class="flex items-center justify-center h-screen home">
        <div class="w-[90%] h-full flex justify-between items-center">
            <div class="div-text text-[#121416] dark:text-[#e6e6e6] text-[40px] mb-5">
                <h4 data-aos="fade-right">Welcome to</h4>
                <h1 class="text-[#ed1d24] font-black text-6xl mb-[8px]" data-aos="fade-left">Simple Web Code</h1>
                <p class="text-[#898686] mb-[38px] text-lg capitalize">
                    Learn how to use HTML, CSS, and JavaScript to create amazing <br />
                    and attractive web projects with our educational videos.
                </p>
                <a href="#"
                    class="btn px-8 py-4 bg-[#ed1d24] text-white font-bold rounded-[30px] text-lg">Subsceribe Now
                    <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="div-img relative mt-[50px]">
                <img class="w-[550px]" src={{ Vite::asset('resources/image/screen.png') }} alt="" />
                <div class="absolute top-[18px] left-[22px] w-[510px] h-[299px] overflow-hidden">
                    <div class="testimonial mySwiper">
                        <div class="testi-content swiper-wrapper">
                            <div class="slide swiper-slide">
                                <img class="w-full h-[299px]" src={{ Vite::asset('resources/image/asdasdasd454.png') }}
                                    alt="" />
                            </div>

                            <div class="slide swiper-slide">
                                <img class="w-full h-[299px]" src={{ Vite::asset('resources/image/project13.png') }}
                                    alt="" />
                            </div>

                            <div class="slide swiper-slide">
                                <img class="w-full h-[299px]" src={{ Vite::asset('resources/image/project4.png') }}
                                    alt="" />
                            </div>

                            <div class="slide swiper-slide">
                                <img class="w-full h-[299px]" src={{ Vite::asset('resources/image/Portfolo.jpg') }}
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    <x-section name="services" class="wrapperr">
        <div class="top-sec">
            <h1>Learn with us</h1>
        </div>

        <div class="container">
            <div class="card">
                <img src={{ Vite::asset('resources/image/card-img2.png') }} alt="">
                <h2>Website Design</h2>
                <p>I offer Custom coded, Pixel-Perfect, Creative and Professional Websites to drive success for your
                    business.</p>
                <br>
                <div class="explore-btn">
                    <a href="#">Explore <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="card">
                <img src={{ Vite::asset('resources/image/card-img2.png') }} alt="">
                <h2>Website Development</h2>
                <p>Simple PDFs into editable forms that can be easily filled and submitted digitally for improved
                    efficiency.</p>
                <br>
                <div class="explore-btn">
                    <a href="#">Explore <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="card">
                <img src={{ Vite::asset('resources/image/card-img3.png') }} alt="">
                <h2>WordPress Website</h2>
                <p>Providing custom, user-friendly and visually appealing websites for businesses and individuals.</p>
                <br>
                <div class="explore-btn">
                    <a href="#">Explore <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

    </x-section>


    <x-section name="videos" class="videos-home">
        <div class="top-sec">
            <h1>Latest Projects</h1>
        </div>

        <div class="cards-videos">
            <div class="card">
                <img src="img/project25.png" alt="">
                <div class="text">
                    <h3>Landing Page Car</h3>
                    <div class="btns">
                        <a href="#" class="btn">Watch Now</a>
                        <a href="#" class="btn">Source Code</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="img/project5.png" alt="">
                <div class="text">
                    <h3>Portfolio Website</h3>
                    <div class="btns">
                        <a href="#" class="btn">Watch Now</a>
                        <a href="#" class="btn">Source Code</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="img/project9.png" alt="">
                <div class="text">
                    <h3>Landing Page Resturant</h3>
                    <div class="btns">
                        <a href="#" class="btn">Watch Now</a>
                        <a href="#" class="btn">Source Code</a>
                    </div>
                </div>
            </div>


            <div class="card">
                <img src="img/project25.png" alt="">
                <div class="text">
                    <h3>Landing Page Car</h3>
                    <div class="btns">
                        <a href="#" class="btn">Watch Now</a>
                        <a href="#" class="btn">Source Code</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="img/project5.png" alt="">
                <div class="text">
                    <h3>Portfolio Website</h3>
                    <div class="btns">
                        <a href="#" class="btn">Watch Now</a>
                        <a href="#" class="btn">Source Code</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="img/project9.png" alt="">
                <div class="text">
                    <h3>Landing Page Resturant</h3>
                    <div class="btns">
                        <a href="#" class="btn">Watch Now</a>
                        <a href="#" class="btn">Source Code</a>
                    </div>
                </div>
            </div>

        </div>

        <a href="#" class="btn">More Videos</a>
    </x-section>


    <x-section name="videos" class="py-10">
        <div class="text-center">
            <h1 class="text-5xl font-bold py-2 dark:text-white decoration-slice underline rounded-lg underline-offset-[5px] decoration-indigo-700 tracking-widest cursor-pointer"
                data-aos="fade-up" data-aos-delay="200">
                videos
            </h1>
            <p class="text-gray-700 capitalize dark:text-gray-300" data-aos="fade-down">
                Here are all the courses that we offer, from scratch to professionalism. We offer courses in several
                magazines, and more are constantly being added
            </p>
        </div>
        <div class="container grid grid-cols-3 gap-10 px-3 mx-auto my-12 max-sm:grid-cols-1 max-lg:grid-cols-2">

            <x-video-card title="How To Make a Website Header Using HTML And CSS Step by Step" url="X5KqWpp6S38" />

            <x-video-card
                title="Personal Portfolio Website Using html and css only | How to create Personal Portfolio Website"
                url="3YM3qaG4AMM" />

            <x-video-card title="How To Make a Website Header Using HTML And CSS Step by Step" url="2ObrkfQ7wLA" />

            <x-video-card
                title="Personal Portfolio Website Using html and css only | How to create Personal Portfolio Website"
                url="N5S_wtu1Emc" />

            <x-video-card title="How To Make a Website Header Using HTML And CSS Step by Step" url="upSTOhfEATo" />

            <x-video-card title="How To Make a Website Header Using HTML And CSS Step by Step" url="06R-eDOpj_w" />

            <x-video-card title="Swiper Slider 3D-Coverflow Effect Using HTML CSS & Swiper.JS" url="MwQ_ikf8Bdc" />

            <x-video-card title="How To Make a Landing Page | Ramadan Kareem Landing Page" url="uuung5rDwuw" />

        </div>

    </x-section>


</x-app-layout>
