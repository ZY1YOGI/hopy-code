@props(['name', 'url'])

<div>
  <iframe class="transition-all duration-300 hover:scale-105 rounded" height="360" width="480" src="https://www.youtube.com/embed/{{ $url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <button>5</button>
</div>
