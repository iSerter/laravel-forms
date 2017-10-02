<div>
    <label for="{{$e->name()}}">{{$e->label()}}</label>
    <input type="text" name="{{$e->name()}}" value="{{$e->value()}}"{!! $e->attributes() !!}>
</div>