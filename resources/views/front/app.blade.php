<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield("title")</title>
    <link rel="stylesheet" type="text/css" href="/css/meetflex.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body style="overflow: auto">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:  rgb(194, 190, 190)">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="/images/logo_size.jpg" height="80px"
                    style="border-radius: 50%;" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/front/News">NEWS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Members Area</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/front/playlist">Playlist</a></li>
                            <li><a class="dropdown-item" href="/front/user">user settings</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Movie introduction</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/front/Class">Class</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/front/FAQ">F&Q</a>
                    </li>

                </ul>
                <form class="d-flex ms-auto">
                    <a href="/front/login" class="btn btn-danger">Logout</a>&nbsp;
                </form>
            </div>
        </div>
    </nav>

    @yield("content")

    <footer class="footer d-flex justify-content-center mt-3">
        <small class="text-center">Copyright © 1987~2024 MeetFlex. All Rights Reserved.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="/js/form-validation.js"></script>
    <script src="/js/jquery-3.7.1.min.js"></script>


</body>

</html>