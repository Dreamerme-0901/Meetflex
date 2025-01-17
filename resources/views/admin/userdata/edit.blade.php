@extends("admin.layout")
@section("title", "修改會員資料")
@section("content")

<div class=container>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <a href="../list" class="btn btn-secondary">回上頁</a>
                </div>
            </div>
            <form method="post" action="../update">
                <input type="hidden" name="id" value="{{ $userdata->id }}">
                {{ csrf_field() }}

                <div class="row mt-3">
                    <label class="col-1 col-form-label text-right ">電子信箱：</label>
                    <div class="col-lg-11">
                        <input type="email" class="form-control" name="email" id="email" required autofocus
                            onblur="checkManager()" value="{{$userdata->email}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-1 col-form-label text-right ">帳號：</label>
                    <div class="col-lg-11">
                        <input type="text" class="form-control" name="account" id="account" required autofocus
                            onblur="checkManager()" value="{{$userdata->account}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-1 col-form-label text-right ">密碼：</label>
                    <div class="col-lg-11">
                        <input type="password" class="form-control" name="password" id="password" required autofocus
                            onblur="checkManager()" value="{{$userdata->password}}">
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