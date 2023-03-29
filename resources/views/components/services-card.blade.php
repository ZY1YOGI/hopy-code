@props(['title', 'id', 'img'])


<div class="transition-all duration-300 cursor-pointer hover:-translate-y-8 dark:text-white hover:text-teal-600 hover:drop-shadow-xl dark:hover:text-teal-300" id={{ $id }}>
  <div class="h-full p-5 border border-teal-600 shadow-md bg-gray-50 dark:bg-gray-800 shadow-teal-700 rounded-xl" data-aos="fade-up" data-aos-delay="350">
    <img src={{ Vite::asset("$img") }} class="dark:invert-[95%] h-[45%] lg:h-[60%] xl:h-[70%] mx-auto" alt="">
    <h1 class="text-xl text-shadow">{{ $title }}</h1>
    <p class="text-gray-700 dark:text-gray-300">{{ $slot }}</p>
  </div>
</div>
