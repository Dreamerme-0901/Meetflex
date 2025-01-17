@extends("admin.layout")
@section("title", "會員資料")
@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">會員資料</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-2">
                            <a href="add" class="btn btn-primary">新增</a>
                            <a href="javascript:doDelete('list')" class="btn btn-danger">刪除</a>
                        </div>
                    </div>
                </div>
            </div>
            <form id="list" method="post" action="/admin/userdata/delete">
                {{ csrf_field() }}
                <table class="table table-border">
                    <tr class="table-warning">
                        <th class="col-1 text-center"></th>
                        <th class="col-2 text-center">email</th>
                        <th class="col-2 text-center">帳號</th>
                        <th class="col-2 text-center">密碼</th>
                        <th class="col-2 text-center">country</th>
                        <th class="col-2 text-center">state</th>
                        <th class="col-2 text-center">修改</th>
                    </tr>
                    @foreach($list as $data)
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" name="id[]" class="chk form-check-input border border-dark"
                                value="{{ $data->id }}">
                        </td>
                        <td class="text-center">{{ $data->email }}</td>
                        <td class="text-center">{{ $data->account }}</td>
                        <td class="text-center">{{ $data->password }}</td>
                        <td class="text-center">{{ $data->country }}</td>
                        <td class="text-center">{{ $data->state }}</td>
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