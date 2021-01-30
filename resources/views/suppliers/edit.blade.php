@extends('layouts.adminlte.master', ['noBackButton' => true])
@section('top-bar-header', 'Supplier Edit')

@section('content')
{!! Form::model($resource, ['url' => route('suppliers.update', $resource->id), 'method' => 'PUT']) !!}
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
{!! Form::close() !!}
@endsection

@push('scripts')
    @include('suppliers.js')
@endpush
