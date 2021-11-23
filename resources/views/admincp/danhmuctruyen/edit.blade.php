@extends('layouts.app')

@section('content')

@include('layouts.nav') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-header">Cập Nhật Danh Mục Truyện</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{route('danhmuc.update', [$danhmuc ->id])}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên Danh Mục</label> 
                          <input type="text" class="form-control" value="{{$danhmuc ->tendanhmuc}}" name="tendanhmuc" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục ...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả danh mục</label>
                            <input type="text" name="mota" value="{{$danhmuc ->mota}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mô tả danh mục ...">
                        </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1"></label>Kích hoạt</label>
                        <select name="kichhoat" class="custom-select">
                            @if($danhmuc->kichhoat == 0)
                            <option selected value="0">Kích hoạt</option>
                            <option value="1">Không kích hoạt</option>
                            @else
                            <option value="0">Kích hoạt</option>
                            <option selected value="1">Không kích hoạt</option>
                            @endif
                          </select>
                    </div>
                        <button type="submit" name="themdanhmuc" class="btn btn-primary">Cập nhật</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
