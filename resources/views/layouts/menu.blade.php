<li class="{{ Request::is('managers*') ? 'active' : '' }}">
    <a href="{{ route('managers.index') }}"><i class="fa fa-users"></i><span>Руководители</span></a>
</li>

<li class="{{ Request::is('documents*') ? 'active' : '' }}">
    <a href="{{ route('documents.index') }}"><i class="fa  fa-file-text-o"></i><span>Документы</span></a>
</li>

<li class="{{ Request::is('files*') ? 'active' : '' }}">
    <a href="{{ route('files.index') }}"><i class="fa fa-book"></i><span>Файлы</span></a>
</li>

<li class="{{ Request::is('headers*') ? 'active' : '' }}">
    <a href="{{ route('headers.index') }}"><i class="fa fa-header"></i><span>Заголовки</span></a>
</li>

<li class="{{ Request::is('backgrounds*') ? 'active' : '' }}">
    <a href="{{ route('backgrounds.index') }}"><i class="fa  fa-file-image-o"></i><span>Изображение</span></a>
</li>

<li class="{{ Request::is('contacts*') ? 'active' : '' }}">
    <a href="{{ route('contacts.index') }}"><i class="fa fa-envelope"></i><span>Контакты</span></a>
</li>
<hr/>
<li >
    <a href="/logout"><i class="fa fa-sign-out"></i><span>Выход</span></a>
</li>

