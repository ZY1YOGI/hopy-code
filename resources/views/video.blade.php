<x-app-layout title="How To Make a Landing Page | Ramadan Kareem Landing Page">

    <x-slot:js>
        {{-- ACE --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.20.0/ace.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.20.0/ext-language_tools.min.js"></script>
    </x-slot>



    <x-section name="video-details" class="container mx-auto my-5 flex max-md:flex-col">
        <div class="frame-video h-[70vh] w-[75%] max-md:w-full max-md:h-screen">
            <h1 class="text-3xl dark:text-white text-shadow-light dark:text-shadow-dark py-3 max-md:text-2xl">How To Make a Website Header Using HTML And CSS Step by Step</h1>
            <iframe class="w-full h-full rounded-md max-md:h-[50%]" src="https://www.youtube.com/embed/zXx_FHQuWt0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div>
                <p class="w-[75%] text-lg max-md:w-[95%] max-md:px-1 dark:text-gray-100">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas sit, illo, minus quam saepe consequatur
                    illum nam neque, eum voluptate dolores quidem eius rerum. Nisi, minus! Tempore at officiis quos.
                </p>
            </div>
        </div>

        <div class="w-[20%] h-screen ml-8 mt-3 max-md:h-full max-md:w-full max-md:m-0">

            <h1 class="text-xl dark:text-white text-shadow-light dark:text-shadow-dark py-5">Videos Recommend</h1>

            <div class="w-full h-full gap-5 flex flex-col max-md:flex-row max-md:w-full overflow-scroll shadow-md rounded-md">
                <x-video-card title="How To Make a Website Header Using HTML And CSS Step by Step" url="X5KqWpp6S38" />

                <x-video-card title="Personal Portfolio Website Using html and css only | How to create Personal Portfolio Website" url="3YM3qaG4AMM" />

                <x-video-card title="How To Make a Website Header Using HTML And CSS Step by Step" url="2ObrkfQ7wLA" />

                <x-video-card title="Personal Portfolio Website Using html and css only | How to create Personal Portfolio Website" url="N5S_wtu1Emc" />

                <x-video-card title="How To Make a Website Header Using HTML And CSS Step by Step" url="upSTOhfEATo" />

                <x-video-card title="How To Make a Website Header Using HTML And CSS Step by Step" url="06R-eDOpj_w" />

                <x-video-card title="Swiper Slider 3D-Coverflow Effect Using HTML CSS & Swiper.JS" url="MwQ_ikf8Bdc" />

                <x-video-card title="How To Make a Landing Page | Ramadan Kareem Landing Page" url="uuung5rDwuw" />
            </div>
        </div>
    </x-section>

    <x-section name="header-source-code" class="text-center mt-20">
        <h1 class="text-3xl font-semibold tracking-wide">source-code & Files</h1>
    </x-section>

    <x-section name="source-code" class="flex justify-center mt-8 items-center h-[80vh] max-md:h-[150vh] px-[10px] max-md:flex-col max-md:space-y-5 my-5 space-x-3 max-md:space-x-0 dark:text-white">

        <x-section name="" class="h-full w-full">
            <h1 class="font-bold text-3xl">HTML</h1>
            <div id="code-html" class="code w-full h-[95%] rounded shadow-xl"></div>
        </x-section>

        <x-section name="" class="h-full w-full">
            <h1 class="font-bold text-3xl">CSS</h1>
            <div id="code-css" class="code w-full h-[95%] rounded shadow-xl"></div>
        </x-section>

        <x-section name="" class="h-full w-full">
            <h1 class="font-bold text-3xl">JS</h1>
            <div id="code-js" class="code w-full h-[95%] rounded shadow-xl"></div>
        </x-section>

    </x-section>

    <x-section name="live">
        <iframe id="live-project" src="http://localhost/code/html.html" name="live-project" class="w-[80%] h-[85vh] rounded-lg shadow-md mx-auto border-none" title="How To Make a Landing Page | Ramadan Kareem Landing Page"></iframe>
    </x-section>
</x-app-layout>
