@extends("admin.layout")
@section("title", "新增會員歷史紀錄")
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
                    <label class="col-1 col-form-label text-right">帳號：</label>
                    <div class="col-lg-11">
                        <input type="text" class="form-control" name="title" required autofocus>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-1 col-form-label text-right">電影：</label>
                    <div class="col-11">
                        <input type="text" class="form-control" name="content" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-1 col-form-label text-right">時間：</label>
                    <div class="col-11">
                        <input type="text" class="form-control" name="content" required>
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