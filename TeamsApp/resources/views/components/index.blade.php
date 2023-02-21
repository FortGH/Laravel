<x-layouts.app>
    <x-slot name="title">
        Teams
    </x-slot>

     @foreach($teams as $team)
     <div>
        <h2>Nombre: {{$team->nombre}}</h2></br>
        <h2>Estadio: {{$team->estadio}}</h2></br>
        <h2>Ciudad: {{$team->ciudad}}</h2></br>
        <h2>Pais: {{$team->pais}}</h2></br>
     </div></br>
     @endforeach

</x-layouts.app>