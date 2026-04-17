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

    <x-modules.callout type="info" color="info" icon="fa-chart-simple">
        Statistical Information of ASEAN HUB 2026
    </x-modules.callout>
@endsection
