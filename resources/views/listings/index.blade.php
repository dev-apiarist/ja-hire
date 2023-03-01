<x-layout>
    @unless(count($listings) == 0)
        <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 max-w-screen-xl mx-auto">
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
            <div />
        @else
            <p>No Listings</p>
        @endunless
</x-layout>
