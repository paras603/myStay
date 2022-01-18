@extends('pages.customer.layout.default')

@section('customer-details')
   <section>
       <div class="container">
           <div class="row customer-details mb-5 mt-1">
                <div class="col-lg-12 col-sm-12">
                    <h3>My Details</h3>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <h6>Personal Information</h6>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p><span><i class="bi bi-person-circle"></i>Name</span><br>Ram Bahadur Ghalle</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p><span><i class="bi bi-person"></i>Username</span><br>ramghale</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p><span><i class="bi bi-geo-alt-fill"></i>Address</span><br>CHarali-3, Jhapa</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p><span><i class="bi bi-telephone-fill"></i>Phone number</span><br>98283746</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p><span><i class="bi bi-envelope-fill"></i>Email</span><br>ramghale@gmail.com</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p><span><i class="bi bi-emoji-smile"></i>Travel Credit</span><br>100</p>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <form method="get" action="{{ url('customer-settings') }}">
                        <button>Edit</button>
                    </form>
                </div>
           </div>
       </div>
   </section>
@endsection