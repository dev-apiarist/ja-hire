@props(['enctype' => null, 'method' => 'POST', 'route' => null])

<form class="space-y-8  container mx-auto px-4 mb-20" action="{{ route('store') }}" method="{{ $method }}">
    @csrf

    <h1 class="text-center text-4xl font-medium uppercase">Create Listing</h1>
    <x-form.field name="title" />
    <x-form.field name="company" />
    <x-form.field name="location" />
    <x-form.field name="description" />
    <x-form.field name="email" type="email" />
    <x-form.field name="website" />
    <x-form.field name="tags" placeholder="Insert comma-separated values" />
    {{-- <x-form.field name="logo" type="file" /> --}}
    <div class="max-w-2xl mx-auto ">
        <x-form.button>Add</x-form.button>
    </div>
</form>
