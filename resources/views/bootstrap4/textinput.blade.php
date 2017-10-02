<div class="form-group">
    @if($e->label())<label for="{{$e->name()}}">{{$e->label()}}</label>@endif
    <input type="text" name="{{$e->name()}}" value="{{$e->value()}}" class="form-control"{!! $e->attributes() !!}>
</div>