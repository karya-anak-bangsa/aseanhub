@extends('layouts.backend')

{{-- push styles --}}
@include('components.datatables.styles')

{{-- content --}}
@section('nav-participants', 'active')
@section('content')

    {{-- - 1. Judul --}}
    <x-modules.callout>
        Statistical Information of Data Participants
    </x-modules.callout>

    <div class="row">
        <x-modules.small-box
            color="bg-info"
            icon="fas fa-user-group"
            title="Total Participants"
            :value="$stats['total_participants']" />
        <x-modules.small-box
            color="bg-success"
            icon="fas fa-circle-check"
            title="Verified"
            :value="$stats['verified']" />
        <x-modules.small-box
            color="bg-warning"
            icon="fas fa-hourglass-half"
            title="Pending"
            :value="$stats['pending']" />
        <x-modules.small-box
            color="bg-danger"
            icon="fas fa-globe"
            title="Rejected"
            :value="$stats['rejected']" />
    </div>

    {{-- 2. Index Blade --}}
    <x-modules.index-table>
        <x-slot:header>
            <a href="{{ route('admin.participants.create') }}" class="btn btn-success">Add Data</a>
        </x-slot>
        <x-slot:thead>
            <tr>
                <th class="text-center"></th>
                <th class="text-left">Team Name</th>
                <th class="text-left">Team Leader</th>
                <th class="text-left">Country</th>
                <th class="text-center">Registration</th>
                <th class="text-center text-nowrap">Action</th>
            </tr>
        </x-slot>
        <x-slot:tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="text-center">{{ number_format($loop->iteration) }}</td>
                    <td class="text-left">{{ $item->team_name ?? '-' }}</td>
                    <td class="text-left">{{ $item->participants_name_1 ?? '-' }}</td>
                    <td class="text-left">{{ $item->participants_country ?? '-' }}</td>
                    <td class="text-center">{!! $item->badge_registration !!}</td>
                    <td class="text-center text-nowrap">
                        <a href="{{ route('admin.participants.show', $item->id_participants) }}" class="btn btn-sm btn-info">
                            <i class="fa-solid fa-eye"></i></a>
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
