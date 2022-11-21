<h1>Danh sách chi tiêu</h1>
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<a class="btn btn-success" href="{{route('chitieu.create')}}">Thêm chi tiêu </a>
<table class="table">
    <div class="col-6">
    </div>
    <thead>
      <tr>
        <th scope="col">Số thứ tự</th>
        <th scope="col">Danh mục</th>
        <th scope="col">Ngày</th>
        <th scope="col">số tiền</th>
        <th scope="col">Ghi chú</th>
        <th adta-breakpoints="xs">Quản lí</th>
      </tr>
    </thead>
    <tbody id="myTable">
        @foreach ($chitieu as $key => $team)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{ $team->danhmuc }}</td>
            <td>{{$team->ngay }}</td>
            <td>{{$team->price }}</td>
            <td>{{$team->note }}</td>
            <td>
                    <form action="{{route('chitieu.destroy',[$team->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button onclick="return confirm('Bạn có chắc chắn xóa không?');" class="btn btn-danger">Xóa</button>
                        <a href="{{route('chitieu.edit',[$team->id])}}" class="btn btn-primary">Sửa</a>
                    </form>
            </td>
          </tr>
@endforeach


    </tbody>
  </table>
</div>
