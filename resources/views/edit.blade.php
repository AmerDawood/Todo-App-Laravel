@extends('layouts.app')



@section('title','Edit Task')
    

@extends('layouts.navbar')

@section('content')
{{-- <center>
<div style="width: 800px;padding-top:7%">

 

        <div class="card">
            <h5 class="card-header">Add Task</h5>
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-2">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>


          </div>
    
    
    
    
</div>    
</center>   --}}


<center>

    <div style="width: 500px;padding-top:50px">
        <form  action="/todos/{{$todo->id}}" method="POST">

            {{-- validation --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" >Your Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" 
              placeholder="Enter Your Title" aria-describedby="emailHelp"
               name="todoTitle"
                value="{{$todo->title}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Yor Address</label>
              <input type="text" class="form-control"  placeholder="Enter Your Address"
               id="exampleInputPassword1" 

                name="todoAddress"
                value="{{$todo->address}}"
                >
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1"  >
              <label class="form-check-label" for="exampleCheck1" >Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
</center>
@endsection


