<div class="table-responsive">
    <table class="table" id="backgrounds-table">
        <thead>
            <tr>
                <th>Изображение</th>
                <th colspan="3">Действия</th>
            </tr>
        </thead>
        <tbody>
        @foreach($backgrounds as $background)
            <tr>
                <td> <img src="{{ $background->img }}" height="50px" width="50px"/></td>
                <td>
                    {!! Form::open(['route' => ['backgrounds.destroy', $background->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('backgrounds.show', [$background->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('backgrounds.edit', [$background->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Вы уверены?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
