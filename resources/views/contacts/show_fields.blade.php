<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Телефон:') !!}
    <p>{{ $contact->phone }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Адрес:') !!}
    <p>{{ $contact->address }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $contact->email }}</p>
</div>

