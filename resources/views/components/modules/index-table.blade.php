<div class="row">
    <div class="col-sm-12">
        <div class="card card-outline card-info">

            @isset($header)
                <div class="card-header">
                    {{ $header }}
                </div>
            @endisset

            <div class="card-body">
                <table class="table table-bordered table-hover datatables">
                    <thead>{{ $thead }}</thead>
                    <tbody>{{ $tbody }}</tbody>
                </table>
            </div>

            @isset($footer)
                <div class="card-footer">
                    {{ $footer }}
                </div>
            @endisset

        </div>
        {{-- card-info --}}
    </div>
    {{-- col --}}
</div>
{{-- row --}}
