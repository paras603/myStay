<!-- to trigger these actions you need to pass `with('toast.success')` or `with('toast.error')` from controller -->
@if(session('toast.success'))
    <script>
        toastr.success("{!! session('toast.success') !!}");
    </script>
@endif

@if(session('toast.error'))
    <script>
        toastr.error("{!! session('toast.error') !!}");
    </script>
@endif

<!-- This functions could be called via ajax success / error block or from any js block -->
<script>

</script>
