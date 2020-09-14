<!-- Header Field -->
<div class="form-group col-sm-6">
    {!! Form::label('header', 'Заголовок:') !!}
    {!! Form::text('header', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Subheader Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subheader', 'Подзаголовок:') !!}
    {!! Form::text('subheader', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('headers.index') }}" class="btn btn-default">Отмена</a>
</div>
