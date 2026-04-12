@extends('layouts.backend')

{{-- push styles --}}
@include('components.datatables.styles')

{{-- content --}}
@section('nav-timeline', 'active')
@section('content')

    {{-- - 1. Judul --}}
    <x-modules.callout>
        Timeline of Event ASEAN HUB 2026
    </x-modules.callout>

    {{-- 2. Index Blade --}}
    <x-modules.index-table>
        <x-slot:header>
            <a href="{{ route('admin.timeline.create') }}" class="btn btn-success">Add Data</a>
        </x-slot>
        <x-slot:thead>
            <tr>
                <th class="text-center"></th>
                <th class="text-left">Title</th>
                <th class="text-left">Start</th>
                <th class="text-left">Finish</th>
                <th class="text-left">Description</th>
                <th class="text-left">Phase</th>
                <th class="text-left">Is Current</th>
            </tr>
        </x-slot>
        <x-slot:tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="text-center">{{ number_format($loop->iteration) }}</td>
                    <td class="text-left">{{ $item->title ?? '-' }}</td>
                    <td class="text-left">{{ $item->date_start->format('Y-m-d') ?? '-' }}</td>
                    <td class="text-left">{{ $item->date_end->format('Y-m-d') ?? '-' }}</td>
                    <td class="text-left">{{ $item->description ?? '-' }}</td>
                    <td class="text-left">{{ Str::ucfirst($item->phase_key) }}</td>
                    <td class="text-center">
                        @if ($item->status_data == 'Active')
                            <span class="badge badge-success badge-custom">Active</span>
                        @else
                            <span class="badge badge-danger badge-custom">Inactive</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </x-slot>
        <x-slot:footer>
            <small class="text-danger">
                <div class="text-right">Data Access {{ now()->format('Y/m/d - H:i') }} WIB</div>
            </small>
        </x-slot>
    </x-modules.index-table>

@endsection

{{-- push scripts --}}
@include('components.datatables.scripts')
