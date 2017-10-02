<div>
    <label>{{$e->label()}}</label>
    <select name="{{$e->name()}}"{!! $e->attributes() !!}>
        @foreach($e->options() as $val => $label)
            <option value="{{$val}}">{{$label}}</option>
        @endforeach
    </select>
</div>