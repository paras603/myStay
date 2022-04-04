<script>
    const BASE_URL = "{{url('/')}}";
    const CSRF_TOKEN = "{{csrf_token()}}";
</script>
<script src={{ asset('assets/dashboard/plugins/sweetalert2/sweetalert2.min.js') }}></script>
<script src={{ asset('assets/dashboard/plugins/toastr/toastr.min.js') }}></script>
{{--<script src="{{asset("assets/common/js/sweetalert2.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/common/js/toastr/toastr.min.js")}}"></script>--}}
<script src="{{asset('assets/common/js/common.js')}}"></script>

