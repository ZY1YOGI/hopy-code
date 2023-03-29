<x-app-layout title="Home">

  <x-section name="home" class="relative flex border-b-4 max-md:flex-col border_gradient">
    <span class="absolute left-0 bottom-0 z-[-1]">
      <svg width="217" height="229" viewBox="0 0 217 229" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z" fill="url(#paint0_linear_1179_5)" />
        <defs>
          <linearGradient id="paint0_linear_1179_5" x1="76.5" y1="281" x2="76.5" y2="1.22829e-05" gradientUnits="userSpaceOnUse">
            <stop stop-color="#3056D3" stop-opacity="0.08" />
            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
          </linearGradient>
        </defs>
      </svg>
    </span>

    <div class="flex flex-col items-center justify-center w-full min-h-full max-md:order-2">
      <h3 class="m-5 font-mono text-3xl font-bold dark:text-white">Al-Jazira</h3>
      <p class="px-5 text-center dark:text-teal-100 max-md:px-1">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
        expedita quia, architecto quaerat sapiente fugit
        Doloremque.
      </p>
      <div class="flex justify-center my-5 mt-3 space-x-5">
        <button type="button" class="px-5 py-2 text-teal-500 bg-gray-700 dark:hover:bg-transparent hover:bg-teal-900 dark:bg-white dark:text-teal-700 outline outline-2 outline-offset-4 rounded-3xl">Get Started</button>
        <button type="button" class="px-5 py-1 text-teal-500 dark:text-white hover:bg-teal-50 dark:hover:bg-teal-100 dark:hover:text-gray-900 transition-al outline outline-2 outline-offset-1 rounded-3xl">Watch Video</button>
      </div>
    </div>

    <div class="flex flex-col items-center justify-center w-full h-full">
      <h3 class="m-5 font-mono text-2xl font-bold dark:text-white">Al-Jazira</h3>

      <img src={{ Vite::asset('resources/image/logo.png') }} class="hero-img" />
      <p class="m-5 font-mono dark:text-teal-50">Sport IS AlWAYS FOR EVERYONE</p>
    </div>

  </x-section>




</x-app-layout>
