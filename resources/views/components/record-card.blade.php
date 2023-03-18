@props(['record'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{asset('images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/records/{{$record->id}}">{{$record->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$record->code}}</div>
            
            
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$record->status}}
            </div>
        </div>
    </div>
</x-card>