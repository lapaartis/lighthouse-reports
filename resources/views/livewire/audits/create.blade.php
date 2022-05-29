<div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white border-0">
    <div class="rounded-t mb-0 px-6 py-6">
        <div class="text-center flex justify-between">
            <h6 class="text-gray-700 text-xl font-bold">
                New Audit
            </h6>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-4 p-6 pt-0">
        <x-form-group label="Name" name="name">
            <x-input wire:model.defer="name" name="name"></x-input>
        </x-form-group>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-4 p-6 pt-0">
        <div x-data="auditUrlList(@entangle('urls').defer)">
            <x-form-group label="Urls" name="urls">
                <x-input name="urls" type="url" x-model="newUrl" @keydown.enter="addUrl"></x-input>
            </x-form-group>
            <ul class="pt-2">
                <template x-for="(item, index) in items" :key="index">
                    <li class="mb-2 ">
                        <div class="flex items-center border rounded p-2 border-blue-400 break-all justify-between">
                            <span x-text="item.url" class="text-sm"></span>
                            <button @click="deleteUrl(index)">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                        <p x-show="item.errors.length" x-text="item.errors[0]"
                           class="form-error mt-1 text-red-500 text-sm"></p>
                    </li>
                </template>
            </ul>
        </div>
    </div>
    <div class="rounded-t mb-0 px-6 py-6">
        <div class="text-center flex justify-end">
            <div class="flex">
                <a href="{{ route('projects.show', [$project]) }}"
                   class="bg-gray-50 hover:bg-gray-500 border border-gray-700 text-gray-700 hover:text-white font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                   type="button">
                    Back
                </a>
                <button wire:click="store"
                        class="bg-green-700 active:bg-green-600 text-white font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                        type="button">
                    Create
                </button>
            </div>
        </div>
    </div>
</div>
