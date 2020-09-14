<!-- Document Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('document_id', 'Наименование документа:') !!}
    {!! Form::select('document_id',\App\Models\Document::pluck("title","id") ,null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Тип файла:') !!}
    {!! Form::select('type',["pdf"=>"pdf","word"=>"word"] ,null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Файл:') !!}
    {!! Form::file('img', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('files.index') }}" class="btn btn-default">Отмена</a>
</div>
