@extends('admin.layout.app')

@section('title')
    الصلاحيات
@endsection
@section('content')

    <div class="card-box">
        <p class="text-muted font-14 mb-3">
            <a href="{{ route('admin.roles.create') }}" class="btn btn-info">اضافة جديد</a>
        </p>

            <x-data-table  :dataTable="$dataTable" title="index Roles" />

    </div>


@endsection

