<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@yield('script')
@stack('scripts')
<script>
    $(function () {
            let icon = (mode) => (mode ? "fa-moon" : "fa-sun");
            let navbar = (mode) => (mode ? "navbar-dark" : "navbar-light");
            let body = (mode) => (mode ? "dark-mode" : "light-mode");
            let elm = document.getElementById("theme-switcher") || null;
            let darkMode = true;
            localStorage.getItem("darkMode") === "1"
                ? (darkMode = true)
                : (darkMode = false);

            function theme_switcher(elm = null, changeState = false) {
                if (changeState) {
                    darkMode = !darkMode;
                    localStorage.setItem("darkMode", darkMode ? "1" : "0");
                }
                document
                    .querySelector("body")
                    .classList.replace(body(!darkMode), body(darkMode));
                try {
                    document
                        .querySelector("#navbar")
                        .classList.replace(navbar(!darkMode), navbar(darkMode));
                } catch (e) {}
                if (elm) {
                    elm.classList.replace(icon(!darkMode), icon(darkMode));
                }
            }
            if (darkMode == true) {
                theme_switcher(elm, false);
            }
            if (elm) {
                elm.addEventListener("click", () => theme_switcher(elm, true));
            }
        });
</script>
