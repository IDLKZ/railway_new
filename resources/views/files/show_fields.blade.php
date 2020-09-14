<!-- Document Id Field -->
<div class="form-group">
    {!! Form::label('document_id', 'Документ:') !!}
    <p>{{ $file->document_id }}</p>
</div>

<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Файлы:') !!}
    <p>{{ $file->img }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Тип:') !!}
    <p>{{ $file->type }}</p>
</div>

