@extends('layout.main')
@section('page', 'العملاء')
@php
    $page = 'add_customers';
    $sub_page = 'customers';
@endphp
@section('sub-header')
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-8">
                    <ol class="breadcrumb text-muted fs-6 fw-bold bg-white">
                        <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 font-weight-boldest">العملاء</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label"> العملاء [<span class="text-danger pt-2">{{ $items->count() }}</span>] </h3>
            </div>
            <div class="card-toolbar">
            </div>
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-checkable datatable text-center">
                <thead>
                <tr>
                    <th class='text-center'>#</th>
                    <th class='text-center'>اسم العميل  </th>
                    <th class='text-center'>البريد الألكترونى </th>
                    <th class='text-center'>رقم الجوال </th>
                    <th class='text-center'> تاريخ الأنضمام </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($items as $index=>$item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ date('Y-m-d', strtotime($item->created_at)) }} </td>
                    </tr>
                @endforeach
                <tbody>
            </table>

        </div>
    </div>
@endsection
