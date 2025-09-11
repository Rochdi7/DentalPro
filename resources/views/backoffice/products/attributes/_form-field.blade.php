<div class="mb-3">
    <label class="form-label">{{ $attribute->name }}</label>

    @switch($attribute->type)
        @case('text')
            <input type="text" name="attributes[{{ $attribute->id }}]" class="form-control" value="{{ $value }}">
            @break

        @case('number')
            <input type="number" name="attributes[{{ $attribute->id }}]" class="form-control" value="{{ $value }}">
            @break

        @case('boolean')
            <select name="attributes[{{ $attribute->id }}]" class="form-select">
                <option value="1" @selected($value == 1)>Oui</option>
                <option value="0" @selected($value == 0)>Non</option>
            </select>
            @break

        @case('select')
            <select name="attributes[{{ $attribute->id }}]" class="form-select">
                <option value="">-- Choisir --</option>
                @foreach($attribute->options as $option)
                    <option value="{{ $option->id }}" @selected($value == $option->id)>{{ $option->value }}</option>
                @endforeach
            </select>
            @break

        @case('multiselect')
            <select name="attributes[{{ $attribute->id }}][]" class="form-select" multiple>
                @foreach($attribute->options as $option)
                    <option value="{{ $option->id }}" @selected(is_array($value) && in_array($option->id, $value))>{{ $option->value }}</option>
                @endforeach
            </select>
            @break
    @endswitch
</div>
