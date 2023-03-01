<x-layouts.app>
    <x-slot name="title">
        Edit Team
    </x-slot>
    <h1 class="text-6xl font-normal leading-normal mt-0 mb-2 text-cyan-800 text-center">Edit Team</h1>

    <div class="max-w-4xl bg-gray-100 flex items-center h-auto lg:h-screen flex-wrap mx-52 my-52 lg:my-0">
    <form action={{route('update', $teams->id)}} method="POST" enctype="multipart/form-data" class="w-full max-w-lg pb-5 mb-10 items-center h-auto">

        @csrf @method('patch')
        @foreach($errors->all() as $error)
        <div><small class="text-red-500 ml-52 flex items-center">{{$error}}</small></div></br>
        @endforeach
        <div class="flex flex-wrap ml-52 mb-10">
          <div class="w-full md:w-1/2 px- mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              Nombre
            </label>
            <input value="{{old('nombre',$teams->nombre)}}" min="6" name="nombre" class="appearance-none block w-48 bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Equipo">
            </div>
        
          <div class="w-full  md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold ml-10 mb-2" for="grid-last-name">
              Estadio
            </label>
            <input  value="{{old('estadio',$teams->estadio)}}" class="appearance-none block w-48 bg-gray-200 ml-10 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="estadio" placeholder="Estadio">
          </div>
        </div>
        <div class="flex flex-wrap ml-48 mb-2">
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold  mb-2" for="grid-city">
              Ciudad
            </label>
            <input value="{{old('ciudad',$teams->ciudad)}}" name="ciudad" class="appearance-none block w-36 bg-gray-200  text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Ciudad">
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-20" for="grid-state">
              Pais
            </label>
            <div>

                <input  value="{{old('pais',$teams->pais)}}" name="pais" class="appearance-none block w-36 bg-gray-200 ml-20 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Pais">
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              </div>
            </div>
            <label class="grid  mt-5 mb-2 place-items-center block uppercase tracking-wide text-gray-700 text-xs font-bold mt-5 mb-2 ml-10" for="grid-state">
              Imagen
            </label>
            <div>
                <input  name="imagen" class="grid  mt-5 mb-10 place-items-center appearance-none block bg-gray-200 -ml-24 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="file" accept="image/*">
            </div>
            <div class="pt-12 pb-8"> 

                <button type="submit" class="bg-cyan-500 ml-10 mr-20 hover:bg-cyan-800 text-white font-bold py-5 px-6 rounded-full">
                    Editar
                </button> 
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="mt-10">

    </div>

</x-layouts.app>