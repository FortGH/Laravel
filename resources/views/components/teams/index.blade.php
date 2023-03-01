<x-layouts.app>
    <x-slot name="title">
        Teams
    </x-slot>

    <h1 class="text-6xl font-normal leading-normal mt-0 mb-2 text-cyan-800 text-center">Teams</h1>

    @if(session('create'))
        <div>
            <h2 class="text-xl font-normal leading-normal ml-10 mt-0 mb-2 text-red-600 ">{{session('create')}}</h2>
        </div>
    @endif
    @if(session('delete'))
        <div>
            <h2 class="text-xl font-normal leading-normal ml-10 mt-0 mb-2 text-red-600 ">{{session('delete')}}</h2>
        </div>
    @endif
    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
        @foreach($teams as $team)
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href={{route("show",$team->id)}}>
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                        <div class="pt-3 flex items-center justify-between text-center">
                            <p class="text-center text-xl"> {{$team->nombre}}</p>
                        </div>
                            <p class="pt-1 text-gray-900">{{$team->pais}}</p>
                </a>
            </div>
        @endforeach
    </div>

</x-layouts.app>