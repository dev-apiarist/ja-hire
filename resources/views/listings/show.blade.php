<x-layout>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col ">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
            </div>
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <p class="mb-3 leading-relaxed font-bold">{{ $listing->title }}</p>

                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{ $listing->company }}
                </h1>
                <p class=" text-xs text-gray-500 w-fit mb-2">
                    <span class="mr-2">

                        <i class="fa-solid fa-map-pin"></i>
                    </span>
                    {{ $listing->location }}
                </p>
                <a href="{{ $listing->website }}"
                    class="mb-8 leading-relaxed text-justify text-purple-400">{{ $listing->website }}</a>
                <p class="mb-8
                    leading-relaxed text-justify">{{ $listing->description }}</p>
                <a href="{{ route('edit', $listing) }}"
                    class="inline-flex text-white bg-black border-black border py-2 px-6 focus:outline-none hover:text-black hover:bg-transparent  text-lg transition-all ease-linear">Edit</a>
            </div>
        </div>
    </section>
</x-layout>
