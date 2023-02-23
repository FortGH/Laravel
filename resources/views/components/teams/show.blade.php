<x-layouts.app>
    <x-slot name="title">
        Show
    </x-slot>
    <h1 class="text-6xl font-normal leading-normal mt-0 mb-2 text-cyan-800 text-center">Team</h1>

    @if(session('update'))
        <div>
            <h2 class="text-xl font-normal leading-normal ml-10 mt-0 mb-2 text-red-600 ">{{session('update')}}</h2>
        </div>
    @endif
    @if(session('newGame'))
        <div>
            <h2 class="text-xl font-normal leading-normal ml-10 mt-0 mb-2 text-red-600 ">{{session('newGame')}}</h2>
        </div>
    @endif

    <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
    
        <!--Main Col-->
        <div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
        
    
            <div class="p-4 md:p-12 text-center lg:text-left">
                <!-- Image for mobile view-->
                <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/MP0IUfwrn0A')"></div>
                
                <h1 class="text-3xl font-bold pt-8 lg:pt-0">{{$teams->nombre}}🌙</h1>
                <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
                <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                  </svg>
                  {{ucfirst($teams->estadio)}}</p>
                <p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                  </svg><strong>{{ucfirst($teams->ciudad) . ", " . ucfirst($teams->pais)}}</strong></p>
                  
                <div class="flex">
                    <div class="pt-12 pb-8">
                        <button class="bg-cyan-500 ml-10 mr-20 hover:bg-cyan-800 text-white font-bold py-5 px-6 rounded-full">
                            <a href={{route('edit',$teams->id)}}>Edit</a>
                        </button> 
                    </div>
                    <div class="pt-12 pb-8">
                        <button class="bg-green-500  hover:bg-green-800 text-white font-bold py-2 px-4 ">
                            <a href={{route('newGame',$teams->id)}}>New Game</a>
                        </button> 
                    </div>
                    <div class="pt-12 pb-8">
                        <form action={{route('delete',$teams->id)}} method="POST">
                            @csrf  @method('delete')
                        <button class="bg-red-600 mx-20 hover:bg-red-900 text-white font-bold py-5 px-4 rounded-full" type="submit">
                        Delete
                        </button> 
  

                        </form>
                    </div>

                </div>
                
            </div>
    
        </div>
        
        <!--Img Col-->
        <div class="w-full lg:w-2/5">
            <!-- Big profile image for side bar (desktop) -->
            <img src="https://source.unsplash.com/MP0IUfwrn0A" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
            <!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->
            
        </div>
    
    </div>
    </div>

</x-layouts.app>