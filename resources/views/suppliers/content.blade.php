<div class="form-group">
    <label for="code">Code</label>
    <input type="text" name="code" class="form-control" value="{{ isset($resource) ? $resource->code : "" }}">
</div>

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" value="{{ isset($resource) ? $resource->name : "" }}">
</div>

<div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" class="form-control" value="{{ isset($resource) ? $resource->address : "" }}">
</div>

<div class="form-group">
    <label for="tel_no">Tel No</label>
    <input type="text" name="tel_no" class="form-control" value="{{ isset($resource) ? $resource->tel_no : "" }}">
</div>

<div class="form-group">
    <label for="fax_no">Fax No</label>
    <input type="text" name="fax_no" class="form-control" value="{{ isset($resource) ? $resource->fax_no : "" }}">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control" value="{{ isset($resource) ? $resource->email : "" }}">
</div>

<div class="form-group">
    <label for="bank_account">Bank Account</label>
    <input type="text" name="bank_account" class="form-control" value="{{ isset($resource) ? $resource->bank_account : "" }}">
</div>

<div class="form-group">
    <label for="bank_type">Bank Type</label>
    <input type="text" name="bank_type" class="form-control" value="{{ isset($resource) ? $resource->bank_type : "" }}">
</div>