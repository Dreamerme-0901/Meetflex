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
    <div class="container" style="color: white;">
        <main style="padding-top: 9%;">
            <div class=" text-center">
                <img class="d-block mx-auto mb-4" src="/images/logo_size.jpg" alt="" width="15%" height="20%">
                <h2 class="mb-1">Register</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-12">
                    <form class="needs-validation" novalidate>
                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username"
                                    placeholder="Username must contain English letters and numbers, with a length of 8 to 16 characters."
                                    minlength="8" maxlength="16" required>
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-12">
                                <label for="password" class="form-label">password</label>
                                <input type="password" class="form-control" id="password"
                                    placeholder="at least 10-20 numbers, including one uppercase English letter and one special symbol."
                                    minlength="10" maxlength="20" required>
                                <div class="invalid-feedback">
                                    Your password is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="password checked" class="form-label">password checked</label>
                                <input type="password" class="form-control" id="password checked"
                                    placeholder="A password with 10-20 digits, at least one uppercase English letter, and one special symbol."
                                    required>
                                <div class="invalid-feedback">
                                    Your password is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span
                                        class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="xxx@gmail.com"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select" style="overflow-y:scroll; size: 3;" id="country" required>
                                    <option value="">Choose...</option>
                                    <option value="Taipei City">Taipei City (臺北市)</option>
                                    <option value="New Taipei City">New Taipei City (新北市)</option>
                                    <option value="Taoyuan City">Taoyuan City (桃園市)</option>
                                    <option value="Taichung City">Taichung City (臺中市)</option>
                                    <option value="Tainan City">Tainan City (臺南市)</option>
                                    <option value="Kaohsiung City">Kaohsiung City (高雄市)</option>
                                    <option value="Hsinchu County">Hsinchu County (新竹縣)</option>
                                    <option value="Miaoli County">Miaoli County (苗栗縣)</option>
                                    <option value="Changhua County">Changhua County (彰化縣)</option>
                                    <option value="Nantou County">Nantou County (南投縣)</option>
                                    <option value="Yunlin County">Yunlin County (雲林縣)</option>
                                    <option value="Chiayi County">Chiayi County (嘉義縣)</option>
                                    <option value="Pingtung County">Pingtung County (屏東縣)</option>
                                    <option value="Yilan County">Yilan County (宜蘭縣)</option>
                                    <option value="Hualien County">Hualien County (花蓮縣)</option>
                                    <option value="Taitung County">Taitung County (臺東縣)</option>
                                    <option value="Penghu County">Penghu County (澎湖縣)</option>
                                    <option value="Kinmen County">Kinmen County (金門縣)</option>
                                    <option value="Lienchiang County">Lienchiang County (連江縣)</option>
                                    <option value="Keelung City">Keelung City (基隆市)</option>
                                    <option value="Hsinchu City">Hsinchu City (新竹市)</option>
                                    <option value="Chiayi City">Chiayi City (嘉義市)</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="save-info">
                                <label class="form-check-label" for="save-info">Save this information for next
                                    time</label>
                            </div>

                            <hr>
                            <div class="d-flex justify-content-center">
                                <button class="w-50 btn btn-primary btn-lg" type="submit">Continue</button>
                            </div>
                    </form>

                </div>
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
    </div>
    <script>
    function validateForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("passwordChecked").value;
        var usernamePattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,16}$/;
        var specialCharacters = /[!@#$%^&*(),.?":{}|<>]/g;
        var uppercaseLetters = /[A-Z]/g;
        if (!usernamePattern.test(username)) {
            alert("用戶名必須包含至少一個字母和一個數字，且長度在8到16之間！");
            return false;
        }
        if (!specialCharacters.test(password)) {
            alert("密碼必須包含至少一個特殊符號！");
            return false;
        }
        if (!uppercaseLetters.test(password)) {
            alert("密碼必須包含至少一個大寫英文字母！");
            return false;
        }
        if (password !== confirmPassword) {
            alert("兩次輸入的密碼不一致！");
            return false;
        }
        return true;
    }
    </script>


</body>

</html>