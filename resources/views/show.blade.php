@extends('layouts.app')


@section('title','Laravel')
    

@section('content')
    

   <center>
 <div class="card text-center" style="width: 700px; margin-top: 70px">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$todo->title}}</h5>
          <p class="card-text">{{$todo->address}}</p>



          <div  class="alert alert-secondary " role="alert">
            {{ boolval($todo->compleated)?'This task completed ,check it !': 'This task not completed ,check it !'}}       
          </div>   

             </div>

        <div class="card-footer text-muted">
            {{$todo->created_at}}
        </div>
      </div>
   </center>

   @endsection