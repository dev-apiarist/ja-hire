<x-layout>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
            </div>
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{ $listing->company }}
                </h1>
                <p class=" text-xs text-gray-500 w-fit">
                    <span class="mr-2">

                        <i class="fa-solid fa-map-pin"></i>
                    </span>
                    {{ $listing->location }}
                </p>
                <p class="mb-8 leading-relaxed">{{ $listing->description }}</p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-white hover:text-black  text-lg">Button</button>
                    <button
                        class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200  text-lg">Button</button>
                </div>
            </div>
        </div>
    </section>
</x-layout>
