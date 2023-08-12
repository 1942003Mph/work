<!-- Content Wrapper. Contains page content -->

<form action="{{ route("admin.followups.store") }}" method="POST">
    @csrf
    <div class="d-flex justify-content-between"  style="width: 650px " >
        <div class="form-floating" class="mb-5">
            <label for="floatingSelect">اسماء الموظفين</label>
            <div class="form-floating">
                <select class="form-select mb-3 " id="floatingSelect" aria-label="Floating label select example" style="width: 200px ; height : 34px" name="jobid" >
                    @foreach ($employees as $employee)
                    <option  value="{{ $employee->jobid }}">{{ $employee->name }}</option>  
                    @endforeach
                </select>
                
              </div>
          
          </div>				
        <div class="mb-3">
            <label>الحضور</label>
            <input type="time" class="form-control @error('timein') is-invalid
             @enderror" placeholder="title" value="{{ old('timein') }}" name="timein" style="width: 200px">
            @error('timein')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        

    </div>
    <div  class="d-flex justify-content-center" style="width: 650px"><button class="btn btn-success "><i class="fas fa-save" ></i> حفظ  </button></div>
    
   
</form>
@endsection
