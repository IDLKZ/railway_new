<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'ФИО:') !!}
    <p>{{ $manager->name }}</p>
</div>

<!-- Role Field -->
<div class="form-group">
    {!! Form::label('role', 'Должность:') !!}
    <p>{{ $manager->role }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Описание:') !!}
    <p>{{ $manager->description }}</p>
</div>

<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Фото:') !!}
    <img src="{{ $manager->img }}"/>
</div>

