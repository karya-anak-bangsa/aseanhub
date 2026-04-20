@extends('layouts.backend')
@section('nav-dashboard', 'active')
@section('content')

    <x-modules.dashboard-banner>
        Welcome to ASEAN Hub International Design Competition by Provincial Government of DKI Jakarta
    </x-modules.dashboard-banner>

    <x-modules.dashboard-profile
        title="Information about Your Profile"
        collapse="true"
        :fields="[
            'Team Name' => $participants->team_name,
            'Email Account' => $participants->email,
        ]" />

    {{-- @if (empty($participants->team_name))
        <div class="alert alert-warning">
            <strong>Incomplete Profile!</strong><br>
            Please complete your profile information to continue in the competition.
        </div>
    @else
    @endif --}}
@endsection
