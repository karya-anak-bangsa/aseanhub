@extends('layouts.backend')

@section('nav-judges', 'active')
@section('content')

    {{-- HEADER --}}
    <x-modules.callout type="info">
        Edit Data Judges
    </x-modules.callout>

    <x-modules.index-form>
        <form action="{{ route('admin.judges.update', $data->id_judges) }}" method="post" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            @include('modules.judges._form')

            <div class="row">
                <div class="col-sm-2">
                    <a href="{{ route('admin.judges.index') }}" class="btn btn-block btn-secondary">
                        <i class="fas fa-undo mr-2"></i>Back
                    </a>
                </div>
                <div class="col-sm-2">
                    {{-- <button type="submit" class="btn btn-block btn-warning"> --}}
                    <button type="submit" class="btn btn-block btn-warning"
                        data-confirm data-icon="warning"
                        data-title="Confirmation"
                        data-text="Are you sure want to update this data?"
                        data-confirm-text="Edit"
                        data-confirm-color="#ffc107">
                        <i class="fas fa-edit mr-2"></i>Edit
                    </button>
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}

        </form>
    </x-modules.index-form>

@endsection
{{-- @include('components.sweetalert.scripts') --}}
