<x-layout>


    @include('partials._hero')
    @unless(count($listings) === 0)
        <div class=" grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 max-w-screen-xl mx-auto p-4">

            @foreach ($listings as $listing)
                <x-listing-card :listing='$listing' />
            @endforeach
            <span class="col-span-1  md:col-span-2 lg:col-span-3 ">
                {{ $listings->links() }}

            </span>

        </div>
    @else
        <div class=" px-4 h-80 flex justify-center items-center">
            <p class="text-xl font-medium">
                No Listings Available.
                Check back later!
            </p>
        </div>

    @endunless

</x-layout>
