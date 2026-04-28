@extends('layouts.backend')

@section('nav-site-area', 'active')
@section('content')

    <x-modules.callout type="info">
        Edit Site Area on ASEAN Hub
    </x-modules.callout>

    <x-modules.index-form>

        <form action="{{ route('admin.site-area.update', $data->id_site_area) }}" method="post" enctype="multipart/form-data" class="confirm-submit">

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
                <div class="col-sm-6">
                    <x-modules.form-input
                        label="Image"
                        name="image"
                        type="file"
                        :required=false />
                </div>
                <div class="col-sm-6">
                    <x-modules.form-input
                        label="File Path"
                        name="file_path"
                        type="file"
                        :required=false />
                </div>
                <div class="col-sm-12">
                    <x-modules.form-input
                        label="Sort Order"
                        name="sort_order"
                        type="text"
                        :value='$data->sort_order ?? null'
                        :required=true />
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <a href="{{ route('admin.site-area.index') }}" class="btn btn-block btn-secondary">
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
