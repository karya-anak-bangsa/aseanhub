@extends('layouts.backend')

{{-- content --}}
@section('nav-opening-speeches', 'active')
@section('content')

    {{-- - 1. Judul --}}
    <x-modules.callout type="info">
        Information of Opening Speeches
    </x-modules.callout>

    <x-modules.index-table>
        <x-slot:header>

        </x-slot>
        <x-slot:thead>
            <tr>
                <th width="5%" class="text-center"></th>
                <th width="10%" class="text-center">Photo</th>
                <th width="25%" class="text-left">Full Name</th>
                <th width="60%" class="text-left">Opening Speech</th>
            </tr>
        </x-slot>
        <x-slot:tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="text-center">{{ number_format($loop->iteration) }}</td>
                    <td class="text-center">
                        <img src="{{ $item->photo_url }}"
                            class="rounded-circle" width="100" height="100" loading="lazy"
                            alt="Foto {{ $item->name }}">
                    </td>
                    <td class="text-left">
                        <span class="text-bold">{{ $item->name ?? '-' }}</span><br>
                        <small class="text-muted">{{ $item->position ?? '-' }}</small>
                    </td>
                    <td class="text-left">{{ $item->message ?? '-' }}</td>
                    {{-- <td class="text-left">{{ Str::limit($item->message, 150) }}</td> --}}
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
