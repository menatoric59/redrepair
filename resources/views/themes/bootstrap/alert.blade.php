@foreach ($messages as $msg)
    <div class="alert alert-block alert-{{ $msg['type'] }} fade in">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>
            <b>
                <i class="fa fa-{{ array_search($msg['type'],['check-circle'=>'success','warning'=>'warning','exclamation-triangle'=>'danger','info'=>'info','info-circle'=>'primary']) }}"></i>
            </b>
            {!! $msg['message']  !!}
        </p>
        
        @if (!empty ($msg['details']))
            <p>{{ $msg['details'] }}</p>
        @endif

        {!! $msg['html'] !!}
        
        @if (!empty ($msg['items']))
            <ul>
              @foreach ($msg['items'] as $item)
                <li>{{ $item }}</li>
              @endforeach
            </ul>
        @endif
        
        @if ( ! empty ($msg['buttons']))
            <p>
                @foreach ($msg['buttons'] as $btn)
                    <a class="btn btn-{{ $btn['class'] }}" href="{{ $btn['url'] }}">{{ $btn['text'] }}</a>
                @endforeach
            </p>
        @endif
    </div>
@endforeach