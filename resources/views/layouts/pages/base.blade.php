<x-app-layout>
    @if( isset($breadcrumb_name) )
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center pl-2">
                {!! Breadcrumbs::render($breadcrumb_name, $breadcrumb_params ?? null)  !!}
            </nav>
        </div>
    @endif

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </div>
</x-app-layout>
