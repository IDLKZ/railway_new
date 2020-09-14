<div class="table-responsive">
    <table class="table" id="managers-table">
        <thead>
            <tr>
                <th>ФИО</th>
        <th>Должность</th>
        <th>Описание</th>
        <th>Фото</th>
                <th colspan="3">Действия</th>
            </tr>
        </thead>
        <tbody>
        @foreach($managers as $manager)
            <tr>
                <td>{{ $manager->name }}</td>
            <td>{{ $manager->role }}</td>
            <td>{{ $manager->description }}</td>
            <td> <img src="{{ $manager->img }}" height="40px" width="40px"/></td>
                <td>
                    {!! Form::open(['route' => ['managers.destroy', $manager->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('managers.show', [$manager->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('managers.edit', [$manager->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Вы уверены?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
