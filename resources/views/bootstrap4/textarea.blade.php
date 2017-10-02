<div class="form-group">
    @if($e->label())<label for="{{$e->name()}}">{{$e->label()}}</label>@endif
    <textarea name="{{$e->name()}}" class="form-control"{!! $e->attributes() !!}>{{$e->value()}}</textarea>
</div>