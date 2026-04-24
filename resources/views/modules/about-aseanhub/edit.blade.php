@extends('layouts.backend')

@section('nav-about-aseanhub', 'active')
@section('content')

    {{-- HEADER --}}
    <x-modules.callout type="info">
        Edit About ASEAN Hub
    </x-modules.callout>

    <x-modules.index-form>

        <form action="{{ route('admin.about-aseanhub.update', $data->id_about_aseanhub) }}" method="post" enctype="multipart/form-data" class="confirm-submit">

            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-sm-12">
                    <x-modules.form-input
                        label="Title"
                        name="title"
                        type="text"
                        :value='$data->title ?? null'
                        :required=true />
                </div>
                <div class="col-sm-12">
                    <x-modules.form-textarea
                        label="Description"
                        name="description"
                        rows=15
                        :value='$data->description ?? null'
                        :required=true />
                </div>
                <div class="col-sm-12">
                    <x-modules.form-input
                        label="Image"
                        name="image"
                        type="file"
                        :value='$data->image ?? null'
                        :required=false />
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <a href="{{ route('admin.about-aseanhub.index') }}" class="btn btn-block btn-secondary">
                        <i class="fas fa-undo mr-2"></i>Back
                    </a>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-block btn-warning">
                        <i class="fas fa-edit mr-2"></i>Edit
                    </button>
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}
        </form>
        {{-- form --}}

    </x-modules.index-form>
@endsection
@include('components.sweetalert.scripts-edit')
