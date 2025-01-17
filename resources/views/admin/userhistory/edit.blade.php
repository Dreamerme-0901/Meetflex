@extends("admin.layout")
@section("title", "修改會員歷史紀錄")
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
                <input type="hidden" name="id" value="{{ $userhistory->id }}">
                {{ csrf_field() }}

                <div class="row mt-3">
                    <label class="col-1 col-form-label text-right">帳號：</label>
                    <div class="col-lg-11">
                        <input type="text" class="form-control" name="title" required autofocus onblur="checkManager()"
                            value="{{$userhistory->user->account}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-1 col-form-label text-right">電影：</label>
                    <div class="col-11">
                        <input type="text" class="form-control" name="content" required autofocus
                            onblur="checkManager()" value="{{$userhistory->movie->title}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-1 col-form-label text-right">時間：</label>
                    <div class="col-11">
                        <input type="text" class="form-control" name="content" required autofocus
                            onblur="checkManager()" value="{{$userhistory->createTime}}">
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