@extends('layouts.backend')

@section('nav-site-area', 'active')
@section('content')

    <x-modules.callout type="info">
        Edit Site Area on ASEAN Hub
    </x-modules.callout>

@endsection
@include('components.sweetalert.scripts-edit')
