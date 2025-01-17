@extends("admin.layout")
@section("title", "新增電影類別")
@section("content")


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
                    <div class="row mt-3">
                        <label class="col-1 col-form-label text-right ">編號：</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="title" id="title" required autofocus
                                onblur="checkManager()">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-1 col-form-label text-right">類別：</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="genres" id="genres" required>
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