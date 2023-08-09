@extends('admin.layout.master')
@section('title' , 'Edit')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <h1 class="h3 mb-4 text-gray-800">تعديل بيانات الموظف</h1>
 <form action="{{ route('admin.employees.update' , $employees->id)  }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>name</label>
        <input type="text" class="form-control @error('name') is-invalid
         @enderror" placeholder="name" value="{{ old('title', $employees->name) }}" name="name">
        @error('name')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    
    
    <div class="mb-3">
        <label>jop</label>
        <input type="text" class="form-control @error('jop') is-invalid
         @enderror" placeholder="jop" value="{{ old('title', $employees->jop) }}" name="jop">
        @error('jop')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label>jobnumber</label>
        <input type="text" class="form-control @error('jobnumber') is-invalid
         @enderror" placeholder="jobnumber" value="{{ old('title', $employees->jobnumber) }}" name="jobnumber">
        @error('jobnumber')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    @if($employees->perod == "am")
    <div class="form-floating" class="mb-3">
        <select name="perod" class="form-select"  aria-label="Floating label select example">
          <option  value="am">الشفت الصباحي</option>
          <option  value="pm">الشفت المسائي</option>
        </select>
      </div>
    @else
        <div class="form-floating" class="mb-3">
            <select name="perod" class="form-select"  aria-label="Floating label select example">
            <option  value="pm">الشفت المسائي</option>
            <option  value="am">الشفت الصباحي</option>
            </select>
        </div>
    
@endif     



    <button class="btn btn-success mt-5"><i class="fas fa-save"></i> Save</button>
</form>
@endsection
@push('scripts')


 
<script>
    tinymce.init({
        selector: '.textarea',
        plugins : ['code']
        
    })
</script>
@endpush