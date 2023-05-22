@props(['title', 'url'])

<div class="px-1 pb-3 space-y-3 rounded-lg shadow-lg max-md:min-w-[40%] max-sm:min-w-[60%]">
    <img class="rounded-xl" src="https://img.youtube.com/vi/{{ $url }}/maxresdefault.jpg" alt="">
    <div class="flex items-center px-1 space-x-3 max-md:flex-col max-md:space-x-0 max-md:space-y-3">
        <h3 class="dark:text-gray-50 max-md:text-xs max-md:h-[50px] max-sm:h-[80px]">{{ $title }}</h3>
        <a class="px-2 py-1 text-xs rounded outline outline-red-600 whitespace-nowrap dark:text-white text-center" href="#">Video & Code</a>
    </div>
</div>
