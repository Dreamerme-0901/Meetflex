@extends("admin.layout")
@section("title", "新增會員資料")
@section("content")

<div class=container>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header">
                    <a href="list" class="btn btn-secondary">回上頁</a>
                </div>
            </div>
            <form method="post" action="insert" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row mt-3">
                    <label class=" col-1 col-form-label text-right">Email：</label>
                    <div class="col-lg-11">
                        <input type="email" class="form-control" name="email" id="email" required autofocus>
                    </div>
                </div>
                <div class="row mt-2">
                    <label class="col-1 col-form-label text-right">帳號：</label>
                    <div class="col-lg-11">
                        <input type="text" class="form-control" name="account" id="account" required autofocus>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-1 col-form-label text-right">密碼：</label>
                    <div class="col-lg-11">
                        <input type="password" class="form-control" name="password" id="password" required autofocus>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-1 col-form-label text-right">country：</label>
                    <div class="col-lg-11">
                        <input type="text" class="form-control" name="country" id="country" required autofocus>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-1 col-form-label text-right">state：</label>
                    <div class="col-lg-11">
                        <input type="text" class="form-control" name="state" id="state" required autofocus>
                    </div>
                </div>
                <div class="card-body text-center mt-3">
                    <button class="btn btn-primary btn-lg" type="submit">確定</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection