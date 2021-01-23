@extends('layouts.adminlte.master', ['noBackButton' => true])

@section('top-bar-header', 'Header')

@section('content')
<div class="card">
    <div class="card-body">
        <label for="search_name">Search Name</label>
        <input type="text" placeholder="Search" name="search_name" id="search-name">
    </div>

    <button type="button" class="btn btn-primary btn-search px-3" data-route="{{ route('users.list') }}">
        <i class="fas fa-search pr-2"></i>
        Search
    </button>
</div>

<div class="card">
    <div class="card-body">
        <h5>Names</h5>
        <ul class="names-list">
            <li class="name-template d-none"></li>
        </ul>
    </div>
    <div class="card-footer">
        @include('pretty-button')
    </div>
</div>
@endsection

@push('scripts')
    @include('home-js')
@endpush