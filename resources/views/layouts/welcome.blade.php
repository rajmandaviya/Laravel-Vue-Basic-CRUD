<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Vue CRUD Application</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item">
                    <b>LaraVue CRUD</b>
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="{{ url('/') }}">Home</a>
                    <!--<a class="navbar-item">Projects</a>
                     <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">More</a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item">About</a>
                            <a class="navbar-item">Jobs</a>
                            <a class="navbar-item">Contact</a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                Report an issue
                            </a>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary"><strong>Sign up</strong></a>
                            <a class="button is-light">Log in</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </nav>
        <div id="app"></div>
        <script>
            window.Laravel = <?php echo json_encode([
               'csrfToken' => csrf_token(),
                    ]); ?>
        </script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>