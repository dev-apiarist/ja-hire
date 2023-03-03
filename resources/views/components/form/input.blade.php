@props(['name' => null, 'type' => 'text', 'placeholder' => null])


<div class="mt-1 sm:mt-0 ">
    <input 
    {{ $attributes->merge(['class' => 'max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300']) }}
    name="{{ $name }}" 
    type="{{ $type }}" 
    placeholder="{{ $placeholder }}"
        >
</div>
