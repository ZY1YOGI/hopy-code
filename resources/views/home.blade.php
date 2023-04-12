<x-app-layout title="Home">


  <x-section name="main" class="h-[80vh] border-b border_gradient">
    <div class="container flex flex-col items-center justify-center h-full mx-auto space-y-5 text-center">

      <h3 class="text-3xl font-medium text-indigo-600 max-md:text-xl" data-aos="fade-down">Welcome To</h3>
      <h1 class="text-5xl font-bold max-md:text-3xl dark:text-white" data-aos="zoom-in">SIMPLE WEB CODE</h1>
      <P class="px-40 text-gray-800 max-md:px-3 max-md:text-xs dark:text-gray-300" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet atque natus corrupti eaque, eum maiores mollitia dignissimos vel doloribus, consequuntur quia laudantium.</P>
      <a href="https://www.youtube.com/@simple-web-code" class="px-5 py-3 rounded-lg b-t dark:text-white">Subscribe Now</a>

    </div>
  </x-section>


  <x-section name="courses" class="py-10">

    <div class="text-center">
      <h1 class="text-5xl font-bold py-2 dark:text-white decoration-slice underline rounded-lg underline-offset-[5px] decoration-indigo-700 tracking-widest cursor-pointer" data-aos="fade-up" data-aos-delay="200">
        courses
      </h1>
      <p class="text-gray-700 capitalize dark:text-gray-300" data-aos="fade-down">
        Here are all the courses that we offer, from scratch to professionalism. We offer courses in several magazines, and more are constantly being added
      </p>
    </div>

    <div class="container mx-auto mt-10">
      <div class="grid grid-cols-4 gap-10 max-lg:gap-3 max-sm:grid-cols-2 max-lg:grid-cols-3 max-lg:px-[3%]">
        <x-courses-card name="Front-End">
          Front-End Web developer courses from beginner to advanced level
        </x-courses-card>

        <x-courses-card name="Back-End">
          Back-End Web developer courses from beginner to advanced level
        </x-courses-card>

        <x-courses-card name="Ui CSS">
          Ui CSS Web developer courses from beginner to advanced level
        </x-courses-card>

        <x-courses-card name="Ux-Ui">
          Ux-Ui Web developer courses from beginner to advanced level
        </x-courses-card>

        <x-courses-card name="Full Stack">
          Full Stack Web developer courses from beginner to advanced level
        </x-courses-card>

        <x-courses-card name="DevOps">
          DevOps Web developer courses from beginner to advanced level
        </x-courses-card>
      </div>
    </div>

  </x-section>



  <x-section name="videos" class="py-10">
    <div class="text-center">
      <h1 class="text-5xl font-bold py-2 dark:text-white decoration-slice underline rounded-lg underline-offset-[5px] decoration-indigo-700 tracking-widest cursor-pointer" data-aos="fade-up" data-aos-delay="200">
        videos
      </h1>
      <p class="text-gray-700 capitalize dark:text-gray-300" data-aos="fade-down">
        Here are all the courses that we offer, from scratch to professionalism. We offer courses in several magazines, and more are constantly being added
      </p>
    </div>
    <div class="container grid grid-cols-3 gap-10 mx-auto my-12 max-lg:gap-3 max-sm:grid-cols-1 max-lg:grid-cols-2">

      <x-video-card name="How To Make a Website Header Using HTML And CSS Step by Step" url="X5KqWpp6S38" />

      <x-video-card name="Personal Portfolio Website Using html and css only | How to create Personal Portfolio Website" url="3YM3qaG4AMM" />

      <x-video-card name="How To Make a Website Header Using HTML And CSS Step by Step" url="2ObrkfQ7wLA" />

      <x-video-card name="Personal Portfolio Website Using html and css only | How to create Personal Portfolio Website" url="N5S_wtu1Emc" />

      <x-video-card name="How To Make a Website Header Using HTML And CSS Step by Step" url="upSTOhfEATo" />

      <x-video-card name="How To Make a Website Header Using HTML And CSS Step by Step" url="06R-eDOpj_w" />

      <x-video-card name="Swiper Slider 3D-Coverflow Effect Using HTML CSS & Swiper.JS" url="MwQ_ikf8Bdc" />

      <x-video-card name="How To Make a Landing Page | Ramadan Kareem Landing Page" url="uuung5rDwuw" />

    </div>

  </x-section>


</x-app-layout>
