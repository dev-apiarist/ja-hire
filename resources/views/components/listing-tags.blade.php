@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class=" flex gap-x-3">
    @foreach ($tags as $tag)
        <a href="/?tag={{ $tag }}" {{ $attributes->merge(['class' => '']) }}>
            <li>{{ $tag }}</li>
        </a>
    @endforeach
</ul>
