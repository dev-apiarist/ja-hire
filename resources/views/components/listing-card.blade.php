@props(['listing'])



<a href="{{ route('show', $listing) }}" class="overflow-hidden shadow hover:shadow-md p-4 sm:p-6  ">
    {{-- <img alt="Office" src="https://freesvg.org/img/1624006800Jamaica-flag-ink-splash.png"
        class="h-56 w-full object-cover group-hover:animate-spin  duration-1000  ease-linear  transition-all " /> --}}

    <p class="text-xs text-gray-500 ">
        <span class="mr-2">

            <i class="fa-solid fa-map-pin"></i>
        </span>
        {{ $listing->location }}
    </p>

    <h3 class=" text-lg text-gray-900 my-2">
        {{ $listing->company }}
    </h3>

    <x-listing-tags :tagsCsv="$listing->tags" class="border-gray-300 " />
    <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
        {{ $listing->description }}
    </p>
</a>
