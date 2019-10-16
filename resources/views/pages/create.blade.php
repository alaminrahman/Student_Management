@extends('pages.master')

@section('title')
    Create Student | Student Managem ent
@endsection

@section('content')
<div class="container ">

       <div class="card m-5">
           <div class="card-body">
                <form action="{{route('store')}}" method="post" data-parsley-validate>


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                    {{csrf_field()}}

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="" aria-describedby="" maxlength="10"  placeholder="Enter your name" required>

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" name="name" class="form-control" id="" aria-describedby=""   placeholder="Enter your name" data-parsley-type="alphanum" required>

                        </div>

                        <div class="form-group">
                            <label for="registration_id">Registration No</label>
                            <input type="number" name="registration_id" class="form-control" id="registration_id" placeholder="Registration No" required>
                        </div>

                        <div class="form-group">
                            <label for="department_name">Department</label>
                            <input type="text" name="department_name" class="form-control" id="department_name" placeholder="Department" required>
                        </div>

                        <div class="form-group">
                            <label for="info">Info</label>
                           <textarea type="text" name="info" class="form-control" id="info" placeholder="Information" rows="10"> </textarea>
                        </div>


                        <button type="submit" class="btn btn-primary">Register Student</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </form>
           </div>
       </div>

</div>

@endsection
