<div class="row">
    <div class="col-sm-12">
        <div class="card card-outline card-info">

            <div class="card-body">
                {{ $slot }}
            </div>
            <div class="card-footer">
                <div class="text-right text-dark">
                    <span class="required">Required fields. Please fill in the data correctly</span>
                </div>
            </div>

        </div>
        {{-- card-info --}}
    </div>
    {{-- col --}}
</div>
{{-- row --}}
