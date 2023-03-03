@props(['name'])

<label for="{{ $name }}"
    class="block text-lg font-medium text-gray-700 sm:mt-px sm:pt-2">{{ ucwords($name) }}</label>
