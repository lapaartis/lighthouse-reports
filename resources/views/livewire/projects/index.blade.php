<div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white border-0">
    <div class="rounded-t mb-0 px-6 py-6">
        <div class="text-center flex justify-between">
            <h6 class="text-gray-700 text-xl font-bold">
                Projects
            </h6>
            <div class="flex justify-between">
                <div class="pr-2">
                    <x-input wire:model="search" name="search" class="pl-10 sm:text-xs">
                        <x-slot name="leadingIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </x-slot>
                    </x-input>
                </div>
                <a href="{{ route('projects.create') }}"
                   class="bg-gray-700 active:bg-gray-600 text-white font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                   type="button">
                    New Project
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-6 gap-4 p-6 pt-0">
            @foreach($projects as $project)
                <a href="{{ route('projects.show', [$project]) }}" class="border border-2 rounded">
                    <div class="py-5">
                        <div class="text-center">
                            <span class="border-4 border-white rounded-full mx-auto inline-block">
                                <img class="rounded-full w-20 h-20"
                                     src="https://randomwordgenerator.com/img/picture-generator/51e6dc41434faa0df7c5d57bc32f3e7b1d3ac3e455517349762f72d794_640.jpg"
                                     alt="profile"/>
                            </span>
                        </div>
                        <p class="text-center"><span class="font-bold">{{ $project->name }}</span></p>
                        <p class="text-xs text-center">Undertext</p>
                    </div>
                    <hr/>
                    <div class="flex justify-between px-10 py-5">
                        <div class="text-center">
                            <p class="font-bold">100K</p>
                            <p class="text-xs">Followers</p>
                        </div>
                        <div class="text-center">
                            <p class="font-bold">903K</p>
                            <p class="text-xs">Likes</p>

                        </div>
                        <div class="text-center">
                            <p class="font-bold">104K</p>
                            <p class="text-xs">Photos</p>

                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="container mx-auto w-full p-6 pt-0">
            {{ $projects->links() }}
        </div>
    </div>
</div>

