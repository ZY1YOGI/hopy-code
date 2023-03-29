@props(['name', 'title' => null, 'description' => null])

<section {{ $attributes->merge(['id' => $name]) }}>
  @if ($title && $description)
  <div class="container mx-auto my-10">
    <div class="text-center">
      <h1 class="text-3xl font-bold py-2 dark:text-white decoration-slice underline underline-offset-[5px] decoration-teal-700 tracking-widest cursor-pointer" data-aos="fade-up" data-aos-delay="200">
        {{ $title }}
      </h1>
      <p class="text-gray-700 capitalize dark:text-gray-300" data-aos="fade-down">
        {{ $description }}
      </p>
    </div>
  </div>
  @endif

  {{ $slot }}
</section>
