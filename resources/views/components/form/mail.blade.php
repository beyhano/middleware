<div class="form-group">
    <label>{{$isim}}</label>
    {{ Form::email($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>
