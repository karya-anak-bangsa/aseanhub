{{-- ============================= --}}
{{-- KATEGORI & PUBLISH --}}
{{-- ============================= --}}
<div class="row">

    <div class="col-sm-12">
        <span><strong>CATEGORIES & PUBLISH</strong></span>
        <hr>
    </div>
    <div class="col-sm-12">
        <x-modules.form-input-text
            label="Author's Name"
            name="author_name"
            :value="$data->author_name ?? null"
            :required=true />
    </div>

</div>

{{-- <div class="row">
    <div class="col-sm-12">
        <x-modules.form-input-text
            label="News Headline (EN)"
            name="title_en"
            :value="$data->title_en ?? null"
            :required=true />

        <x-modules.form-input-text
            label="News Headline (ID)"
            name="title_id"
            :value="$data->title_id ?? null"
            :required=true />
    </div>
</div> --}}
