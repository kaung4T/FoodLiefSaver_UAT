@extends('admin.dashboard')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<style type="text/css">
.form-check-label
{
    text-transform: capitalize;
}
</style>

<div class="page-content">
    <div class="row profile-body">
        <!-- middle wrapper start -->
    <div class="col-md-8 col-xl-8 middle-wrapper">
    <div class="row">

    <div class="card">
    <div class="card-body">

    <h6 class="card-title"> Add Role in Permission </h6>

    <form action="{{ route('role.permission.store') }}" method="POST" class="forms-sample">
        @csrf           
            <div class="form-group mb-3">
            <label for="role_id" class="form-label"> Role Name </label>
            <select name="role_id" id="role_id" class="form-control">
            <option selected="" disabled=""> Select Role </option>
                @foreach ($roles as $role)
                            <option value="{{$role->id}}"> {{$role->name}} </option>
                @endforeach
            </select>
            </div>

            <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="checkDefaultmain">
                    <label class="form-check-label" for="checkDefaultmain">
                    Permission All
                    </label>
                </div>

                <hr>
                @foreach ($permssion_groups as $group)
                    
                <div class="row">
                <div class="col-3">
                    <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="checkDefault">
                    <label class="form-check-label" for="checkDefault"> {{ $group->group_name }} </label>
                </div>
                    </div>

            <div class="col-9">
                
                @php
                    $permissions = App\Models\User::permissionByGroupName($group->group_name)
                @endphp

            @foreach ($permissions as $permission)
            <div class="form-check mb-2">
                    <input type="checkbox" name="permission[]" class="form-check-input" id="checkDefault {{ $permission->id }}"  value="{{$permission->id}}">
                    <label class="form-check-label" for="checkDefault {{$permission->id}}"> 
                        {{ $permission->name }} 
                    </label>
            </div>
        @endforeach

        </div>
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary me-2"> Save Changes </button>
    </form>

    </div>
    </div>
            
    </div>
        </div>         
    </div>

    </div>

    <script type="text/javascript">
        $('#checkDefaultmain').click(function(){
            if($(this).is(':checked'))
            {
                $('input[type = checkbox]').prop('checked', true);
            }else 
            {
                    $('input[type = checkbox]').prop('checked', false);
            }
        })
    </script>

@endsection 