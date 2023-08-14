@extends('layout.main')
@section('page', 'الفواتير')
@php
    $page = 'all_invoices';
    $sub_page = 'invoices';
@endphp
@section('sub-header')
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-8">
                    <ol class="breadcrumb text-muted fs-6 fw-bold bg-white">
                        <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 font-weight-boldest">الفواتير</a></li>
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
                <h3 class="card-label"> الفواتير [<span class="text-danger pt-2">{{ $items->count() }}</span>] </h3>
            </div>
            <div class="card-toolbar">
            </div>
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-checkable datatable text-center">
                <thead>
                <tr>
                    <th class='text-center'>#</th>
                    <th class='text-center'>رقم الفاتورة </th>
                    <th class='text-center'>العميل  </th>
                    <th class='text-center'>المتجر  </th>
                    <th class='text-center'>المجموع </th>
                    <th class='text-center'>الضريبة </th>
                    <th class='text-center'>المجموع الكلى </th>
                    <th class='text-center'> التاريخ </th>
                    <th class='text-center'>@lang('common.Action')</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($items as $index=>$item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->number }}</td>
                        <td>{{ optional($item->customer)->name }}</td>
                        <td>{{ optional($item->store)->name }}</td>
                        <td>{{ number_format($item->subtotal)}} SAR</td>
                        <td>{{ number_format($item->total - $item->subtotal) }} SAR</td>
                        <td>{{ number_format($item->total) }} SAR</td>
                        <td>{{ date('Y-m-d H:m A', strtotime($item->date)) }} </td>
                        <td>
                            <a href="{{route('printInvoice' , $item->id)}}" target="_blank" class='btn btn-icon btn-outline-primary btn-circle btn-md'
                               data-toggle="tooltip" title="طباعة الفاتورة"><i class="flaticon2-print"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                <tbody>
            </table>

        </div>
    </div>
@endsection
