@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lý bảng /</span> Quản lý danh mục sản phẩm</h5>
	  <div class="col-lg-4 col-md-6">
			  <!-- <a href="{{ url('backend/users/create') }}" id="create_new" class="btn btn-flat btn-primary">Create New</a> -->
      <div class="mt-3">
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#basicModal">Thêm danh mục</button>
          <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Thêm danh mục</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ $action }}" id="formcreateuser" enctype="multipart/form-data">
							    <input type="hidden" name="_token" value="{{ csrf_token() }}">
							    <div class="modal-body">
							    <div class="row g-2">
							  	    <div class="col mb-0">
									    <label for="name">Tên danh mục</label>
									    <input type="text" name="name" id="name" class="form-control"  required>                                  
								    </div>
                                    <div class="col mb-0">
								    <label for="type" class="control-label">Danh mục cha</label>
									<select name="parent_id" id="type" class="form-select" placeholder="Chọn danh mục" required>
                  <option value="" >Chọn danh mục</option>
                  <option value="0" ></option>
                  @foreach($data as $row)
                  <option value="{{ $row->id }}" >{{ $row->name }}</option>
                  @endforeach
									   
									</select>
                                  </div>
                                </div>
								</div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Đóng
                                </button>
                                <button type="submit" form="formcreateuser" value="Submit" class="btn btn-primary">Lưu</button>
                              </div>
							  </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> 
					@if(Request::get("notify") == "name-exists")
					    <div class="alert alert-danger">Danh mục đã tồn tại !</div>
					@endif
                    @if(Request::get("notify") == "creat-success")
                        <div class="alert alert-primary" role="alert">Tạo danh mục thành công</div>
                    @endif
                    @if(Request::get("notify") == "update-success")
                        <div class="alert alert-primary" role="alert">Cập nhật danh mục thành công</div>
                    @endif
                    @if(Request::get("notify") == "delete-success")
					    <div class="alert alert-danger">Đã xóa danh mục !</div>
					@endif
              <div class="card">
                <h5 class="card-header">Danh sách danh mục</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr style="text-align: center;">
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Ngày cập nhật</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" style="text-align: center;">
                    <?php 
                      $stt=1;
                    ?>
                    @foreach($data as $row)
                    <?php 
                      $categoriesSub = $row->id;
                    ?>
                    <tr>
                        <td class="text-center">{{$stt++}}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->date_updated }}</td>
                        <td>
                          <div class="dropdown" style="text-align: center;">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ url('backend/categorys/update/'.$row->id) }}"><i class="bx bx-edit-alt me-1"></i> Sửa</a>
                              <a class="dropdown-item" href="{{ url('backend/categorys/delete/'.$row->id) }}" onclick="return window.confirm('Bạn có xác nhận xóa không');"><i class="bx bx-trash me-1"></i> Xóa</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      
					            @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
			  <div style="margin:20px 0;"></div>
			{{ $data->links('admin.pagination-cus') }}
            </div>
          </div>
@endsection