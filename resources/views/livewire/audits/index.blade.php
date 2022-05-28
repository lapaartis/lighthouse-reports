@php
$header_row_class = "text-sm font-bold text-gray-900 px-6 py-4";
$body_row_class = "text-sm font-medium text-gray-900 px-6 py-4 whitespace-nowrap";
@endphp

<div class="table border-separate w-full" style="border-spacing: 0 10px;">
    <div class="table-header-group">
        <div class="table-row bg-white">
            <div class="table-cell {{ $header_row_class }} text-left rounded-l-lg">Name</div>
            <div class="table-cell {{ $header_row_class }} text-center">Performance</div>
            <div class="table-cell {{ $header_row_class }} text-center">P.W.A</div>
            <div class="table-cell {{ $header_row_class }} text-center">Accessibility</div>
            <div class="table-cell {{ $header_row_class }} text-center">Best practices</div>
            <div class="table-cell {{ $header_row_class }} text-center">S.E.O</div>
            <div class="table-cell {{ $header_row_class }} text-center rounded-r-lg">Reports</div>
        </div>
    </div>
    <div class="table-row-group pt-2">
        @foreach($audits as $key => $audit)
        <a href="{{ route('projects.audits.show', [$audit->project_id, $audit->id]) }}" class="table-row bg-white transition duration-300 ease-in-out hover:bg-gray-200">
            <div class="table-cell {{ $body_row_class }} rounded-l-lg">
                {{ $audit->name }}
            </div>
            <div class="table-cell {{ $body_row_class }} text-center">0</div>
            <div class="table-cell {{ $body_row_class }} text-center">0</div>
            <div class="table-cell {{ $body_row_class }} text-center">0</div>
            <div class="table-cell {{ $body_row_class }} text-center">0</div>
            <div class="table-cell {{ $body_row_class }} text-center">0</div>
            <div class="table-cell {{ $body_row_class }} text-center rounded-r-lg">0</div>
        </a>
        @endforeach
    </div>
</div>
