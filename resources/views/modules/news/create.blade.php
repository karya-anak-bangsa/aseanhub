@extends('layouts.backend')

{{-- content --}}
@section('nav-news', 'active')
@section('content')

    <x-modules.callout type="info">
        Add News Data
    </x-modules.callout>

    <x-modules.index-form>
        <form action="{{-- route('admin.judges.store') --}}" method="post" enctype="multipart/form-data" class="confirm-submit">

            @csrf

            <x-modules.form-input-text
                label="Title (EN)"
                name="title_en"
                :value="old('title_en', $news->title_en ?? '')" />

            <x-modules.form-input-text
                label="Title (ID)"
                name="title_en"
                :value="old('title_en', $news->title_en ?? '')" />

            <div class="row">
                <div class="col-sm-2">
                    <a href="{{-- route('admin.news.index') --}}" class="btn btn-block btn-secondary">
                        <i class="fas fa-undo mr-2"></i>Back
                    </a>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-block btn-success">
                        <i class="fas fa-save mr-2"></i>Save
                    </button>
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}

        </form>
    </x-modules.index-form>
@endsection
