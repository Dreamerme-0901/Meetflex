@extends("admin.layout")
@section("title", "新增管理員")
@section("content")

<script>
function checkManager() {
    $("#msg").html("");
    var account = $("#account").val();
    $.ajax({
        url: "/admin/manager/checkManager",
        type: "post",
        data: {
            account: account,
            _token: "{{ csrf_token() }}"
        },
        success: function(msg) {
            if (msg.trim() == "exist") {
                $("#msg").html("<font color='red'>帳號已存在</font>");
                $("#account").focus();
            }
        }
    });
}
</script>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="col-2">
                        <a href="list" class="btn btn-primary">上一頁</a>
                    </div>
                </div>

                <form method="post" action="insert" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <label class="col-1 col-form-label text-right ">帳號：</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="account" id="account" required autofocus
                                onblur="checkManager()" maxlength="10">
                        </div>
                        <div class="col-4">
                            <div id="msg"></div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <label class="col-1 col-form-label text-right">密碼：</label>
                        <div class="col-4">
                            <input type="password" class="form-control" name="password" required autofocus>
                        </div>
                    </div>
                    <div class="card-body text-center mt-3">
                        <button class="btn btn-primary btn-lg" type="submit">確定</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection