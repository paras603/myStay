<!-- to trigger these actions you need to pass `with('alert.success')` or `with('alert.error')` from controller -->
@if(session('alert.success'))
    <script>
        Swal.fire(
            'Success!',
            "{!! session('alert.success') !!}",
            'success'
        )
    </script>
@endif
@if(session('alert.error'))
    <script>
        Swal.fire(
            'Oops!',
            "{!! session('alert.error') !!}",
            'error'
        )
    </script>
@endif

<!-- This functions could be called via ajax success / error block or from any js block -->
<script>

</script>

