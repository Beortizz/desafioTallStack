{{-- <div class="px-6 py-2">
    <h3 class="text-lg leading-6 font-medium text-gray-900">Times</h3>
    <form wire:submit.prevent="submit" class="space-y-8 divide-y divide-gray-200">
        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <div class="col-span-2">
                <label for="nome" class="text-sm font-medium text-gray-700">Nome</label>
                <input type="text" wire:model="nome" id="name" autocomplete="nome" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                {{-- @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror -
            </div>
            <div class="col-span-1">
                <label for="pais_origem" class="text-sm font-medium text-gray-700">País de Origem</label>
                <input type="text" wire:model="pais_origem" id="pais_origem" autocomplete="pais_origem" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                {{-- @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror --
            </div>
            <div class="col-span-3">
                <label for="pontuacao" class="text-sm font-medium text-gray-700">Pontuação</label>
                <input type="number" wire:model="pontuacao" id="pontuacao" autocomplete="pontuacao" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                {{-- @error('about') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror --}
            </div>
            <div class="col-span-2">
                <label for="derrotas" class="text-sm font-medium text-gray-700">Derrotas</label>
                <input type="number" wire:model="derrotas" id="derrotas" autocomplete="derrotas" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                {{-- @error('about') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror --}
            </div>
            <div class="col-span-1">
                <label for="vitorias" class="text-sm font-medium text-gray-700">Vitórias</label>
                <input type="number" wire:model="vitorias" id="vitorias" autocomplete="vitorias" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                {{-- @error('about') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror --}
            </div>
            {{-- <div class="mt-4">
                <label for="time" class="text-sm font-medium text-gray-700">Time</label>
                <select wire:model="campeonato" 
                class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                    <option value=''>Escolha um campeonato</option>
                    @foreach($championships as $championship)
                        <option value="{{ $championship->id }}">{{ $championship->nome }}</option>
                    @endforeach
                </select>

            </div>  --}
            <div class="col-span-1">
                <button type="submit" class="bg-blue-500 py-2 px-3 rounded-md shadow-sm text-sm hover:bg-purple-500 font-medium text-white">Salvar</button>
            </div>
        </div>
    </form>
</div>  --}}

<div x-show="modelOpen" @click.away="modelOpen = false" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">


        <div x-cloak x-show="modelOpen" 
            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
        >
            <div class="flex items-center justify-between space-x-4">
            <h1 class="text-xl font-medium text-gray-800 ">Criar Time</h1>

                <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>

            <form class="mt-5">
                <div>
                    <label for="nome" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Nome</label>
                    <input  type="text" wire:model="nome" id="nome"class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>
                <div>
                    <label for="pais_origem" class="block text-sm text-gray-700 capitalize dark:text-gray-200">País de Origem</label>
                    <input  type="text" wire:model="pais_origem" id="pais_origem"class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>

                <div class="mt-4">
                    <label for="pontuacao" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Pontuação</label>
                    <input wire:model="pontuacao" type="number" id="pontuacao"class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>
                
                <div class="mt-4">
                    <label for="derrotas" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Derrotas</label>
                    <input wire:model="derrotas" type="number" id="derrotas"class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>
                 
                <div class="mt-4">
                    <label for="vitorias" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Vitórias</label>
                    <input wire:model="vitorias" type="number" id="vitorias"class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>            
                <div class="flex justify-end mt-6">
                    <button wire:click.prevent="submit()" @click="modelOpen = false"  type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>