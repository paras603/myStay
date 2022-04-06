@extends('layouts.dashborad')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Details</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="merchantDatatable" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Verified</th> 
                            <th>Create at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
@section('page_level_script')
    @include('dashboard.merchants._shared')
    <script>
        $(document).ready(function($) {
            let table = $('#merchantDatatable').DataTable({
                "serverSide": true,
                "ajax": {
                    "url": BASE_URL + '/dashboard/merchants',
                    "dataType": "json",
                    "type": "GET",
                    "data": {
                        "_token": '{{csrf_token()}}'
                    },
                    "tryCount" : 0,
                    "retryLimit" : 3,
                    error: function(xhr, ajaxOptions, thrownError) {
                        if (xhr.status === 500) {
                            this.tryCount++;
                            if (this.tryCount <= this.retryLimit) {
                                //try again
                                $.ajax(this);
                            }else{
                                toastError('Server Error !!!');
                            }
                        }
                    }
                },
                "columns": [{
                    "data": "first_name",
                },
                    {
                        "data": "last_name"
                    },
                    {
                        "data": "verified"
                    },
                    {
                        "data": "created_at"
                    },
                    {
                        "data": "action",
                        "searchable": false,
                        "orderable": false
                    }
                ],
                "rowId": 'id',
                "order": [
                    [0, "asc"]
                ],
                // "lengthMenu": [[100, 200, 500, -1], [ 100, 200, 500, 'All']],
                "lengthMenu": [
                    [25, 50, 100, 500],
                    [25, 50, 100, 500]
                ],
                "pageLength": 25,
                "deferRender": true,
                "fixedHeader": true,
                // "pagingType": "simple",
                "searchable": false,
                "processing": false,
                "language": {
                    "emptyTable": " ",
                },
            });
        });
    </script>
@endsection


