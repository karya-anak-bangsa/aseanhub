@extends('layouts.backend')

{{-- push styles --}}
@include('components.datatables.styles')

{{-- content --}}
@section('nav-voters', 'active')
@section('content')

    {{-- - 1. Judul --}}
    <x-modules.callout>
        Statistical Information of Data Voters
    </x-modules.callout>

    <div class="row">
        <x-modules.small-box
            color="bg-info"
            icon="fa-solid fa-user-group"
            title="Total Voters"
            :value="$stats['total']" />

        <x-modules.small-box
            color="bg-success"
            icon="fas fa-file-circle-check"
            title="Already Voted"
            :value="$stats['has_voted']" />

        <x-modules.small-box
            color="bg-warning"
            icon="fas fa-chart-simple"
            title="Percentage of Votes"
            :value="$stats['percentage'] . '%'" />

        <x-modules.small-box
            color="bg-danger"
            icon="fas fa-file-circle-xmark"
            title="Not Yet Voted"
            :value="$stats['not_voted']" />
    </div>

    {{-- 2. Index Blade --}}
    <x-modules.index-table>

        <x-slot:thead>
            <tr>
                <th class="text-center"></th>
                <th class="text-left">Email</th>
                <th class="text-left">Full Name</th>
                <th class="text-left">Country</th>
                <th class="text-center">Has Voted</th>
                <th class="text-center text-nowrap">Action</th>
            </tr>
        </x-slot>
        <x-slot:tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="text-center">{{ number_format($loop->iteration) }}</td>
                    <td class="text-left">{{ $item->email ?? '-' }}</td>
                    <td class="text-left">{{ $item->voters_name ?? '-' }}</td>
                    <td class="text-left">{{ $item->voters_country ?? '-' }}</td>
                    <td class="text-center">
                        <span class="badge badge-custom {{ $item->has_voted ? 'badge-success' : 'badge-danger' }}">
                            {{ $item->has_voted ? 'Yes' : 'No' }}
                        </span>
                    </td>
                    <td class="text-center text-nowrap">
                        <a href="{{ route('admin.voters.show', $item->id_voters) }}" class="btn btn-sm btn-info">
                            <i class="fa-solid fa-eye"></i>
                        </a>
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
