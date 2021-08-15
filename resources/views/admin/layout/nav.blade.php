<li class="text-muted menu-title">القائمة الرئيسية</li>

<li>
    <a href="{{route('admin.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span>Main Page </span>
    </a>
</li>

@if(auth()->user()->can('role-list') ||auth()->user()->can('role-create'))
    <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span>Roles and Permissions </span>
            <span class="menu-arrow"></span></a>
        <ul class="list-unstyled">
           @can('role-list')
                <li><a href="{{route('admin.roles.index')}}">All Roles</a></li>
            @endcan
            @can('role-create')
                <li><a href="{{route('admin.roles.create')}}">Add New Role</a></li>
            @endcan
        </ul>
    </li>
@endif

@if(auth()->user()->can('users-list')|| auth()->user()->can('users-create'))
    <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i
                class="zmdi zmdi-collection-text"></i><span> Users </span> </a>
        <ul class="list-unstyled">
            @can('users-list')
                <li><a href="{{route('admin.users.index')}}">All Users</a></li>
            @endcan
            @can('users-create')
                <li><a href="{{route('admin.users.create')}}">Add New User</a></li>
                @endcan

        </ul>
    </li>
@endif

@if(auth()->user()->can('post-list')||auth()->user()->can('post-list'))
    <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i
                class="zmdi zmdi-collection-text"></i><span> Posts </span> </a>
        <ul class="list-unstyled">
            @can('post-list')
                <li><a href="{{route('admin.posts.index')}}">All Posts</a></li>
            @endcan
            @can('post-create')
                <li><a href="{{route('admin.posts.create')}}">Add New Post</a></li>
            @endcan
        </ul>
    </li>
@endif
