<div class="form-group">
    @if($e->label())<label>{{$e->label()}}</label>@endif
    <select class="form-control" name="{{$e->name()}}"{!! $e->attributes() !!}>
        @foreach($e->options() as $val => $label)
            <option value="{{$val}}">{{$label}}</option>
        @endforeach
    </select>
</div>