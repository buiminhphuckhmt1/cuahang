@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<div class="card card-outline rounded-0 card-navy" style="background:none; box-shadow:none">
<div class="container-xxl flex-grow-1 container-p-y">
              <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lý bảng/ Quản lý tài khoản/</span> Sửa thông tin</h5>
              @if(Request::get("notify") == "name-exists")
					      <div class="alert alert-danger">Danh mục đã tồn tại !</div>
					    @endif
              <div class="row">
                <div class="col-xxl">
                      <form method="post" action="{{ $action }}" id="formupdateuser" enctype="multipart/form-data">
					  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="card mb-4">
                    <h5 class="card-header">Thông tin danh mục </h5>
                    <!-- Account -->
                    <hr class="my-0">
                    <div class="card-body">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Tên danh mục</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{ isset($record->name)?$record->name:'' }}" autofocus="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="type" class="form-label">Danh mục cha</label>
                            <select  name="parent_id" id="tupe" class="select2 form-select" placeholder="Chọn danh mục">
                            <option value="" >Chọn danh mục</option>
                            <option value="0" ></option>
                              @foreach($data as $row)
                              <option value="{{ $row->id }}" >{{ $row->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Lưu</button>
                          <a href="{{ url('backend/categorys') }}"><button type="button" class="btn btn-outline-secondary">Trở về</button></a>
                        </div>
                    </div>
                    <!-- /Account -->
                  </div>
                </form>
              </div>
            </div>
          </div>
@endsection