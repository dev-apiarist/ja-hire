@props(['listing'])

<article class="overflow-hidden shadow transition hover:shadow-md">
    <img alt="Office"
        src="https://cdn5.vectorstock.com/i/1000x1000/34/34/circle-spin-round-abstract-business-logo-vector-23013434.jpg"
        class="h-56 w-full object-cover animate-spin duration-1000 " />

    <div class="bg-white p-4 sm:p-6">
        <time class="block text-xs text-gray-500">
            {{ $listing->location }}
        </time>

        <a href="#">
            <h3 class="mt-0.5 text-lg text-gray-900">
                {{ $listing->company }}
            </h3>
        </a>

        <ul>
            <li>{{ $listing->tags }}</li>
        </ul>

        <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
            {{ $listing->description }}
        </p>
    </div>
</article>
