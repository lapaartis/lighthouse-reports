<div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white border-0">
    <div class="rounded-t mb-0 px-6 py-6">
        <div class="text-center flex justify-between">
            <h6 class="text-gray-700 text-xl font-bold">
                Audit information
            </h6>
            <div>
                <a href="{{ route('projects.audits.edit', [$project, $audit]) }}" class="text-gray-400 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-4 p-6 pt-0">
        Project name: {{ $project->name }}
        Audit name: {{ $audit->name }}
        <ul>
            @foreach($audit->urls as $url)
                <li>{{ $url }}</li>
            @endforeach
        </ul>
    </div>
</div>
