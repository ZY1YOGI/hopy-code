<header class="z-40 shadow-md shadow-stone-600 max-md:relative">

  <nav class="flex justify-between items-center px-[3%] py-1">
    <div class="flex items-center justify-center space-x-3 cursor-pointer">
      <img src={{ Vite::asset('resources/image/logo.png') }} alt="" class="h-auto rounded-full w-7" />
      <h1 class="text-xl dark:text-teal-50">Code</h1>
    </div>
    <ul id="negative" class="negative" role="navigation">
      <x-ui.nav-link to="{{ route('home') }}">Home</x-ui.nav-link>
      <x-ui.nav-link to="{{ route('home') }}">Vedioes</x-ui.nav-link>
      <x-ui.nav-link to="{{ route('home') }}">Posts</x-ui.nav-link>
      <x-ui.nav-link to="{{ route('home') }}">About Us</x-ui.nav-link>
      <x-ui.nav-link to="{{ route('home') }}">Contact Us</x-ui.nav-link>
      <x-ui.btn-search />
      <x-ui.btn-theme />
    </ul>

    <button class="hidden max-md:block" onclick="document.querySelector('#negative').classList.toggle('!flex');" role="switch">
      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="dark:text-white" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
      </svg>
    </button>

    <div class="flex items-center justify-center">
      <a type="button" href="#" class="btn-auth">Auth</a>
    </div>
  </nav>

</header>
