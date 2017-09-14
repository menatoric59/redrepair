<div id="field_{{ $id }}"{!! Html::classes(['form-group', 'has-error' => $hasErrors]) !!}>
    <label for="{{ $id }}" class="control-label">
        {{ $label }}
    </label>

    @if ($required)
        <span class="red-text text-darken-4">*</span>
    @endif

    <div class="controls">
        {!! $input !!}
        @foreach ($errors as $error)
            <p class="help-block">{{ $error }}</p>
        @endforeach
    </div>
</div>
