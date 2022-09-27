<div>
    <!-- component -->
    @include('livewire.includes.navbar')
    <div x-data="{ modelOpen: false }">   
        @if($updateMode)
            @include('livewire.championships.update_championship')
        @else
            @include('livewire.championships.create_championship')
        @endif
 
        <section class="bg-white py-20 lg:py-[120px]">
            <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="max-w-full overflow-x-auto">
                        <table class="table-auto w-full">
                        <thead>
                            <tr class="bg-primary text-center">
                                <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    border-l border-transparent
                                    "
                                    >
                                    Nome
                                </th>
                                <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                Jogo
                                </th>
                                <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Data de início
                                </th>
                                <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Data final
                                </th>
                                <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                   Times
                                </th>
                                <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    border-r border-transparent
                                    "
                                    >
                                    <button wire:click.prevent="updateModeFalse()" @click="modelOpen = true" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Criar</button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($championships as $championship)

                            {{-- @dd($player->teams) --}}
                            <tr>
                                <td
                                    class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-[#F3F6FF]
                                    border-b border-l border-[#E8E8E8]
                                    "
                                    >
                                    {{ $championship->nome }}
                                </td>
                                <td
                                    class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-white
                                    border-b border-[#E8E8E8]
                                    "
                                    >
                                    {{ $championship->jogo }}
                                </td>
                                <td
                                    class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-[#F3F6FF]
                                    border-b border-[#E8E8E8]
                                    "
                                    >
                                    {{ $championship->data_inicio }}
                                </td>
                                <td
                                    class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-white
                                    border-b border-[#E8E8E8]
                                    "
                                    >
                                    {{ $championship->data_final }}
                                </td>
                                <td
                                    class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-white
                                    border-b border-r border-[#E8E8E8]
                                    "
                                    > 
                                
                                    @foreach($championship->teams as $team)
                                        {{ $team->nome }}
                                    @endforeach
                                
                                </td>
                                <td
                                class="
                                text-center text-dark
                                font-medium
                                text-base
                                py-5
                                px-2
                                bg-white
                                border-b border-r border-[#E8E8E8]
                                "
                                >
                                <button
                                    @click="modelOpen = true"
                                    wire:click="edit({{$championship->id}})"  
                                    class="
                                    border border-primary
                                    py-2
                                    px-6
                                    text-primary
                                    inline-block
                                    rounded
                                    hover:bg-primary hover:text-white
                                    "
                                    >
                                    Editar
                                </button >
                                <a
                                href="/championshipDashboard/{{$championship->id}}"
                                class="
                                border border-primary
                                py-2
                                px-6
                                text-primary
                                inline-block
                                rounded
                                hover:bg-primary hover:text-white
                                "
                                >
                                Detalhes
                            </a >
                                {{-- <a href="{{ route('players.destroy') }}"> --}}
                                    <button class="inline-flex items-center px-4 py-4  bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md"  wire:click="delete({{$championship->id}})  ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    
                                    Deletar
                                    </button>
                                {{-- </a> --}}
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </div>

</div>
