<div class="row d-flex align-items-stretch mb-5">

    <div class="col-sm-9">
        <div class="card card-outline card-info h-100">
            <div class="card-header">
                <span class="text-info"><i class="fa-solid fa-chart-simple mr-2"></i>{{ $title }}</span>
                @isset($collapse)
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                @endisset
            </div>
            <div class="card-body">
                <table class="table border-bottom">
                    @foreach ($fields as $label => $value)
                        <tr>
                            <td width="20%" class="text-bold">{{ $label ?? '-' }}</td>
                            <td width="80%" class="text-dark">{{ $value ?? '-' }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="card-footer">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="text-left text-dark">

                        @if (empty($participants->team_name))
                            <a href="{{-- route('participants.profile.create') --}}" class="btn btn-outline-danger">
                                <i class="fa-solid fa-user-pen mr-2"></i>Update Profile
                            </a>
                        @else
                            <a href="{{ url('/') }}" class="btn btn-outline-danger">
                                <i class="fa-solid fa-tv mr-2"></i>Back to Website ASEAN HUB
                            </a>
                        @endif

                    </div>
                    <div class="text-right text-muted">
                        <small class="text-danger">You logged on {{ now()->format('Y-m-d') }} - {{ now()->format('H:i') }} WIB</small>
                    </div>
                </div>
            </div>
            {{-- card-footer --}}
        </div>
        {{-- card-info --}}
    </div>
    {{-- col --}}

    <div class="col-sm-3">
        <div class="card card-outline card-info h-100">
            <div class="card-header">
                <span class="text-info">
                    <i class="fas fa-envelope mr-2"></i>Organized by
                </span>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/dki-jakarta.png') }}"
                        class="img-fluid" width="128" height="128" loading="lazy" alt="DKI Jakarta">
                </div>
            </div>
            <div class="card-footer">
                <div class="text-center text-bold">
                    <span>Provincial Government of <br> DKI Jakarta</span>
                </div>
            </div>
            {{-- card-footer --}}
        </div>
        {{-- card-info --}}
    </div>
    {{-- col --}}

</div>
{{-- row --}}
