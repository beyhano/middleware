<div class="form-group">
    <label>{{$isim}}</label>
        {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>
