<x-layout>

    <x-card class="p-10 max-w-lg mx-auto mt-24"
                    >
                        <header class="text-center">
                            <h2 class="text-2xl font-bold uppercase mb-1">
                                Edit a Record
                            </h2>
                            <p class="mb-4">Edit a Record to be Archived</p>
                        </header>
    
                        <form method="POST" action="/records/{{$record->id}}">
                            @csrf
                            @method('PUT')
                            <div class="mb-6">
                                <label for="title" class="inline-block text-lg mb-2"
                                    >Record Title</label
                                >
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="title"
                                    placeholder="Example: Water Quality of major bodies of water" 
                                    value="{{$record->title}}"
                                />
                                @error('title')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
    
                            <div class="mb-6">
                                <label
                                    for="status"
                                    class="inline-block text-lg mb-2"
                                    >Record Status</label
                                >
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="status"
                                    placeholder="Example: Active or Inactive" 
                                    value="{{$record->status}}"
                                />
                                @error('status')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
    
                            {{-- <div class="mb-6">
                                <label
                                    for="website"
                                    class="inline-block text-lg mb-2"
                                >
                                    Website/Application URL
                                </label>
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="website"
                                />
                            </div> --}}
    
                            {{-- <div class="mb-6">
                                <label for="tags" class="inline-block text-lg mb-2">
                                    Tags (Comma Separated)
                                </label>
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="tags"
                                    placeholder="Example: Laravel, Backend, Postgres, etc"
                                />
                            </div> --}}
    
                            {{-- <div class="mb-6">
                                <label for="logo" class="inline-block text-lg mb-2">
                                    Company Logo
                                </label>
                                <input
                                    type="file"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="logo"
                                />
                            </div> --}}
    
                            <div class="mb-6">
                                <label for="code" class="inline-block text-lg mb-2">
                                    Record Code
                                </label>
                                <input
                                    type="string"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="code"
                                    placeholder="0123"
                                    value="{{$record->code}}"
                                />
                                @error('code')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
    
                            <div class="mb-6">
                                <label
                                    for="description"
                                    class="inline-block text-lg mb-2"
                                >
                                    Record Description
                                </label>
                                <textarea
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="description"
                                    rows="10"
                                    placeholder="Include tasks, requirements, salary, etc" 
                                >{{$record->description}}</textarea>
                                    
                                
                                @error('description')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
    
                            <div class="mb-6">
                                <button
                                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                                >
                                    Update Record
                                </button>
    
                                <a href="/" class="text-black ml-4"> Back </a>
                            </div>
                        </form>
        </x-card>
    </x-layout>