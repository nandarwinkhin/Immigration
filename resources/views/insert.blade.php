@extends('layout.master')
@section('title','Insert')
@section('content')

    <div class="card bg-light container mt-5 col-md-offset-2 col-md-8">

        <div class="card-body">

            <legend>Insert Form</legend>


            <div class="row mt-5">

                <div class="input-group mb-3 col-md-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">NRC Number</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="tine">
                        <option selected>Choose...</option>
                        @foreach($dists as $dist)
                            <option value="{{$dist->name}}">{{$dist->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3 col-md-3">

                    <select class="custom-select" id="inputGroupSelect01" name="Type">
                        <option selected>Choose...</option>
                        @foreach($types as $type)
                            <option value="{{$type->type}}">{{$type->type}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 col-md-3">
                    {{csrf_field()}}
                    <form method="post" class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" name="nrcNo" placeholder="NRC Number">

                    </form>
                </div>

            </div>

            <div class="row container-fluid mt-3">

                <div class="input-group mb-3 col-md-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-info text-white" id="inputGroupFileAddon01">10 Years</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                               aria-describedby="inputGroupFileAddon01" name="tenInfo">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file for 10 years...</label>
                    </div>
                </div>

                <div class="input-group mb-3 col-md-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-info text-white" id="inputGroupFileAddon01">30 Years</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                               aria-describedby="inputGroupFileAddon01" name="thirtyInfo">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>

            </div>

            <div class="row container mt-3">
                <div class="input-group mb-3 col-md-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-info text-white" id="inputGroupFileAddon01">18 Years</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                               aria-describedby="inputGroupFileAddon01" name="eighteenInfo">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file for 18 years...</label>
                    </div>
                </div>
                <div class="input-group mb-3 col-md-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-info text-white" id="inputGroupFileAddon01">45 Years</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                               aria-describedby="inputGroupFileAddon01" name="ffInfo">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file for 45 years...</label>
                    </div>
                </div>
            </div>


            <form method="post" class="form-inline my-2 my-lg-0">
                {{csrf_field()}}
                <input type="submit" value="Uploads" class="btn btn-info col-md-3 mt-3">

            </form>


        </div>


    </div>


@endsection()