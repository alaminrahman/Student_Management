@extends('pages.master')

@section('content')

<div class="container ">

       <div class="card m-5">
           <div class="card-body">
                <form action="{{route('update',$student->id)}}" method="post">

                    {{csrf_field()}}

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="" value="{{($student->name)}}" aria-describedby=""  placeholder="Enter your name">

                        </div>

                        <div class="form-group">
                            <label for="registration_id">Registration No</label>
                            <input type="number" name="registration_id" class="form-control" id="registration_id" value="{{($student->registration_id)}}" placeholder="Registration No">
                        </div>

                        <div class="form-group">
                            <label for="department_name">Department</label>
                            <input type="text" name="department_name" class="form-control" value="{{($student->department_name)}}" id="department_name" placeholder="Department">
                        </div>

                        <div class="form-group">
                            <label for="info">Info</label>
                           <textarea type="text" name="info" class="form-control" value="" id="info" placeholder="Information" rows="10"> {!!($student->info)!!}</textarea>
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </form>
           </div>
       </div>

</div>

@endsection
