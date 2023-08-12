
@extends('admin.layout.master')
@section('title' , 'المتابعة')
@section('content')
@section('H1' , 'متابعة حضور الشفت الصباحي')
@extends('admin.followup.masterfollowup' , ['employees'=>$employees])
@section('new' , 'المتابعة ')






{{-- @section('search')
<form action="{{ route('admin.followups.index') }}" method="GET">
    <div class="input-group mb-3">
        <input name="search" type="text" class="form-control" 
        value="{{ request()->search }}" placeholder="ابحث باستخدام الاسم" >
        <button class="btn btn-primary" id="button-addon2">ابحث</button>
    </div>
</form>
@endsection --}}

 {{-- <!-- Content Wrapper. Contains page content -->
 <div class="d-flex justify-content-center align-items-center mb-3">
    <a href="{{ route('admin.employees.create') }}" class="btn btn-dark">اضف موظف جديد</a>
</div>


 @if (session('msg'))
    <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
@endif


    <form action="{{ route('admin.employees.index') }}" method="GET">
        <div class="input-group mb-3">
            <input name="search" type="text" class="form-control" 
            value="{{ request()->search }}" placeholder="ابحث باستخدام الاسم" >
            <button class="btn btn-primary" id="button-addon2">ابحث</button>
        </div>
    </form>
    
        <div class="row">
            <table class="table table-hover table-bordered table-striped">
                <tr class="bg-dark text-white">
                    <th>ID</th>
                    <th>الاسم</th>
                    <th>العمل</th>
                    <th>الرقم الوظيفي</th>
                    <th>الشفت</th>
                    <th>تاريخ الاضافة</th>  
                    <th>التعديلات</th>  
                </tr>
            
            @forelse ($employees as $employee)
    <tr>
        <td>{{ $employee->id }}</td>
        <td>{{ $employee->name }}</td>
        <td>{{ $employee->jop }}</td>
        <td>{{ $employee->jobnumber }}</td>
        <td>@if($employee->perod == 'am')     
            صباحي 
            @else
             مسائي 
            @endif</td>
        <td>{{ $employee->created_at->format('d F, Y - h:m:s A') }}</td>
        <td>
            <a class="btn btn-primary btn-sm" href="{{ route('admin.employees.edit', $employee->id) }}">
                <i class="fas fa-edit"></i>
            </a>
            <form class="d-inline" action="{{ route('admin.employees.destroy', $employee->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
            </form>
        </td> 
    </tr>
    @empty
    <tr>
        <td colspan="8" class="text-center">لايوجد بيانات<a href="{{ route('admin.employees.create') }}"><i class="fa-regular fa-square-plus fa-lg"></td>
    </tr>
    @endforelse
</table>
{{ $employees->appends($_GET)->links() }}
@endsection
@push('scripts')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script>
     $('#search').on('keyup',function() {
     }); 
    </script>

@endpush --}}