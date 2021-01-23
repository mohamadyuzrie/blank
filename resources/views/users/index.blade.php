@extends('layouts.adminlte.master', ['noBackButton' => true])

@section('content')
<a href="{{ route('users.create') }}" class="btn btn-primary px-3">
    <i class="fas fa-plus"></i>
    Create
</a>
<div class="card mt-3">
    <div class="card-body">
        <table class="table table-bordered" id="resources-table" data-route="{{ route('users.datatable.manual') }}">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push('scripts')
    @include('users.js')
@endpush