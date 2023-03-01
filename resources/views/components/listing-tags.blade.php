@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class=" flex gap-4 ">
    @foreach ($tags as $tag)
        <a href="/?tag={{ $tag }}"
            {{ $attributes->merge(['class' => 'border  px-3 py-1 uppercase text-sm ']) }}>
            <li class="text-black">{{ $tag }}</li>
        </a>
    @endforeach
</ul>
