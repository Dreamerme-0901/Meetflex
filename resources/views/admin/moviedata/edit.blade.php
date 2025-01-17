@extends("admin.layout")
@section("title", "修改電影資料")
@section("content")

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="col-2">
                        <a href="../list" class="btn btn-primary">上一頁</a>
                    </div>
                </div>

                <form method="post" action="../update" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ $moviedata->id }}">
                    {{ csrf_field() }}
                    <div class="row mt-3">
                        <label class="col-1 col-form-label text-right ">電影名稱：</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="title" id="title" required autofocus
                                onblur="checkManager()" value="{{$moviedata->title}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-1 col-form-label text-right">電影圖片：</label>
                        <div class="col-4">
                            <input type="file" class="form-control" name="photo" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-1 col-form-label text-right">電影描述：</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="description" required autofocus>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-1 col-form-label text-right">類型：</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="genres" required autofocus>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-1 col-form-label text-right">上市時間：</label>
                        <div class="col-4">
                            <input type="date" class="form-control" name="release_date" required autofocus>
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