<div class="card">
    <div class="card-body">
        @csrf
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ isset($resource) ? $resource->email : null }}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group mb-0">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ isset($resource) ? $resource->name : null }}">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary px-3">
            Submit
        </button>
    </div>
</div>
