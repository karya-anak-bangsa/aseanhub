@extends('layouts.backend')

@section('nav-news', 'active')
@section('content')

    <x-modules.callout type="info">
        Edit News Data
    </x-modules.callout>

    <x-modules.index-form>
        @include('modules.news._form')
    </x-modules.index-form>

@endsection
@include('components.sweetalert.scripts-edit')
