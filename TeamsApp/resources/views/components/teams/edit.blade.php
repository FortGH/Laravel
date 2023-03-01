<x-layouts.app>
    <x-slot name="title">
        Edit Team
    </x-slot>
    <h1 class="text-center text-red-700 text-xl">Edit Team</h1>
    
    <form action={{route('update', $teams->id)}} method="POST">

        @csrf @method('patch')
        <label >
            Nombre</br>
            <input name="nombre" type="text" value={{$teams->nombre}}>
            @error('nombre')
        </br>
                  <small>{{$message}}</small>
            @enderror
        </label></br>

        <label >
            Estadio </br>
            <input name="estadio" type="text" value={{$teams->estadio}} >
            @error('estadio')
        </br>
                 <small>{{$message}}</small>
            @enderror
        </label></br>

        <label >
            Ciudad </br>
            <input name="ciudad" type="text" value={{$teams->ciudad}} >
            @error('ciudad')
        </br>
                <small>{{$message}}</small>
            @enderror
        </label></br>

        <label >
            Pais </br>
            <input name="pais" type="text" value={{$teams->pais}}>
            @error('pais')
        </br>
                <small>{{$message}}</small>
            @enderror
        </label></br>

        <button type="submit"> 
            Editar
        </button>

    </form>
    

</x-layouts.app>