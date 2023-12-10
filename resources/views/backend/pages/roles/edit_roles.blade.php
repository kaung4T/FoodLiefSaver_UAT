@extends('admin.dashboard')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
        <div class="row profile-body">
          <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
    
        <div class="card">
        <div class="card-body">

        <h6 class="card-title"> Add Roles </h6>

        <form action="{{ route('update.roles') }}" method="POST" class="forms-sample">
            @csrf
             <input type="hidden" name="id" value="{{ $roles->id }}">
            <div class="form-group mb-3">
                <label for="name" class="form-label"> Role Name </label>
                <input type="text" name="name" id="name" class="form-control" 
                value="{{ $roles->name }}">
            </div>

            <button type="submit" class="btn btn-primary me-2"> Save Changes </button>
        </form>

        </div>
        </div>
             
        </div>
          </div>         
        </div>

        </div>

@endsection 