<div class="form-group">

    <label for="{{ $name }}" class="{{ $required ? 'required' : '' }}">
        {{ $label }}
    </label>

    <select class="custom-select form-control border-dark" name="{{ $name }}" id="{{ $name }}">
        <option value="" disabled selected></option>
        @foreach ($options as $option)
            <option value="{{ $option }}" {{ old($name, $value) == $option ? 'selected' : '' }}>
                {{ $option }}
            </option>
        @endforeach
    </select>

    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>
