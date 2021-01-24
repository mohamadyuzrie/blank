@extends('layouts.adminlte.master', ['noBackButton' => true])
@section('top-bar-header', 'Supplier Index')

@section('content')
<a href="{{ route('suppliers.create') }}" class="btn btn-primary">
    Create
</a>

<div class="mt-3"></div>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered" id="resources-table">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Tel No.</th>
                    <th>Fax No.</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resources as $resource)
                    <tr>
                        <td>{{ $resource->code }}</td>
                        <td>{{ $resource->name }}</td>
                        <td>{{ $resource->address }}</td>
                        <td>{{ $resource->tel_no }}</td>
                        <td>{{ $resource->fax_no }}</td>
                        <td>{{ $resource->email }}</td>
                        <td>
                            <a href="{{ route('suppliers.edit', $resource->id) }}" class="btn btn-success">
                                Edit
                            </a>

                            <a href="{{ route('suppliers.destroy', $resource->id) }}" class="btn btn-danger"
                                data-method="Delete" data-confirm="Confirm delete this supplier? {{ $resource->name }}">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
    @include('suppliers.js')
@endpush
