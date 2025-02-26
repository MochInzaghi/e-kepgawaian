<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>
    <div class="container-scroller">
        @include('components.navbarprintcuti')
        <div class="container-fluid page-body-wrapper">
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border me-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            @include('components.sidenavbar')

            <div class="main-panel">
                @yield('content')
                @include('components.footer')
            </div>
        </div>
    </div>

    <script src="{{ asset('template') }}/vendors/js/vendor.bundle.base.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <script>
    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('action');
        swal({
            title: 'Apakah anda yakin ingin menghapus data ini?',
            text: 'Catatan ini dan detailnya akan dihapus secara permanen!',
            icon: 'warning',
            buttons: ["Batal", "Hapus"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
    </script> --}}
    
    <script src="{{ asset('template') }}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('template') }}/js/off-canvas.js"></script>
    <script src="{{ asset('template') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('template') }}/js/template.js"></script>
    <script src="{{ asset('template') }}/js/settings.js"></script>
    <script src="{{ asset('template') }}/js/todolist.js"></script>
    
    @include('sweetalert::alert');
</body>

</html>
