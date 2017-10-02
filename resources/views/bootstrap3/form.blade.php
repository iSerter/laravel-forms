@if($form->hasAttributes())
    <form {!! $form->attributes() !!}>
    @else
<form>
    @endif
    {{csrf_field()}}
    @foreach($form->getElements() as $e)
        {!! $e !!}
    @endforeach
</form>