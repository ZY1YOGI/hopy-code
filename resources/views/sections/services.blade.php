<x-section name="services">
  <x-slot:title>SPORTS</x-slot:title>
  <x-slot:description>We Hold Championships In Most Sports And We Are Always In Progress ( WALKING | RUNNING | SWIMMING | FITNESS )</x-slot:description>
  <div class="container mx-auto">
    <div class="mt-8 grid grid-cols-4 gap-10 max-lg:gap-3 max-sm:grid-cols-2 max-lg:grid-cols-3 max-lg:px-[3%]">

      <x-services-card title="Walking" id="walking" img="resources/image/1.png">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae a iste labore.
      </x-services-card>

      <x-services-card title="Running" id="running" img="resources/image/2.svg">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae a iste labore.
      </x-services-card>

      <x-services-card title="Swimming" id="swimming" img="resources/image/3.svg">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae a iste labore.
      </x-services-card>

      <x-services-card title="Fitness" id="fitness" img="resources/image/4.svg">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae a iste labore.
      </x-services-card>

    </div>
  </div>
</x-section>

@props(['title', 'id', 'img'])


<div class="transition-all duration-300 cursor-pointer hover:-translate-y-8 dark:text-white hover:text-teal-600 hover:drop-shadow-xl dark:hover:text-teal-300" id={{ $id }}>
  <div class="h-full p-5 border border-teal-600 shadow-md bg-gray-50 dark:bg-gray-800 shadow-teal-700 rounded-xl" data-aos="fade-up" data-aos-delay="350">
    <img src={{ Vite::asset("$img") }} class="dark:invert-[95%] h-[45%] lg:h-[60%] xl:h-[70%] mx-auto" alt="">
    <h1 class="text-xl text-shadow">{{ $title }}</h1>
    <p class="text-gray-700 dark:text-gray-300">{{ $slot }}</p>
  </div>
</div>
