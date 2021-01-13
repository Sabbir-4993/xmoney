<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0">
        <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2020<a class="ml-25" href="{{url('/')}}" target="_blank">Xmoney</a>
            <span class="d-none d-sm-inline-block">, All rights Reserved</span>
        </span>
    </p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('Backend/asset/app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('Backend/asset/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
<script src="{{ asset('Backend/asset/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('Backend/asset/app-assets/js/core/app-menu.min.js') }}"></script>
<script src="{{ asset('Backend/asset/app-assets/js/core/app.min.js') }}"></script>
<script src="{{ asset('Backend/asset/app-assets/js/scripts/customizer.min.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('Backend/asset/app-assets/js/scripts/pages/dashboard-ecommerce.min.js') }}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Additional Page JS-->
@yield('js')
<!-- END: Additional Page JS-->

<script>
    $(window).on('load',  function(){
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
    })
</script>
</body>
<!-- END: Body-->
</html>
