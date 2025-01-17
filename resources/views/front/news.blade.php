@extends("front.app")
@section("content")
@section("title","NEWS")

<div class="container mt-5">
    <h1 style="color: white;margin-top:9%; text-align:center;">News</h1>
    <div class="m-auto list-group col-9 ">
        @foreach($list as $data)
        <a href="#" class="list-group-item  d-flex align-items-start bg-light p-2 text-black bg-opacity-75"
            data-bs-toggle="modal" data-bs-target="#exampleModalToggle{{ $data->id }}">
            <img src="/images/{{ $data->image }}" alt="DGLiang" class="img-fluid rounded me-3"
                style="width: 10%; height: 10%;">
            <div>
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-3">{{ $data->title }}</h5>
                    <small class="position-absolute end-0">{{$data->createTime}}</small>
                </div>
                <p class="mb-1">{{ $data->content }}</p>
                <p></p>
            </div>
        </a>
        @endforeach
    </div>
</div>

@foreach($list as $data)
<!-- Modal -->
<div class="modal fade" id="exampleModalToggle{{ $data->id }}" aria-hidden="true"
    aria-labelledby="exampleModalToggle{{ $data->id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">{{ $data->title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $data->content }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach



<!--<a href="#"
            class="list-group-item list-group-item-action d-flex align-items-start bg-light p-2 text-black bg-opacity-75">
            <img src="/images/pig.jpg" alt="DGLiang" class="img-fluid rounded me-3" style="width: 10%; height: 10%;">
            <div>
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-3">DGLiang never leave！！！</h5>
                    <small>1987/94/87</small>
                </div>
                <p class="mb-1">After a successful career as an entertainer, DGLiang turned to politics.
                <p>Despite facing personal struggles, he made a successful comeback and eventually became
                    president-elect.</p>
            </div>
        </a>

        <a href="#"
            class="list-group-item list-group-item-action d-flex align-items-start bg-light p-2 text-black bg-opacity-75">
            <img src="/images/pig2.jpg" alt="DGLiang" class="img-fluid rounded me-3" style="width: 10%; height: 10%;">
            <div>
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-3">DGLiang never leave！！！</h5>
                    <small>1987/94/87</small>
                </div>
                <p class="mb-1">After a successful career as an entertainer, DGLiang turned to politics.
                <p>Despite facing personal struggles, he made a successful comeback and eventually became
                    president-elect.</p>
            </div>
        </a>

        <a href="#"
            class="list-group-item list-group-item-action d-flex align-items-start bg-light p-2 text-black bg-opacity-75">
            <img src="/images/main.png" alt="DGLiang" class="img-fluid rounded me-3" style="width: 10%; height: 10%;">
            <div>
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-3">DGLiang never leave！！！</h5>
                    <small>1987/94/87</small>
                </div>
                <p class="mb-1">After a successful career as an entertainer, DGLiang turned to politics.
                <p>Despite facing personal struggles, he made a successful comeback and eventually became
                    president-elect.</p>
            </div>
        </a>-->




@endsection