@extends('layouts.app')

@section('content')

@include('layouts.nav') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm truyện</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{route('danhmuc.store')}}">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên danh mục</label> 
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục ...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả danh mục</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mô tả danh mục ...">
                        </div>
                    <div class="form-group">
                        <select class="custom-select">
                            <label for="exampleInputEmail1"></label>Kích hoạt</label>
                            <option value="2">Kích hoạt</option>
                            <option value="3">Không kích hoạt</option>
                          </select>
                    </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
