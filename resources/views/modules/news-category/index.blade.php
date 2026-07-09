@extends('layouts.backend')

{{-- push styles --}}
@include('components.datatables.styles')
@include('components.notify.styles')

{{-- content --}}
@section('nav-news-category', 'active')
@section('content')

    {{-- flash notify --}}
    @include('components.notify.alert')

    <x-modules.callout type="info">Information of News Category</x-modules.callout>

    <x-modules.index-table>
        <x-slot:header></x-slot>
        <x-slot:thead>
            <tr>
                <th width="10%" class="text-center">No</th>
                <th width="90%" class="text-left">Category Name</th>
                {{-- <th class="text-center">Status Data</th> --}}
                {{-- <th class="text-center">Action</th> --}}
            </tr>
        </x-slot>
        <x-slot:tbody>
            @foreach ($newsCategories as $item)
                <tr>
                    <td width="10%" class="text-center">{{ $loop->iteration }}</td>
                    <td width="90%" class="text-left">{{ $item->category_name_en ?? '-' }}</td>
                    {{-- <td class="text-center">
                        @if ($item->status_data === 'Active')
                            <span class="badge badge-success badge-custom">
                                Active
                            </span>
                        @else
                            <span class="badge badge-danger badge-custom">
                                Not Active
                            </span>
                        @endif
                    </td> --}}
                    {{-- <td class="text-center">
                        <a href="#" class="btn btn-sm btn-info">
                            <i class="fa-solid fa-display"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-edit"></i>
                        </a>
                    </td> --}}
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
@include('components.notify.scripts')
