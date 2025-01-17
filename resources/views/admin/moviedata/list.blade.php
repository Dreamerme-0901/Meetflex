@extends("admin.layout")
@section("title", "電影資料")
@section("content")

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">電影資料</h1>

    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="col-2">
                        <a href="add" class="btn btn-primary">新增</a>

                        <a href="javascript:doDelete('list')" class="btn btn-danger">刪除</a>
                    </div>
                </div>

                <div class="card-body">
                    <form id="list" method="post" action="/admin/moviedata/delete">
                        {{ csrf_field() }}
                        <table class="table table-striped text-center">
                            <tr class="table-warning">
                                <td><input type="checkbox" class="form-check-input border border-dark" id="all"></td>
                                <td>電影名稱</td>
                                <td>電影圖片</td>
                                <td>電影描述</td>
                                <td>類型</td>
                                <td>上市時間</td>
                                <td>修改</td>
                            </tr>
                            @foreach($list as $data)
                            <tr>
                                <td class="text-center ">
                                    <input type='checkbox' name='id[]' class="chk form-check-input"
                                        value="{{ $data->id }}">
                                </td>
                                <td class="text-center col-1">{{ $data->title }}</td>
                                <td style="width: 18%;">
                                    <img src="http://webdev.alphacamp.io/posters/{{$data ->image}}" style="width: 30%;">
                                </td>

                                <td class="text-center col-4">{{ $data->description }}</td>
                                <td class="text-center col-1">{{ $data->genres }}</td>
                                <td class="text-center col-1">{{ $data->release_date }}</td>
                                <td class="text-center col-2">
                                    <a href='edit/{{ $data->id }}' class='btn btn-success'>修改</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection