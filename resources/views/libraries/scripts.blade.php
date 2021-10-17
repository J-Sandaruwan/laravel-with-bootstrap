<!-- JAVASCRIPT -->
<script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ asset('js/pages/dashboard.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('js/app-temp.js') }}"></script>


<script>
    $(document).ready(function () {

        @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'.$msg))
        var msg = '@php echo Session("alert-".$msg); @endphp';
        @if($msg == 'success')
        setTimeout(() => {
            alertSuccess(msg);
        }, 500);
        @endif
        @if($msg == 'danger')
        setTimeout(() => {
            alertDanger(msg);
        }, 500);
        @endif
        @if($msg == 'info')
        setTimeout(() => {
            alertInfo(msg);
        }, 500);
        @endif
        @if($msg == 'warning')
        setTimeout(() => {
            alertWarning(msg);
        }, 500);
        @endif
        @endif
        @endforeach





        if (sessionStorage.getItem("SessionAddData")) {
            alertSuccess(sessionStorage.getItem("SessionAddData"));
            sessionStorage.removeItem('SessionAddData');
        }
        //clipboard copy function
        //initilize theme
        initTheme();

        setTimeout(function () {
            $('#logout-form').submit();
        }, 60 * 60000);

    });
    /*****
     * Initilaize Current Theme In doc ready
     * *********/
    function initTheme() {
        var theme = "light";
        if (getLst("theme")) {
            theme = getLst("theme");
        }
        setDarkOrLight(theme);
    }

    function setLst(name, value) {
        return localStorage.setItem(name, value);
    }

    function getLst(name) {
        return localStorage.getItem(name);
    }

    /****
     * Find Customer Selectec Theme
     *
     * @param theme [dark/light]
     * ******/
    function setDarkOrLight(theme = "") {
        $('body').addClass('d-none');
        if (theme == "") {
            theme = getLst("theme") ? (getLst("theme") == "light" ? "dark" : "light") : "dark";
        }
        switch (theme) {
            case 'light':
                $("#app-style").attr("href", "{{ asset('css/app.min.css') }}");
                $("#bootstrap-style").attr("href", "{{ asset('css/bootstrap.min.css') }}");
                $('.theme-mode').html('<i class="fas fa-moon"></i> ');
                setLst("theme", "light");
                $('body').addClass('lightmode');
                $('body').removeClass('darkmode');
                if (typeof am4core !== 'undefined') {
                    am4core.unuseTheme(am4themes_dark);
                    themeChanged();
                }
                break;
            case 'dark':
                $("#bootstrap-style").attr("href", "{{ asset('css/bootstrap-dark.min.css') }}");
                $("#app-style").attr("href", "{{ asset('css/app-dark.min.css') }}");
                setLst("theme", "dark");
                $('.theme-mode').html('<i class="fas fa-lightbulb"></i>');
                $('body').addClass('darkmode');
                $('body').removeClass('lightmode');
                if (typeof am4core !== 'undefined') {
                    am4core.useTheme(am4themes_dark);
                    themeChanged();
                }
                break;
        }
        $('body').removeClass('d-none');
    }

</script>
@stack('scripts')
