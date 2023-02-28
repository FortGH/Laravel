<x-layouts.app>
    <x-slot name="title">
        Games
    </x-slot>

   {{-- @foreach($games as $game)
    @dump($game);
    @endforeach

    @foreach($teams as $team)
    @dump($team);
    @endforeach--}}

    <h1 class="text-6xl font-normal leading-normal mt-0 mb-2 text-cyan-800 text-center">Games</h1>

    @if(!$games->isEmpty())

        @foreach($games as $game)
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
                                                <small class="text-center text-red-500">El equipo ya no existe</small>
                                            </p>
                                        </div>
                                </div>
                            @break 
                        @endswitch 
                     @endif
                @endforeach
            
            <a href={{route('showGame',$game->id)}} class="w-1/4 p-6 flex flex-col">
                <div class="p-6 flex flex-col">
                    <h2 class= "flex items-center justify-center mb-24 mx-16 text-xl">Resultado</h2>
                        <div class="flex items-center justify-center mb-24">
                            <p class="text-4xl">{{$game->goles_local}}</p>
                            <p class="text-4xl">-</p>
                            <p class="text-4xl">{{$game->goles_visita}}</p>
                        </div>
                </div>
            </a>
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
            
        @endforeach
    @else
        <h2 class="text-2xl font-normal leading-normal mt-0 mb-2 text-red-500 text-center">No hay Partidos</h2>
    @endif
</x-layouts.app>