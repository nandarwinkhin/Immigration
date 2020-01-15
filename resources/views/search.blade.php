@extends('layout.master')
@section('title','Search Page')
@section('content')

<div class="card card-body bg-light container mt-5 col-md-offset-2 col-md-8">

@foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
    @endforeach
<form method="post" enctype="multipart/form-data">

{{csrf_field()}}
<legend>Search .....</legend>
@if(session('status'))

<div class="alert alert-danger">{{session('status')}}{{session('distName')}}({{session('typeName')}}){{session('num')}}
<br><br>   <a href='{{url('search')}}' class="btn btn-danger">OK</a> 

</div>
@endif
    <div class="form-row">


        <div class="form-group col-md-4">

            <input list="inputState" name="distName" class="form-control" placeholder="Division">

            <datalist id="inputState">
                @foreach($dists as $dist)
                    <option value="{{$dist->name}}"></option>
                @endforeach
            </datalist>

        </div>

        <div class="form-group col-md-4">

        <select id="inputState2" name="typeName" class="form-control">
                 <option disabled selected value="">NRC type</option>                   
                 @foreach($types as $type)
                       <option value="{{$type->id}}">{{$type->type}}</option>
                   @endforeach
                </select> 

            <!-- <input list="inputState2" name="typeName" class="form-control" placeholder="NRC Type">

            <datalist id="inputState2">
                @foreach($types as $type)
                    <option value="{{$type->type}}"></option>
                @endforeach
            </datalist> -->

        </div>

    <div class="form-group col-md-4">
        
        <input type="number" class="form-control" id="number" name="number" placeholder="Number" min="000000" max="999999">
     </div>
</div>





<button type="submit" class="btn btn-primary">Search</button><br><br>
</form></div>


 
@endsection()