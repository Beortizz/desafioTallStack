<div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">


        <div x-cloak x-show="modelOpen" 
            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
        >
            <div class="flex items-center justify-between space-x-4">
                <h1 class="text-xl font-medium text-gray-800 ">Atualizar campeonato</h1>

                <button  class="text-gray-600 focus:outline-none hover:text-gray-700"  @click="modelOpen = false">
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
                    <label for="jogo" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Jogo</label>
                    <input  type="text" wire:model="jogo" id="jogo"class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>
                <div class="mt-4">
                    <label for="data_inicio" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Data de início</label>
                    <input wire:model="data_inicio"type="date" id="data_inicio"class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>
                

                <div class="mt-4">
                    <label for="data_final" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Data Final</label>
                    <input wire:model="data_final"type="date" id="data_final"class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>

                <div class="mt-4">
                    <label for="time" class="text-sm font-medium text-gray-700">Time</label>
                    <select wire:model="time" 
                    class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                        <option value=''>Escolha um time</option>
                        @foreach($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->nome }}</option>
                        @endforeach

                        @json($time)
                    </select>
                </div> 
                
                <div class="flex justify-end mt-6">
                    <button wire:click.prevent="update()" @click="modelOpen = false"  type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>