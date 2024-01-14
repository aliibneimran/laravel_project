@extends('layouts.app')

@section('title','Add Product')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form id="demo-form" data-parsley-validate="" action="{{route('products.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Name * :</label>
                        <input type="text" class="form-control" name="name" id="fullname" required="">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email * :</label>
                        <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required="">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender *:</label>

                        <div class="form-check mb-1">
                            <input type="radio" name="gender" id="genderM" value="Male" required=" " class="form-check-input">
                            <label for="genderM" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="gender" id="genderF" value="Female" class="form-check-input">
                            <label for="genderF" class="form-check-label">Female</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Hobbies (Optional, but 2 minimum):</label>

                        <div class="form-check  mb-1">
                            <input type="checkbox" name="hobbies[]" id="hobby1" value="Skiing" data-parsley-mincheck="2" class="form-check-input" />
                            <label for="hobby1" class="form-check-label"> Skiing </label>
                        </div>
                        <div class="form-check  mb-1">
                            <input type="checkbox" name="hobbies[]" id="hobby2" value="Running" class="form-check-input" />
                            <label for="hobby2" class="form-check-label"> Running </label>
                        </div>
                        <div class="form-check ">
                            <input type="checkbox" name="hobbies[]" id="hobby3" value="Eating" class="form-check-input" />
                            <label for="hobby3" class="form-check-label"> Eating </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="heard" class="form-label">Heard about us via *:</label>
                        <select id="heard" class="form-select" name="category" required="">
                            <option value="">Choose..</option>
                            @foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>

                </form>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
@endsection