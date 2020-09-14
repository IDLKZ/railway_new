<div class="table-responsive">
    <table class="table" id="headers-table">
        <thead>
            <tr>
                <th>Заголовок</th>
        <th>Подзаголовок</th>
                <th colspan="3">Действие</th>
            </tr>
        </thead>
        <tbody>
        @foreach($headers as $header)
            <tr>
                <td>{{ $header->header }}</td>
            <td>{{ $header->subheader }}</td>
                <td>
                    {!! Form::open(['route' => ['headers.destroy', $header->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('headers.show', [$header->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('headers.edit', [$header->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Вы уверены?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
