@props(['name', 'description'])

<div class="transition-all duration-300 hover:-translate-y-6 hover:text-indigo-600 cursor-pointer">
  <div class="h-full p-5 border border-indigo-600 shadow-md bg-gray-50 dark:bg-gray-800 dark:bindigo800 shadow-indigo-700 rounded-xl" data-aos="fade-up" data-aos-delay="250">
    <h1 class="text-xl dark:text-white">{{ $name }}</h1>
    <p class="text-gray-700 dark:text-gray-300">{{ $slot }}</p>
  </div>
</div>
