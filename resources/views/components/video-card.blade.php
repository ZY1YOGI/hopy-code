@props(['title', 'url'])

<div class="px-1 pb-3 space-y-3 rounded-lg shadow-2xl">
  <div>
    
  </div>
  <img class="rounded-lg" src="https://img.youtube.com/vi/{{ $url }}/maxresdefault.jpg" alt="">
  <div class="flex items-center space-x-3">
    <h3>{{$title}}</h3>
    <a class="w-1/5 px-2 py-1 text-xs rounded outline outline-indigo-600 whitespace-nowrap" href="#">Video & Code</a>
  </div>
</div>
