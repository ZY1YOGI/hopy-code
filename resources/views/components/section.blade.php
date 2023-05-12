@props(['name'])

<section {{ $attributes->merge(['id' => $name]) }}>
    {{ $slot }}
</section>
