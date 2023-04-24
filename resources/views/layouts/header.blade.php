<header class="z-40 py-3 shadow shadow-stone-600/50 max-md:relative max-md:py-1">

<nav class="flex justify-between items-center px-[3%] py-1">
    <div class="flex items-center justify-center space-x-3 cursor-pointer max-md:space-x-1">
        <img src={{ Vite::asset('resources/image/logo.png') }} alt="" class="w-12 h-auto rounded-full" />
        <h1 class="font-bold dark:text-teal-50">Simple Web Code</h1>
    </div>
    <ul id="negative" class="negative" role="navigation">
        <x-ui.nav-link to="{{ route('home') }}" active="true">Home</x-ui.nav-link>
        <x-ui.nav-link to="{{ route('home') }}">Videos</x-ui.nav-link>
        <x-ui.nav-link to="{{ route('home') }}">Posts</x-ui.nav-link>
        <x-ui.nav-link to="{{ route('home') }}">About Us</x-ui.nav-link>
        <x-ui.nav-link to="{{ route('home') }}">Contact Us</x-ui.nav-link>
    </ul>

    <div class="flex items-center justify-center space-x-3">
        <x-ui.btn-theme />
        <x-ui.btn-search />
      <a href="login" class="btn-auth">
        <svg class="dark:text-white" width="30" height="30" viewBox="0 0 15 15" aria-label="Account header icon" fill="currentColor">
          <path d="M7.5,0C3.4,0,0,3.4,0,7.5c0,1.7,0.5,3.2,1.5,4.5c1.4,1.9,3.6,3,6,3s4.6-1.1,6-3c1-1.3,1.5-2.9,1.5-4.5C15,3.4,11.6,0,7.5,0zM7.5,13.5c-1.4,0-2.8-0.5-3.8-1.4c1.1-0.9,2.4-1.4,3.8-1.4s2.8,0.5,3.8,1.4C10.3,13,8.9,13.5,7.5,13.5z M12.3,11c-1.3-1.1-3-1.8-4.8-1.8S4,9.9,2.7,11c-0.8-1-1.2-2.2-1.2-3.5c0-3.3,2.7-6,6-6s6,2.7,6,6C13.5,8.8,13.1,10,12.3,11zM7.5,3C6.1,3,5,4.1,5,5.5S6.1,8,7.5,8S10,6.9,10,5.5S8.9,3,7.5,3zM7.5,6.5c-0.5,0-1-0.5-1-1s0.5-1,1-1s1,0.5,1,1S8,6.5,7.5,6.5z"></path>
        </svg>
      </a>
      <button class="hidden max-md:block" onclick="document.querySelector('#negative').classList.toggle('!flex');" role="switch">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="dark:text-white" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
        </svg>
      </button>
    </div>
  </nav>
</header>
