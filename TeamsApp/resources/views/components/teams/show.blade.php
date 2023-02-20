<x-layouts.app>
    <x-slot name="title">
        Show
    </x-slot>

     <h1>Show Team</h1></br>
     <div>
        <h2>
                Nombre: {{$teams->nombre}}
        </h2>
    </br>
        <h2>
            Estadio: {{$teams->estadio}}
        </h2>
    </br>
        <h2>
            Ciudad: {{$teams->ciudad}}
        </h2>
    </br>
        <h2>
            Pais: {{$teams->pais}}
        </h2>
   

</x-layouts.app>