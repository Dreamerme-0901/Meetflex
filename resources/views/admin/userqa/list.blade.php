@extends("admin.layout")
@section("title", "使用者Q&A")
@section("content")

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">使用者Q&A</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-2">
                            <a href="add" class="btn btn-primary">新增</a>
                        </div>
                        <div class="col-2">
                            <a href="javascript:doDelete('list')" class="btn btn-danger">刪除</a>
                        </div>
                    </div>
                </div>
            </div>
            <form id="list" method="post" action="/admin/userqa/delete">
                {{ csrf_field() }}
                <table class="table table-border">
                    <tr class="table-warning">
                        <th class="col-1 text-center"></th>
                        <th class="col-3 text-center">標題</th>
                        <th class="col-6 text-center">內容</th>
                        <th class="col-2 text-center">修改</th>
                    </tr>
                    @foreach($list as $data)
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" name="id[]" class="chk form-check-input border border-dark"
                                value="{{ $data->id }}">
                        </td>
                        <td class="text-center">{{ $data->title }}</td>
                        <td class="text-center">{{ $data->content }}</td>
                        <td class="text-center">
                            <a href="edit/{{ $data->id }}" class="btn btn-success">修改</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </form>
        </div>
    </div>
</div>
@endsection