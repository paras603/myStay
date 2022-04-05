@extends('layouts.dashborad')
@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('users.update', $user)}}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            @csrf
            <div class="card-body">
                @include('dashboard.users._form', ['show' => false])
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
