@extends('layouts.dashborad')
@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Merchant</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('merchants.update', $user)}}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            @csrf
            <div class="card-body">
                @include('dashboard.merchants._form', ['show' => false])
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
