@if(in_array(auth()->user()->level, ['Admin']))
    <li>
        <a @if(Route::current()->action['as'] == 'todos.index') class='active-menu'
           @endif href="{{ route('todos.index') }}"><i class="fa fa-table"></i>Todos</a>
    </li>
@endif

@if(in_array(auth()->user()->level, ['Admin']))
    <li>
        <a @if(Route::current()->action['as'] == 'activity-groups.index') class='active-menu'
           @endif href="{{ route('activity-groups.index') }}"><i class="fa fa-table"></i>Activity Groups</a>
    </li>
@endif
