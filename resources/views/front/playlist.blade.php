@extends("front.app")
@section("title","playlist")
@section("content")
<div class="d-flex justify-content-center " style="margin-top: 7%;">
    <div class="card w-75 mt-3">
        <div class="card-header">
            <h1 class="card-title" style="text-align: center;">PlayList</h1>
        </div>
        <div class="list-group">
            <a class="list-group-item list-group-item-action d-flex row m-0">
                <div class="d-flex justify-content-between col-2">
                    <img src="/images/main.png" alt="DGLiang" class="img-fluid rounded"
                        style="max-width: 150px ;max-height: 150px" />
                </div>
                <div class="col-7 p-0">
                    <div class="width=100%" style="margin-top: 2%;">
                        <h5 class="col-2">片單電影1</h5>
                    </div>
                    <div>
                        <p>
                            After a successful career as an entertainer, DGLiang turned to
                            politics. Despite facing personal struggles, he made a
                            successful comeback and eventually became president-elect.
                        </p>
                    </div>
                    <div style="text-align:end">
                        加入時間 1987/94/87
                    </div>
                </div>

                <div class="col-3 row" style="margin-top:2%">
                    <div class="col-10 pl-0 d-flex align-items-center justify-content-end">
                        <button class="btn btn-outline">
                            <i class="btn btn-primary fa-1x">Watch Now！</i>
                        </button>
                    </div>
                    <div class="col-2 p-0 d-flex justify-content-end align-items-center">
                        <button class="btn btn-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-trash text-danger" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                            </svg>
                        </button>
                    </div>


                </div>
            </a>

            <!--<a class="list-group-item list-group-item-action d-flex row m-0">
                <div class="d-flex justify-content-between col-2">
                    <img src="/images/main.png" alt="DGLiang" class="img-fluid rounded"
                        style="max-width: 150px ;max-height: 150px" />
                </div>
                <div class="col-7 p-0">
                    <div class="width=100%" style="margin-top: 2%;">
                        <h5 class="col-2">片單電影1</h5>
                    </div>
                    <div>
                        <p>
                            After a successful career as an entertainer, DGLiang turned to
                            politics. Despite facing personal struggles, he made a
                            successful comeback and eventually became president-elect.
                        </p>
                    </div>
                    <div style="text-align:end">
                        加入時間 1987/94/87
                    </div>
                </div>

                <div class="col-3 row" style="margin-top:2%">
                    <div class="col-10  pl-0 d-flex align-items-center justify-content-end">
                        <button class="btn btn-outline">
                            <i class="btn btn-primary fa-1x">Watch Now！</i>
                        </button>
                    </div>
                    <div class="col-2  p-0 d-flex justify-content-end align-items-center">
                        <button class="btn btn-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-trash text-danger" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                            </svg>
                        </button>
                    </div>


                </div>
            </a>-->
        </div>
    </div>
</div>

@endsection