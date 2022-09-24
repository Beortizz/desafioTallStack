<div>
 
   
    <section class="bg-white py-20 lg:py-[120px]">

        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="max-w-full overflow-x-auto">
                        <label for="pais_origem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an option</label>
                        <select wire:model="pais_origem" wire:change="getTimesPaisOrigem()" id="pais_origem" class="px-3 mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled> selecione um país</option>
                            <option value="all"> Todos </option>
                            @foreach($allTeams as $team)
                                <option value="{{ $team->pais_origem }}"> {{ $team->pais_origem }}</option>
                            @endforeach
            
                        </select>
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
                                    Time
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
                                "
                                >
                                País de Origem
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
                                        {{ $team->pontuacao }}
                                
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
                                        {{ $team->vitorias }}
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
                                border-b border-[#E8E8E8]
                                "
                                >
                                {{ $team->pais_origem }}
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
