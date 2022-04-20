<?php
$amt_total = (float)env('PER_FEATURE_PRICE') * (float) $duration;
$khaltiPubKey = config('services.khalti.public_key');
session(['total' => $amt_total]);
?>
@extends('layouts.user_dashboard')
@section('content')
    @if(session("failureMsg"))
        <div class="alert alert-danger fade mt-1" id="paymentErrorAlert" role="alert">
            <span>{{ session("failureMsg") }}</span>
        </div>
    @endif
    <div class="alert alert-danger fade  mt-1" id="validationErrorAlert" role="alert" style="display:none;">
        <span id="validationErrorText"></span>
    </div>
    <span>Per day Price : {{env('PER_FEATURE_PRICE')}}</span>
    <span>Duration: {{$duration}}</span>
    <span>{{$amt_total}}</span>
    <button class="btn btn-outline-primary btn-order btn-block" id="payment-button">
        <span class="d-inline-block">Pay with Khalti</span>
        <div class="ml-3 spinner-border" role="status" id="payStartSpinner" style="display: none; height: 1rem; width: 1rem; margin-left: 5px;">
        </div>
    </button>
@endsection
@section('page_level_script')
    @include('front.booking.checkout-script')
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
    <script>
        let khaltiPubKey = @json($khaltiPubKey);
        let total = @json($amt_total);
        // let basicFormKhalti;
        {{--let total_amount = @json($total);--}}
        // let serverErrorKhalti = "server_error_occurred_khalti";
        var config = {
            // replace the publicKey with yours
            "publicKey": khaltiPubKey,
            "productIdentity": "{{config('app.name')}}",
            "productName": "{{config('app.name')}}",
            "productUrl": "{{config('app.url')}}",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
            ],
            "eventHandler": {
                onSuccess (resp) {
                    if(resp.idx){
                        $.ajax({
                            url: '{{route('front.homestay.featuredVerify')}}',
                            type: 'POST',
                            headers: {
                                'X-CSRF-TOKEN' : '{{csrf_token()}}'
                            },
                            data: resp,
                            success: function (data){
                                window.location.replace(data.redirect);
                            },
                            error: function (){
                                toastr.error("Something went wrong!!!");
                                resetFieldsAfterPayFail();
                            },
                        })
                    }
                },
                onError (error) {
                    showErrorAndScrollUp("Unknown error occurred during Khalti payment");
                },
                onClose () {
                    resetFieldsAfterPayFail();
                }
            }
        };
        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        if(btn){
            btn.onclick = function () {
                // minimum transaction amount must be 10, i.e 1000 in paisa.
                changeFieldsAfterPayStart();
                checkout.show({amount: total*100});
            }
        }
    </script>
@endsection
