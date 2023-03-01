<x-layouts.app>
    <x-slot name="title">
        Create Team
    </x-slot>
    <h1 class="text-center text-red-700 text-xl">Create a Team</h1>
    <form action={{route('store')}} method="POST">

        @csrf
        <label >
            Nombre</br>
            <input name="nombre" type="text" value={{ old('nombre')}}>
            @error('nombre')
        </br>
                  <small>{{$message}}</small>
            @enderror
        </label></br>

        <label >
            Estadio </br>
            <input name="estadio" type="text" value={{old('estadio')}} >
            @error('estadio')
        </br>
                 <small>{{$message}}</small>
            @enderror
        </label></br>

        <label >
            Ciudad </br>
            <input name="ciudad" type="text" value={{old('ciudad')}} >
            @error('ciudad')
        </br>
                <small>{{$message}}</small>
            @enderror
        </label></br>

        <label >
            Pais </br>
            <input name="pais" type="text" value={{old('pais')}}>
            @error('pais')
        </br>
                <small>{{$message}}</small>
            @enderror
        </label></br>

        <button type="submit"> 
            Crear
        </button>

    </form>
    

</x-layouts.app>