<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Dark mode -->
        <script>
            const storedTheme = localStorage.getItem('theme')
    
            const getPreferredTheme = () => {
                if (storedTheme) {
                    return storedTheme
                }
                return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
            }

            const setTheme = function (theme) {
                if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.setAttribute('data-bs-theme', 'dark')
                } else {
                    document.documentElement.setAttribute('data-bs-theme', theme)
                }
            }

            setTheme(getPreferredTheme())

            window.addEventListener('DOMContentLoaded', () => {
                var el = document.querySelector('.theme-icon-active');
                if(el != 'undefined' && el != null) {
                    const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

                }
            })
            
        </script>

        <title>Cursaki</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link rel="stylesheet" href="../../css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

            <!-- Plugins CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/css/apexcharts.css') }}">

        <!-- Theme CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body>
        <!-- Header START -->
        <x-dashboard.header />
        <!-- Header END -->
        <!-- **************** MAIN CONTENT START **************** -->
        <main>
            {{ $slot }}
        </main>
        <!-- **************** MAIN CONTENT END **************** -->
        <!-- ======================= Footer START -->
        <x-dashboard.footer />
        <!-- ======================= Footer END -->
        <!-- Back to top -->
        <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
        <!-- Bootstrap JS -->
        <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Vendors -->
        <script src="{{asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js')}}"></script>
        <script src="{{asset('assets/vendor/apexcharts/js/apexcharts.min.js')}}"></script>

        <!-- Template Functions -->
        <script src="{{asset('assets/js/functions.js')}}"></script>
    </body>
</html>
