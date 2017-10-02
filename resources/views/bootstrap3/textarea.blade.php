<div class="form-group">
    <label for="{{$e->name()}}">{{$e->label()}}</label>
    <textarea name="{{$e->name()}}" class="form-control"{!! $e->attributes() !!}>{{$e->value()}}</textarea>
</div>