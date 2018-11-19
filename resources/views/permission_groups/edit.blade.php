<form method="post" action="{{ route('permission-groups.update', $resource->uuid) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required placeholder="Name" value="{{ $resource->name }}"/>
    </div>

    <div class="form-group m-b-0">
        <div>
            <button type="submit" class="btn btn-success waves-effect waves-light">
                Submit
            </button>
        </div>
    </div>
</form>