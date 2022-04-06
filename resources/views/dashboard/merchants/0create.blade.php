@extends('layouts.dashborad')
@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('merchants.store', $user)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                @include('dashboard.merchants._form', ['show' => true])
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
