<div class="form-group">
    <label>{{$e->label()}}</label>
    <select class="form-control" name="{{$e->name()}}"{!! $e->attributes() !!}>
        @foreach($e->options() as $val => $label)
            <option value="{{$val}}">{{$label}}</option>
        @endforeach
    </select>
</div>