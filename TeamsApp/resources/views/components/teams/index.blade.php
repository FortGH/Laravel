<x-layouts.app>
    <x-slot name="title">
        Teams
    </x-slot>

    @if(session('team'))
        <div>
            {{session('team')}}
        </div>
    @endif
     @foreach($teams as $team)
        <div>
            <h2>
                <a href={{route("show",$team->id)}}>
                    Nombre: {{$team->nombre}}
                </a>
            </h2>
        </br>
            <h2>
                Estadio: {{$team->estadio}}
            </h2>
        </br>
            <h2>
                Ciudad: {{$team->ciudad}}
            </h2>
        </br>
            <h2>
                Pais: {{$team->pais}}
            </h2>
         </br>
        </div>
        </br>
     @endforeach

</x-layouts.app>