@props(['listing'])

<div class="overflow-hidden shadow hover:shadow-md">
    {{-- <img alt="Office" src="https://freesvg.org/img/1624006800Jamaica-flag-ink-splash.png"
        class="h-56 w-full object-cover group-hover:animate-spin  duration-1000  ease-linear  transition-all " /> --}}

    <div class="bg-white p-4 sm:p-6">
        <p class="block text-xs text-gray-500">
            <span class="mr-2">

                <i class="fa-solid fa-map-pin"></i>
            </span>
            {{ $listing->location }}
        </p>

        <a href="#">
            <h3 class="mt-0.5 text-lg text-gray-900">
                {{ $listing->company }}
            </h3>
        </a>
        <div class="mt-2">

            <x-listing-tags :tagsCsv="$listing->tags" />
        </div>

        <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
            {{ $listing->description }}
        </p>
    </div>
</div>
