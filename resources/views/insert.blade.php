@extends('layout.master')
@section('title','Insert')
@section('content')

    <div class="card card-body bg-light container mt-5 col-md-offset-2 col-md-8">

    <form method="post" enctype="multipart/form-data">
    @foreach($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
    @endforeach
    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}{{session('distName')}}({{session('typeName')}}){{session('num')}}<br>
        <br><a href="{{url('insert')}}" class="btn btn-small btn-success">OK</a>
        </div>
    @endif
    {{csrf_field()}}
    <legend>Insert A new Citizin</legend>
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
<!-- 
                <input list="inputState2" name="typeName" class="form-control" placeholder="NRC Type">

                <datalist id="inputState2">
                    @foreach($types as $type)
                        <option value="{{$type->type}}"></option>
                    @endforeach
                </datalist> -->
             <select id="inputState" name="typeName" class="form-control">
                 <option disabled selected value="">NRC type</option>                   
                 @foreach($types as $type)
                       <option value="{{$type->id}}">{{$type->type}}</option>
                   @endforeach
                </select> 

            </div>

        <div class="form-group col-md-4">
            
            <input type="text" class="form-control" id="number" name="number" placeholder="Number">
         </div>
  </div>
        {{-- <div class="form-group">
        Name <input type="text" class="form-control" id="name" name="name" placeholder="Citizen name">
        </div> --}}

    <div class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="file10[]" id="customFile" multiple>
            <label class="custom-file-label" for="customFile">Choose file for 10 years</label>
        </div>
    </div>

    <div class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="file18[]" id="customFile" multiple>
            <label class="custom-file-label" for="customFile">Choose file for 18 years</label>
        </div>
    </div>

    <div class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="file30[]" id="customFile" multiple>
            <label class="custom-file-label" for="customFile">Choose file for 30 years</label>
        </div>
    </div>

    <div class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="file45[]" id="customFile" multiple>
            <label class="custom-file-label" for="customFile">Choose file for 45 years</label>
        </div>
    </div>
    


  <button type="submit" class="btn btn-primary">Insert</button>
</form>

</div>


@endsection()

