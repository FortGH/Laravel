<x-layouts.app>
    <x-slot name="title">
        Edit Game
    </x-slot>

    <h1 class="text-6xl font-normal leading-normal mt-0 mb-2 text-cyan-800 text-center">Edit Game</h1>


    <form action={{route('updateGame',$game->id)}} method="POST">

        @csrf @method('PATCH')
        @foreach($errors->all() as $error)
        <div><small class="text-red-500 grid  place-items-center">{{$error}}</small></div></br>
        @endforeach
    <div class="w-full mb-5 container mx-auto flex items-center flex-wrap pt-4 pb-12">
        
        @foreach($teams as $team)
            @if($team->id == $game->id_local)
                @switch($team->existe)
                    @case(1)
                        <div class="w-1/4 p-6 ml-36 flex flex-col">
                            <img class="hover:grow hover:shadow-lg" src={{$team->url?$team->url:'https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80'}}>
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
            <h2 class="text-center">Marcador</h2>
            <div class="container mx-auto ml-2 flex items-center flex-wrap pt-4 pb-12">
                <input class="w-20 ml-10 mr-2 bg-gray-200" name="goles_local" type="number" value="{{old('goles_local',$game->goles_local)}}">
                <p>-</p>
                <input class="w-20 ml-2 bg-gray-200" name="goles_visita" type="number" value="{{old('goles_visita',$game->goles_visita)}}">
            </div>
            <div class="flex items-center flex-wrap mb-4">
                <p class="text-center ml-10 bg-gray-200">Estadio: 
                    <select name="estadio">
                        @foreach($teams as $team)
                        @if($team->id == $game->id_local || $team->id == $game->id_visita)
                        <option value="{{$team->estadio}}">{{$team->estadio}}</option>
                        @endif
                        @endforeach
                    </select>
                </p>
            </div>
            <div>
                <p class="text-center ml-6 bg-gray-200">Fecha: <input class="w-36"  name="fecha" type="date" value="{{old('fecha',$game->fecha)}}"></p>
                
            </div>
            
        </div>
        
        @foreach($teams as $team)
            @if($team->id == $game->id_visita)
                @switch($team->existe)
                    @case(1)
                        <div class="w-1/4 p-6 ml-2 flex flex-col">
                            <img class="hover:grow hover:shadow-lg" src={{$team->url?$team->url:'https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80'}}>
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
    <div class="grid  mt-5 mb-10 place-items-center w-1/2 mb-5 container mx-auto flex items-center flex-wrap pt-4 pb-12">
        <button type="submit" class="bg-green-500  hover:bg-green-800 text-white font-bold py-2 px-4 ">
            Guardar
        </button> 
    </div>  
</form>

</x-layouts.app>