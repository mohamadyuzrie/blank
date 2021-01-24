@extends('layouts.adminlte.master', ['noBackButton' => true])
@section('top-bar-header', 'Supplier Create')

@section('content')
<form action="{{ route('suppliers.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            @include('suppliers.content')

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </div>
</form>
@endsection

@push('scripts')
@endpush
