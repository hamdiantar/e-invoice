@extends('layout.main')
@section('page', 'تصنيفات الكورسات')
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
                        <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 font-weight-boldest">الكورســات</a>
                        </li>
                        <li class="breadcrumb-item pe-3"><a href="{{route('invoices.index')}}"
                                                            class="pe-3 font-weight-boldest">تصنيفات الكورســات </a>
                        </li>
                        <li class="breadcrumb-item px-3 text-muted font-weight-boldest">تعديـــل</li>
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
                    <h3 class="card-title">تعديل التصنيف </h3>
                </div>
                <!--begin::Form-->
                <form action="{{route('invoices.update', $item->id)}}" method="post" enctype="multipart/form-data"
                      id="my-form">
                    @csrf
                    @method('PUT')
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
    {!! JsValidator::formRequest('App\Http\Requests\UpdateCategoryRequest', '#my-form'); !!}
@endsection
