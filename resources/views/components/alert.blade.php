<div>
@if(session()->has('message'))
        {{$slot}}
                <div class="alert alert-success">{{session()->get('message')}}</div>
                @elseif(session()->has('error'))
        {{$slot}}
                <div class="alert alert-danger">{{session()->get('error')}}</div>
                @endif<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>