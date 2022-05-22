<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center pl-2">
            {!! Breadcrumbs::render('projects.create')  !!}
        </nav>
    </div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white border-0">
                <div class="rounded-t mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-gray-700 text-xl font-bold">
                            New Project
                        </h6>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-4 p-6 pt-0">
                    <x-form-group label="Name" name="name">
                        <x-input wire:model.defer="name" name="name"></x-input>
                    </x-form-group>
                </div>
                <div class="rounded-t mb-0 px-6 py-6">
                    <div class="text-center flex justify-end">
                        <div class="flex">
                            <a href="{{ route('projects.index') }}"
                               class="bg-gray-50 hover:bg-gray-500 border border-gray-700 text-gray-700 hover:text-white font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                               type="button">
                                Back
                            </a>
                            <button wire:click="save"
                               class="bg-green-700 active:bg-green-600 text-white font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                               type="button">
                                Create
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
