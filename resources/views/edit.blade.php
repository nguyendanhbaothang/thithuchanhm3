<h2>Chỉnh sửa danh sách chi tiêu </h2>
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <form method="POST" action="{{route('chitieu.update',[$chitieu->id])}}" enctype= "multipart/form-data" >
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Danh mục</label>
      <input type="text" class="form-control" name="danhmuc" id="exampleInputEmail1"  value="{{$chitieu->danhmuc}}" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Ngyaf</label>
      <input type="date" name="ngay" class="form-control"value="{{$chitieu->ngay }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" id="exampleInputEmail1"value="{{$chitieu->price }}" aria-describedby="emailHelp">
        @error('price')
              <div style="color: red">{{$message}}</div>
      @enderror
    </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Note</label>
        <input type="text" class="form-control" name="note" id="exampleInputEmail1"value="{{$chitieu->note }}" aria-describedby="emailHelp">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ route('chitieu.index') }}">Quay lại</a>
    </div>
  </form>
</div>
