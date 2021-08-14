@extends('admin.layout.app')

@section('title')
    All Users
@endsection
@section('content')
    <x-data-table  :dataTable="$dataTable" title="index users" />
@endsection

