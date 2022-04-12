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
                        url: '{{route('front.checkout.verify')}}',
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
