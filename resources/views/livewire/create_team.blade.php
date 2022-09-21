<div class="px-6 py-2">
    <h3 class="text-lg leading-6 font-medium text-gray-900">Times</h3>
    <form wire:submit.prevent="submit" class="space-y-8 divide-y divide-gray-200">
        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <div class="col-span-2">
                <label for="nome" class="text-sm font-medium text-gray-700">Nome</label>
                <input type="text" wire:model="nome" id="name" autocomplete="nome" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                {{-- @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror --}}
            </div>
            <div class="col-span-1">
                <label for="pais_origem" class="text-sm font-medium text-gray-700">País de Origem</label>
                <input type="text" wire:model="pais_origem" id="pais_origem" autocomplete="pais_origem" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                {{-- @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror --}}
            </div>
            <div class="col-span-3">
                <label for="pontuacao" class="text-sm font-medium text-gray-700">Pontuação</label>
                <input type="number" wire:model="pontuacao" id="pontuacao" autocomplete="pontuacao" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                {{-- @error('about') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror --}}
            </div>
            <div class="col-span-2">
                <label for="derrotas" class="text-sm font-medium text-gray-700">Derrotas</label>
                <input type="number" wire:model="derrotas" id="derrotas" autocomplete="derrotas" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                {{-- @error('about') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror --}}
            </div>
            <div class="col-span-1">
                <label for="vitorias" class="text-sm font-medium text-gray-700">Vitórias</label>
                <input type="number" wire:model="vitorias" id="vitorias" autocomplete="vitorias" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                {{-- @error('about') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror --}}
            </div>
            <div class="col-span-2">
                <label for="jogadores" class="text-sm font-medium text-gray-700">Jogadores</label>
                <input type="text" wire:model="jogadores" id="jogadores" autocomplete="jogadores" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                {{-- @error('about') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror --}}
            </div>
            <div class="col-span-1">
                <label for="campeonatos" class="text-sm font-medium text-gray-700">Campeonatos</label>
                <input type="text" wire:model="campeonatos" id="campeonatos" autocomplete="campeonatos" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                {{-- @error('about') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror --}}
            </div>
            <div class="col-span-1">
                <button type="submit" class="bg-blue-500 py-2 px-3 rounded-md shadow-sm text-sm hover:bg-purple-500 font-medium text-white">Salvar</button>
            </div>
        </div>
    </form>
</div> 