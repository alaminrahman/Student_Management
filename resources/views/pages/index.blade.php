@extends('pages.master')

@section('content')

<div class="container">


    <table class="table  table-hover">
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Registration</th>
            <th>Department</th>
            <th>Info</th>
            <th>Action</th>
        </tr>

    @php
        $i=0;
    @endphp

        @foreach ($students as $student)
        @php
            $i++;
         @endphp
        <tr>
            <td>{{$i}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->registration_id}}</td>
            <td>{{$student->department_name}}</td>
            <td>{{$student->info}}</td>
            <td>
                <a href="{{route('edit',$student->id)}}" class="btn btn-success">Edit</a>

                <form action="{{route('delete',$student->id)}}" method="post" class="form-inline" >
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-danger" value="Delete" >

                </form>
            </td>
        </tr>

        @endforeach
    </table>
</div>

@endsection
