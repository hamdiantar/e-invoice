@extends('errors::layout')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('There Are Too Many Requests, Please Clean Cookies ANd Caches Then Return Back ... !'))
