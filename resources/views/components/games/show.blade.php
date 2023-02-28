<x-layouts.app>

    <x-slot name="title">
        Game
    </x-slot>
    <h1 class="text-6xl font-normal leading-normal mt-0 mb-2 text-cyan-800 text-center">Game</h1>

    <div class="w-full mb-5 container mx-auto flex items-center flex-wrap pt-4 pb-12">
        
        @foreach($teams as $team)
            @if($team->id == $game->id_local)
                @switch($team->existe)
                    @case(1)
                        <div class="w-1/4 p-6 ml-36 flex flex-col">
                            <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                                <div class="pt-3 flex items-center justify-between text-center">
                                    <p class=" ml-20 text-center text-xl"> 
                                        {{$team->nombre }}
                                    </p>
                                </div>
                        </div>
                    @break
                    @case(0)
                        <div class="w-1/4 p-6 ml-36 flex flex-col">
                            <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                                <div class="pt-3 flex items-center justify-between text-center">
                                    <p class=" ml-20 text-center text-xl"> 
                                        <small class="flex text-center text-red-500">El equipo ya no existe</small>
                                    </p>
                                </div>
                        </div>
                    @break 
                @endswitch 
            @endif
        @endforeach
        
        <div class="w-1/4 p-6 ml-10 flex flex-col">
            <h2 class= "mx-16 flex items-center justify-center text-xl">Resultado</h2>
                <div class="flex items-center justify-center mb-24">
                    <p class="text-4xl">{{$game->goles_local}}</p>
                    <p class="text-4xl">-</p>
                    <p class="text-4xl">{{$game->goles_visita}}</p>
                </div>
                <div class="flex items-center justify-center ">
                    Fecha: {{$game->fecha}}
                </div>
                <div class="flex items-center justify-center ">
                    Estadio: {{$game->estadio}}
                </div>
            
        </div>
        
        @foreach($teams as $team)
            @if($team->id == $game->id_visita)
                @switch($team->existe)
                    @case(1)
                        <div class="w-1/4 p-6 ml-2 flex flex-col">
                            <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                                <div class="pt-3 flex items-center justify-between text-center">
                                    <p class=" ml-20 text-center text-xl"> 
                                        {{$team->nombre }}
                                    </p>
                                </div>
                        </div>
                    @break
                    @case(0)
                        <div class="w-1/4 p-6 ml-2    flex flex-col">
                            <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                                <div class="pt-3 flex items-center justify-between text-center">
                                    <p class=" ml-20 text-center text-xl"> 
                                        <small class="text-center text-red-500">El equipo ya no existe</small>
                                    </p>
                                </div>
                        </div>
                    @break 
                @endswitch 
            @endif
        @endforeach                   
        
    </div>
    <div class="w-full mb-5 container mx-auto flex items-center flex-wrap pt-4 pb-12">
        <div class="grid  mt-5 mb-10 place-items-center w-1/2 mb-5 container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <button class="bg-green-500  hover:bg-green-800 text-white font-bold py-2 px-4 ">
                <a href="/España">Edit</a>
            </button> 
        </div>
        <div class="grid  mt-5 mb-10 place-items-center w-1/2 mb-5 container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <button class="bg-red-500  hover:bg-red-800 text-white font-bold py-2 px-4 ">
                <a href="#">Delete</a>
            </button> 
        </div>
    </div>

</x-layouts.app>