@if($e->hasType())
    <button type="{{$e->type()}}">{{$e->label()}}</button>
@else
    <button>{{$e->label()}}</button>
@endif
