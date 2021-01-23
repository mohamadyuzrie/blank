@extends('layouts.adminlte.master', ['noBackButton' => true])

@section('content')
<form action="{{ route('users.update', $resource->id) }}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('users.content')
</form>
@endsection
