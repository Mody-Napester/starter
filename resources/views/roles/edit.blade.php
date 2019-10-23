<form method="post" action="{{ route('roles.update', $resource->uuid) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required placeholder="Name" value="{{ $resource->name }}"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Icon</label>
                <input type="text" name="icon" class="form-control" required placeholder="Icon" value="{{ $resource->icon }}"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Class</label>
                <input type="text" name="class" class="form-control" required placeholder="Class" value="{{ $resource->class }}"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Color</label>
                <input type="text" name="color" class="form-control" required placeholder="Color" value="{{ $resource->color }}"/>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Permission Groups
            <span data-select2-target="permissions-groups_update" class="select-all text-success btn-link">(Select All)</span>
            <span data-select2-target="permissions-groups_update" class="de-select-all text-success btn-link">(Deselect All)</span>
        </label>
        <select name="permissions-groups[]" id="permissions-groups_update" class="select2 select2-multiple" multiple="" data-placeholder="Choose ..." tabindex="-1" aria-hidden="true" required>
            @foreach($permissions as $permission)
                @foreach($permission->permission_groups as $permission_group)
                    <option @if(in_array($permission->id, $resource->permissions->pluck('id')->toArray()) &&
                     in_array($permission_group->id, $resource->permissionGroups->pluck('id')->toArray())) selected @endif
                    value="{{ $permission_group->uuid }}.{{ $permission->uuid }}">{{ $permission_group->name }}.{{ $permission->name }}</option>
                @endforeach
            @endforeach
        </select>
    </div>

    <div class="form-group m-b-0">
        <div>
            <button type="submit" class="btn btn-success waves-effect waves-light">
                Update
            </button>
        </div>
    </div>
</form>