<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield("title")</title>
    <link rel="stylesheet" type="text/css" href="/css/meetflex.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="text-end">
        <a href="/front/login" type="button" class="btn btn-lg my-2" role="button"
            style="border: 2px solid red;color:white;">使用者切換</a>
    </div>
    <main class="form-signin" style="margin-top: 6%;">
        <form style="justify-items: center;" method="post" action="/admin/doLogin">
            {{ csrf_field() }}
            <img class="mb-4" src="/images/logo_size.jpg" alt="">
            <h1 class="h3 mb-3 fw-normal" style="color: white;">Admin Please sign in</h1>


            <div class="form-floating w-25">
                <input id="account" type="account" class="form-control" id="floatingInput" placeholder="" name="account"
                    autocomplete="off" required>
                <label for="floatingInput">Account</label>
            </div>

            <div class="form-floating w-25">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"
                    required>
                <label for="floatingPassword">Password</label>
            </div>
            @if ($errors -> has("error"))
            <div class="text-danger">
                <b>{{ $errors-> first("error") }}</b>
            </div>
            @endif
            <button class="btn btn-lg btn-primary my-2" type="submit">Sign in</button>
        </form>

    </main>
    <footer class="footer d-flex justify-content-center mt-3">
        <small class="text-center">Copyright © 1987~2024 MeetFlex. All Rights Reserved.
            <a href="..">Contact US</a>
            <a href="..">Privacy policy</a>

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