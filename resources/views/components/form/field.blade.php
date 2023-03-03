@props(['name', 'type' => 'text', 'placeholder' => null])

<div
    {{ $attributes->merge(['class' => 'max-w-screen-lg mx-auto sm:grid sm:grid-cols-2 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5']) }}>

    <x-form.label name="{{ $name }}" />
    <x-form.input name="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}" />
    <x-form.error name="{{ $name }}" />

</div>
