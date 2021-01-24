@extends('layouts.adminlte.master', ['noBackButton' => true])
@section('top-bar-header', 'Supplier Edit')

@section('content')

<form action="{{ route('suppliers.update', $resource->id) }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
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
