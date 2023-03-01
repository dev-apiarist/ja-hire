@props(['tagsCsv'])

@foreach (explode(',', $tagsCsv) as $tag)
    <span
        {{ $attributes->merge(['class' => 'inline-block border  px-3 py-1 uppercase text-xs  mr-2 hover:bg-black hover:text-white transition-all ease-linear ']) }}>{{ $tag }}</span>
@endforeach
