
@extends('admin.layout.master')
@section('title' , 'موظفون الشفت المسائي')
@section('content')
@section('H1' , 'موظفون الشفت المسائي')
@extends('admin.employees.masteremployee' , ['employees'=>$employees])
@section('new' , 'موظفون الشفت المسائي ')
@section('search')
<form action="{{ route('admin.employeesevning') }}" method="GET">
    <div class="input-group mb-3">
        <input name="search" type="text" class="form-control" 
        value="{{ request()->search }}" placeholder="ابحث باستخدام الاسم" >
        <button class="btn btn-primary" id="button-addon2">ابحث</button>
    </div>
</form>
@endsection

 