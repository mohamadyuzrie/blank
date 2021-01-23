@extends('layouts.adminlte.master', ['noBackButton' => true])

@section('content')
<form action="{{ route('users.store') }}" method="post">
    @include('users.content')
</form>
@endsection