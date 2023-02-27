<x-layouts.app>
    <x-slot name="title">
        New Game
    </x-slot>

    <form action={{route('storeGame')}} method="POST" class="max-w-4xl bg-gray-100 flex items-center h-auto lg:h-screen flex-wrap mx-52 my-32 lg:my-0">
    @csrf
    @foreach($errors->all() as $error)
        <div><small class="text-red-500 ml-52 flex items-center">{{$error}}</small></div></br>
        @endforeach
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
       
        
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex ml-20 flex-col">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <input type="hidden" name="team1" value={{$team->id}}>
                        <input type="text" name="" value="{{$team->nombre}}"  readonly>
                        {{--<h2 name="team1">{{$team->nombre}}</h2>--}}
                    </div>
            </div>
            <div class="">
                <h2 class="text-center">Marcador</h2>
                <div class="container mx-auto ml-2 flex items-center flex-wrap pt-4 pb-12">
                    <input class="w-20 ml-10 mr-2 bg-gray-200" name="goles_local" type="number">
                    <p>-</p>
                    <input class="w-20 ml-2 bg-gray-200" name="goles_visita" type="number">
                {{--aqui van lo de los resultados el estadio y la fecha  y el boton de crear --}}
                </div>
                <div class="flex items-center flex-wrap mb-4">
                    <p class="text-center ml-10 bg-gray-200">Estadio: <input class="w-36" type="text" name="estadio"  value="{{ $team->estadio}}" readonly></p>
                </div>
                <div>
                    <p class="text-center ml-6 bg-gray-200">Fecha: <input class="w-36" type="date" name="fecha"  value="{{ date("Y-m-d")}}" readonly></p>
                    
                </div>
                <div class="pt-12 pb-8">
                    <button type="submit" class="bg-cyan-500 ml-10 mr-20 hover:bg-cyan-800 text-white font-bold py-5 px-6 rounded-full">
                        Guardar
                    </button> 
                </div>
            </div>
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <div class="items-center">
                            <select name="team2" id="team2">
                                @foreach($teams as $tem)
                                    @if($tem->id != $team->id)
                                        <option value={{$tem->id}}>{{$tem->nombre}}</option>
                                    @endif
                                @endforeach
                            </select> 
                        </div>
                    </div>
            </div>
        
    </div>
</form>

</x-layouts.app>