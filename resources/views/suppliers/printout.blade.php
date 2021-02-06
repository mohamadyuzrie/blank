@extends('layouts.printout.master')
@section('title', "Supplier : {$resource->code}")

@section('content')
<table class="table table-bordered">
    <tr>
        <td colspan="4" class="text-center">
            <h1>{{ $resource->code }}</h1>
        </td>
    </tr>
    <tr>
        <td width="25%">{{ $resource->name }}</td>
        <td width="25%">{{ $resource->tel_no }}</td>
        <td width="25%">{{ $resource->bank }}</td>
        <td width="25%">{{ $resource->email }}</td>
    </tr>
    <tr>
        <td colspan="4">
            <strong>Address</strong>
            {!! $resource->address !!}
        </td>
    </tr>
</table>
@endsection