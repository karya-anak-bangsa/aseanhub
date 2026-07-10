@extends('layouts.backend')

{{-- content --}}
@section('nav-news', 'active')
@section('content')

    <x-modules.callout type="info">
        Add News Data
    </x-modules.callout>

    <x-modules.index-form>

        @include('modules.news._form')

        <div class="row">
            <div class="col-sm-2">
                <a href="{{ route('admin.news.index') }}" class="btn btn-block btn-secondary">
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

    </x-modules.index-form>

@endsection
@include('components.sweetalert.scripts-create')
