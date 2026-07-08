@php
    use App\Support\Formatter\Formatter;
    use App\Support\Formatter\Formatter\LocaleFormatter;
@endphp

@extends('layouts.backend')

{{-- push styles --}}
@include('components.datatables.styles')
@include('components.notify.styles')

{{-- content --}}
@section('nav-news', 'active')
@section('content')

    {{-- flash notify --}}
    @include('components.notify.alert')

    <x-modules.callout type="info">Information of News on ASEAN Hub</x-modules.callout>

    <x-modules.index-table>
        <x-slot name="header">
            <a href="#" class="btn btn-sm btn-success">
                <i class="fa-solid fa-circle-plus mr-2"></i><span>Add Data</span>
            </a>
        </x-slot>
        <x-slot name="thead">
            <tr>
                <th class="text-center">No</th>
                <th class="text-left">Title</th>
                <th class="text-left">Category</th>
                <th class="text-right">Views</th>
                <th class="text-right">Published At</th>
                <th class="text-center">Published Status</th>
                <th class="text-center">Status Data</th>
                <th class="text-center">Action</th>
            </tr>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($news as $item)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>

                    <td class="text-left">
                        {!! Formatter::locale($item->title_en, $item->title_id) !!}
                    </td>

                    <td class="text-left">
                        {!! Formatter::locale($item->newsCategory->category_name_en ?? '-', $item->newsCategory->category_name_id ?? '-') !!}
                    </td>
                    <td class="text-right">
                        {{ Formatter::number($item->views) }}
                    </td>
                    <td class="text-right">
                        {{ Formatter::date($item->published_date) }}
                        <br>
                        <small>{{ Formatter::time($item->published_date) }}</small>
                    </td>
                    <td class="text-center">
                        <span class="badge badge-{{ Formatter::badge($item->published_status) }} badge-custom">
                            {{ $item->published_status }}
                        </span>
                    </td>
                    <td class="text-center">
                        <span class="badge badge-{{ Formatter::badge($item->status_data) }} badge-custom">
                            {{ $item->status_data }}
                        </span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-info">
                            <i class="fa-solid fa-display"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
        <x-slot name="footer">
            <small class="text-danger">
                <div class="text-right">Data Access {{ now()->format('Y/m/d - H:i') }} WIB</div>
            </small>
        </x-slot>
    </x-modules.index-table>

@endsection

{{-- push scripts --}}
@include('components.datatables.scripts')
@include('components.notify.scripts')
