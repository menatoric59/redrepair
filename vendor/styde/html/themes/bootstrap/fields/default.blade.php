<div id="field_{{ $id }}"{!! Html::classes(['form-group-sm', 'has-error' => $hasErrors]) !!}>
    <label for="{{ $id }}" class="col-md-3 control-label">
        {{ $label }}
        @if ($required)
            <span class="text-danger">*</span>
        @endif
    </label>

    
        
    <div class="controls col-md-7" >
        {!! $input !!}
        @foreach ($errors as $error)
            <p class="help-block">{{ $error }}</p>
        @endforeach
    </div>
</div>
