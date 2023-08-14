@extends('layout.main')
@section('page', 'ادارة الفواتير')
@php
    $page = 'courses_and_categories';
    $sub_page = 'invoices';
@endphp

@section('sub-header')
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-8">
                    <ol class="breadcrumb text-muted fs-6 fw-bold bg-white">
                        <li class="breadcrumb-item pe-3"><a href="{{route('invoices.index')}}" class="pe-3 font-weight-boldest"> ادارة الفواتير </a></li>
                        <li class="breadcrumb-item px-3 text-muted font-weight-boldest">أضافــة</li>
                    </ol>
                </div>
                <div class="col-md-4 text-right">
                    <a href="{{route('invoices.index')}}"
                       class="btn btn-sm btn-primary rounded-0 font-weight-bold command">
                        @lang('common.Back')
                        <i class="flaticon2-left-arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">اضافة فاتورة جديــدة</h3>
                </div>
                <!--begin::Form-->
                <form action="{{route('invoices.store')}}" method="post" enctype="multipart/form-data" id="my-form">
                    @csrf
                    @include('invoices.form')

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2 rounded-0"><i class="fa fa-save"></i> حفـــظ
                        </button>
                        <button type="reset" class="btn btn-danger rounded-0"><i class="fa fa-file"></i>تــفريغ</button>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
@endsection
@section('footer')
    {!! JsValidator::formRequest('App\Http\Requests\InvoiceRequest', '#my-form'); !!}
    <script>
        function addRow() {
            var index = $('#tblBody tr').length;
            var html = ` <tr id="row_${index}">
                    <td>${index + 1}</td>
                    <td>
                        <input type="text"  required class="form-control" name="items[${index}][name]">
                    </td>
                    <td>
                        <input type="number" id="qty_row_${index}" value="0" onkeyup="calRow(${index})" required class="form-control" name="items[${index}][qty]">
                    </td>
                    <td>
                        <input type="text" id="price_row_${index}" value="0" onkeyup="calRow(${index})" required class="form-control" name="items[${index}][price]">
                    </td>
                    <td>
                        <input id="total_row_${index}" type="text" value="0" readonly required class="form-control" name="items[${index}][total]">
                    </td>
                    <td>
                        <a onclick="removeRow(${index})" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>`;
            $("#tblBody").append(html);
        }

        function removeRow(id){
            $("#row_"+id).remove();
            calTotal()
        }
        function calRow(id) {
            var qty = $("#qty_row_"+id).val();
            var price = $("#price_row_"+id).val();
            if (isNaN(price)) {
                alert('please enter valid price');
                $("#price_row_"+id).val(0)
                return false;
            }
            $("#total_row_"+id).val((qty * price).toFixed(2));
            calTotal()
        }

        function calTotal() {
            var total = 0;
            $('#tblBody tr').each(function (index, item) {
                var subtotal = $("#total_row_"+index).val();
                total = parseInt(total) + parseInt(subtotal)
            });
            if (isNaN(total)) {
                $("#finalTotal1").val(0);
                $("#finalTotal2").val(0);
                return false;
            }
            $("#finalTotal1").val(total.toFixed(2));
            $("#finalTotal2").val( ((total*15/100) + parseInt(total)).toFixed(2));
        }
    </script>
@endsection
