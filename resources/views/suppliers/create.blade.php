@extends('layouts.adminlte.master', ['noBackButton' => true])
@section('top-bar-header', 'Supplier Create')

@section('content')
{!! Form::open(['url' => route('suppliers.store'), 'method' => 'POST']) !!}
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
