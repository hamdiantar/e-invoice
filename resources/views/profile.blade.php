@extends('layout.main')
@section('page', 'الصفحة الشخصية')
@php
    $page = 'courses_and_categories';
    $sub_page = 'profile';
@endphp

@section('sub-header')
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-8">
                    <ol class="breadcrumb text-muted fs-6 fw-bold bg-white">
                        <li class="breadcrumb-item px-3 text-muted font-weight-boldest">الصفحة الشخصية</li>
                    </ol>
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
                    <h3 class="card-title">تعديل البيانات</h3>
                </div>
                <!--begin::Form-->
                <form action="{{route('update_profile')}}" method="post" enctype="multipart/form-data" id="my-form">
                    @csrf
                    <div class="card-body">
                        <div class="row">

                            <div class="form-group col-md-6">
                                @if($user->type == 'store')
                                    <label>  اسم المتجر  <span class="text-danger">*</span></label>

                                @else
                                    <label>  الأسم  <span class="text-danger">*</span></label>

                                @endif
                                <input type="text" class="form-control"   name="name" value="{{isset($user) ? $user->name : old('name')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>   رقم الجوال  <span class="text-danger">*</span></label>
                                <input type="phone" class="form-control"  name="phone" value="{{isset($user) ? $user->phone : old('phone')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>   البريد الالكترونى <span class="text-danger">*</span></label>
                                <input type="email" class="form-control"  name="email" value="{{isset($user) ? $user->email : old('email')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>    كلمة المرور  </label>
                                <input type="password" autocomplete="new-password" class="form-control"  name="password" value="">
                            </div>
                        </div>
                    </div>

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
    {!! JsValidator::formRequest('App\Http\Requests\UserUpdateRequest', '#my-form'); !!}
@endsection
