<x-layout>
    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($records) == 0)

        @foreach($records as $record)
        <x-record-card :record="$record" />
        @endforeach

        @else 
        <p>No Records found</p>
        @endunless 

    </div>

    <div class="mt-6 p-4">
        {{$records->links()}}
    </div>
</x-layout>
