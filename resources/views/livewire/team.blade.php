<div>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @if($updateMode)
        @include('livewire.update_team')
    @else
        @include('livewire.create_team')
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
                               País de Origem
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
                                Pontuação
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
                                Vitórias
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
                                Derrotas
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
                                 Jogadores
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
                             Campeonatos
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
                       </th>
                          </tr>
                       </thead>
                       <tbody>
                         @foreach($teams as $team)
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
                                {{ $team->nome}}
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
                                {{ $team->pais_origem }}
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
                                {{ $team->pontuacao }}
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
                                {{ $team->vitorias }}
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
                                {{ $team->derrotas }}
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
                                   {{ $team->jogadores }}
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
                                {{ $team->campeonatos }}
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
                                wire:click="edit({{ $team->id}})  "    
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
                                <button class="inline-flex items-center px-4 py-4  bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md"  wire:click="delete({{ $team->id}})  ">
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
