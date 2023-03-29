<x-section name="clients">
  <div class="grid items-center grid-cols-6 max-sm:grid-cols-3 container mx-auto rounded-b-2xl bg-[#e5eaff] dark:bg-[#0b101d] border-b border-teal-600 overflow-hidden">
    @for($i = 1; $i < 7; $i++)
      <div class="text-center cursor-pointer" data-aos="fade-left">
        <img src={{ Vite::asset("resources/image/clients/client-$i.png") }} class="client-img" />
      </div>
    @endfor
  </div>
</x-section>
