@extends("front.app")
@section("content")
@section("title","HomePage")
<style>
.heart {
    width: 25px;
    height: 25px;
    color: red;
    cursor: pointer;
}
</style>



<div class="col-9 container d-flex flex-wrap mainPage" style="margin-top: 8%">
    @foreach($list as $data)
    <div class="card m-3" style="width: 22rem;">
        <img src="/images/{{ $data->image }}" class="card-img-top" width="100%" height="55%" />
        <div class="card-body">
            <h5 class="card-title">{{ $data->title }}</h5>
            <p class="card-text text-truncate">
                {{ $data->description }}
            </p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#movieDetail{{ $data->id }}">More</button>

            @if(!in_array($data->id, $likeList))
            <button type="button" class="btn btn-outline-light" onclick="toggleLike(this)" name="like{{ $data->id }}"
                id="{{ $data->id }}">
                <svg class="heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor">
                    <path class="svg-img"
                        d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.6 7.6 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z" />
                </svg>
            </button>
            @else
            <button type="button" class="btn btn-outline-light" onclick="toggleLike(this)" name="ulike{{ $data->id }}"
                id="{{ $data->id }}">
                <svg class="heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor">
                    <path class="svg-img"
                        d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1" />
                </svg>
            </button>
            @endif
        </div>
    </div>
    @endforeach
</div>

@foreach($list as $data)
<div class="modal fade" id="movieDetail{{ $data->id }}" tabindex="1" aria-labelledby="movieDetail{{ $data->id }}"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="movieTitle">{{ $data->title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row">
                <div class="col-6 text-center mt-3 mb-3">
                    <img src="/images/{{ $data->image }}" class="card-img-top " style="width: 300px; height: 500px" />
                </div>
                <div class="modal-body col-6">
                    <form>
                        <p class="card-text">
                            {{ $data->description }}
                        </p>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach


<script>
function toggleLike(svg) {
    if (svg.name === "like" + svg.id) {
        $.ajax({
            url: `front/insert/${svg.id}`,
            type: "post",
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function() {
                location.reload()
            }
        });
    } else {
        $.ajax({
            url: `front/delete/${svg.id}`,
            type: "post",
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function() {
                location.reload()
            }
        });
    }
}
</script>


@endsection