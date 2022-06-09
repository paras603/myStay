@extends('layouts.user_dashboard')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div style="border: none" class="col-lg-12 col-sm-12 customer-bookmarks-title">
                <h3>My Customers</h3>
                {{-- <p>2 bookmarks</p> --}}
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered border-primary">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Total</th>
                            <th scope="col">Room Type</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Contact</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @forelse($bookings as $booking)

                            <tr class="table-light">
                                <th scope="row">{{$i}}</th>
                                <td>{{$booking->start_date}}</td>
                                <td>{{$booking->end_date}}</td>
                                <td>{{$booking->total}}</td>
                                <td>{{$booking->room->type}}</td>
                                <td>{{ucfirst($booking->user->first_name).' '.ucfirst($booking->user->last_name)}}</td>
                                <td>{{$booking->user->email}}</td>

                            </tr>
                            <?php
                            $i = $i++;
                            ?>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <div class="alert alert-danger text-center">
                                        <span>No Bookings Found</span>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
{{--         @foreach($bookings as $booking)--}}
{{--        <div class="row customer-bookmarks mb-5 mt-1">--}}
{{--            --}}{{-- <p># bookmarked on 23 June 2022</p> --}}
{{--            <div class="col-lg-7 col-sm-12">--}}
{{--                <div class="bookmarked-homestay">--}}
{{--                    <div class="mt-3">--}}
{{--                --}}
{{--                    </div>--}}
{{--                    <div class="bookmarked-homestay-details">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-5 col-sm-12 customer-rm-bookmark-btns">--}}

{{--            </div>--}}
{{--        </div>--}}
{{--         @endforeach--}}
    </div>
</section>

@endsection
