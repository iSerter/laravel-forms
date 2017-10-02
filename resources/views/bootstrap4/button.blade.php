@if($e->hasType())
    <button type="{{$e->type()}}" class="btn btn-primary">{{$e->label()}}</button>
@else
    <button>{{$e->label()}}</button>
@endif
