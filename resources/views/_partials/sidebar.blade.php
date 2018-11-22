<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Security</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> Authorization </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('permission-groups.index') }}">Permission Groups</a></li>
                        <li><a href="{{ route('permissions.index') }}">Permissions</a></li>
                        <li><a href="{{ route('roles.index') }}">Roles</a></li>
                    </ul>
                </li>

                <li class="text-muted menu-title">Settings</li>
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-user"></i> <span> Lookups </span></a>
                </li>
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-settings"></i> <span> Site Modes </span></a>
                </li>

                <li class="text-muted menu-title">Resources</li>
                <li class="has_sub">
                    <a href="{{ route('users.index') }}" class="waves-effect"><i class="ti-user"></i> <span> Users </span></a>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>