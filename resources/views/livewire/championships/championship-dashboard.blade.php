
<div>
    <h1>{{ $championship->nome }}</h1>
    <h3>De{{ $championship->data_inicio }} até {{ $championship->data_final }}</h3>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($championship->teams as $team)
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
