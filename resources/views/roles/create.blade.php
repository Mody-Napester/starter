<form method="post" action="{{ route('roles.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required placeholder="Name"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Icon</label>
                <input type="text" name="icon" class="form-control" required placeholder="Icon"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Class</label>
                <input type="text" name="class" class="form-control" required placeholder="Class"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Color</label>
                <input type="text" name="color" class="form-control" required placeholder="Color"/>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Permission <span data-select2-target="permissions-groups_create" class="select-all text-success btn-link">(Select All)</span></label>
        <select name="permissions-groups[]" id="permissions-groups_create" class="select2 select2-multiple" multiple="" data-placeholder="Choose ..." tabindex="-1" aria-hidden="true" required>
            @foreach($permissions as $permission)
                @foreach($permission->permission_groups as $permission_group)
                    <option value="{{ $permission_group->uuid }}.{{ $permission->uuid }}">{{ $permission_group->name }}.{{ $permission->name }}</option>
                @endforeach
            @endforeach
        </select>
    </div>

    <div class="form-group m-b-0">
        <div>
            <button type="submit" class="btn btn-primary waves-effect waves-light">
                Submit
            </button>
        </div>
    </div>
</form>