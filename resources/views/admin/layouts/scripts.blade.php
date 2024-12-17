<script src="{{ asset('build/js/vendor.min.js') }}"></script>
<!-- Import Js Files -->
<script src="{{ URL::asset('build/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('build/js/theme/app.init.js') }}"></script>
<script src="{{ URL::asset('build/js/theme/theme.js') }}"></script>
<script src="{{ URL::asset('build/js/theme/app.min.js') }}"></script>
<script src="{{ URL::asset('build/js/theme/sidebarmenu.js') }}"></script>

<!-- Solar icons -->
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
<script src="{{ URL::asset('build/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/js/dashboards/dashboard.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/toastr-init.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); 
</script>