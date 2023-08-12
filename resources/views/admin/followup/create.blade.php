@extends('admin.layout.master')
@section('title' , 'create')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <h1 class="h3 mb-4 text-gray-800">اضف موظف جديد</h1>
 <form action="{{ route('admin.employees.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    				
    <div class="mb-3">
        <label>الاسم</label>
        <input type="text" class="form-control @error('name') is-invalid
         @enderror" placeholder="الاسم" value="{{ old('name') }}" name="name">
        @error('name')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label>الرقم الوظيفي</label>
        <input type="text" class="form-control @error('jobid') is-invalid
         @enderror" placeholder="الرقم الوظيفي" value="{{ old('jobid') }}" name="jobid">
        @error('jobid')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label>الوظيفة</label>
        <input type="text" class="form-control @error('jop') is-invalid 
        @enderror" placeholder="الوظيفة" value="{{ old('jop') }}" name="jop">
        @error('jop')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-floating" class="mb-3">
        <select name="perod" class="form-select"  aria-label="Floating label select example">
          <option  value="am">الشفت الصباحي</option>
          <option  value="pm">الشفت المسائي</option>
        </select>
      </div>
   
    
    <button class="btn btn-success mt-3"><i class="fas fa-save"></i> Save</button>
</form>
@endsection
