@extends('layouts.adminlte.master', ['noBackButton' => true])
@section('top-bar-header', 'Supplier Edit')

@section('content')
<div class="form-group row">
    <div class="col-3">
        <a href="{{ route('suppliers.print', $resource->id) }}" data-method="post" target="_blank" class="btn btn-primary px-5">
            Print
        </a>
    </div>
    <div class="col-3"></div>
    <div class="col-3"></div>
    <div class="col-3"></div>
</div>
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
