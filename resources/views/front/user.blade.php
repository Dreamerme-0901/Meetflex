@extends("front.app")
@section("content")
@section("title","user")

<div class="row justify-content-center" style="margin-top: 10%;">
    <div class="col-2 ml-5" style="padding:20px,20px;">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-username-list" data-bs-toggle="list"
                href="#list-username" role="tab" aria-controls="list-username">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                Account</a>
            <a class="list-group-item list-group-item-action" id="list-password-list" data-bs-toggle="list"
                href="#list-password" role="tab" aria-controls="list-password">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-file-lock2" viewBox="0 0 16 16">
                    <path
                        d="M8 5a1 1 0 0 1 1 1v1H7V6a1 1 0 0 1 1-1m2 2.076V6a2 2 0 1 0-4 0v1.076c-.54.166-1 .597-1 1.224v2.4c0 .816.781 1.3 1.5 1.3h3c.719 0 1.5-.484 1.5-1.3V8.3c0-.627-.46-1.058-1-1.224" />
                    <path
                        d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1" />
                </svg>
                Password</a>
            <a class="list-group-item list-group-item-action" id="list-email-list" data-bs-toggle="list"
                href="#list-email" role="tab" aria-controls="list-email"><svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path
                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                </svg>
                Email</a>
            <a class="list-group-item list-group-item-action" id="list-country-list" data-bs-toggle="list"
                href="#list-country" role="tab" aria-controls="list-country"><svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-flag" viewBox="0 0 16 16">
                    <path
                        d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12 12 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A20 20 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a20 20 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21 21 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21 21 0 0 0 14 7.655V1.222z" />
                </svg>
                Country</a>
        </div>
    </div>

    <div class="col-6 " style="padding-left:5%">
        <div class="tab-content" id="nav-tabContent" style="color:white;">
            <div class="tab-pane fade show active" id="list-username" role="tabpanel"
                aria-labelledby="list-username-list">
                <form method="post" action="editAdd" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h2>Account Settings</h2>
                    <label for="username1" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" id="account1" name="account1"
                            placeholder="Username must contain English letters and numbers, with a length of 6 to 16 characters."
                            minlength="6" maxlength="16" required>
                        <div class="invalid-feedback">
                            Your username is required.
                        </div>
                    </div>

                    <label for="username2" class="form-label">Username checked</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" id="account2" name="account2"
                            placeholder="Confirm your username." minlength="6" maxlength="16" required>
                        <div class="invalid-feedback">
                            Your username is required.
                        </div>
                    </div>

                    <hr>
                    <center>
                        <button class="w-30 btn btn-lg btn-primary" type="submit"
                            id="submitBtn">確定</button>&nbsp;&nbsp;&nbsp;
                        <button class="w-30 btn btn-lg btn-primary" type="reset">重設</button>
                    </center>
                </form>
            </div>

            <div class="tab-pane fade" id="list-password" role="tabpanel" aria-labelledby="list-password-list">
                <form method="post" action="editPwd">
                    <h2>Password Settings</h2>
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="At least 10-20 characters, including one uppercase English letter and one special symbol."
                            minlength="10" maxlength="20" required>
                        <div class="invalid-feedback">
                            Your password is required.
                        </div>
                    </div>

                    <label for="password_checked" class="form-label">Confirm Password</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="password" class="form-control" id="password_checked" name="password_checked"
                            placeholder="Confirm your password." minlength="10" maxlength="20" required>
                        <div class="invalid-feedback">
                            Your password confirmation is required.
                        </div>
                    </div>
                    <hr>
                    <center>
                        <button class="w-30 btn btn-lg btn-primary" type="submit">確定</button>&nbsp;&nbsp;&nbsp;
                        <button class="w-30 btn btn-lg btn-primary" type="reset">重設</button>
                    </center>
                </form>
            </div>

            <div class="tab-pane fade" id="list-email" role="tabpanel" aria-labelledby="list-email-list">
                <form method="post" action="editEmail">
                    <h2>Email Settings</h2>
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="xxx@gmail.com"
                            required>
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    <hr>
                    <center>
                        <button class="w-30 btn btn-lg btn-primary" type="submit">確定</button>
                        &nbsp;&nbsp;&nbsp;
                        <button class="w-30 btn btn-lg btn-primary" type="reset">重設</button>
                    </center>
                </form>
            </div>

            <div class="tab-pane fade col-4  " id="list-country" role="tabpanel" aria-labelledby="list-country-list">
                <form method="post" action="editArea">
                    <h2>Country Settings</h2>
                    <label for="country" class="form-label">Country</label>
                    <div class="input-group has-validation">
                        <select class="form-select" style="overflow-y:scroll; size: 3;" id="country" name="country"
                            required>
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

                    <hr>
                    <center>
                        <button class="w-30 btn btn-lg btn-primary" type="submit">確定</button>
                        &nbsp;&nbsp;&nbsp;
                        <button class="w-30 btn btn-lg btn-primary" type="reset">重設</button>
                    </center>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
function validateForm() {
    var username = document.getElementById("username1").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("password_checked").value;
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
@endsection