<div class="form-group">
    <label for="{{$e->name()}}">{{$e->label()}}</label>
    <input type="text" name="{{$e->name()}}" value="{{$e->value()}}" class="form-control"{!! $e->attributes() !!}>
</div>