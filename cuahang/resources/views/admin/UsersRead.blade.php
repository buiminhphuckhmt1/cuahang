<!-- load file Layout.blade.php vào đây -->
@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lý bảng /</span> Quản lý tài khoản</h4>
	  <div class="col-lg-4 col-md-6">
			  <!-- <a href="{{ url('backend/users/create') }}" id="create_new" class="btn btn-flat btn-primary">Create New</a> -->
      <div class="mt-3">
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#basicModal">Tạo tài khoản</button>
          <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tạo tài khoản</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ $action }}" id="formcreateuser" enctype="multipart/form-data">
							    <input type="hidden" name="_token" value="{{ csrf_token() }}">
							    <div class="modal-body">
                  <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ asset('upload/user/logo.png')}}"  alt="user-avatar" class="d-block rounded-circle" height="100" width="100" id="uploadedAvatar">
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-2" tabindex="0">
                            <span class="d-none d-sm-block">Tải ảnh lên</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input  type="file" name="avatar" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-2">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Định dạng</span>
                          </button>

                          <p class="text-muted mb-0 fs-tiny ">Cho phép JPG, GIF hoặc PNG. Kích thước tối đa 800K</p>
                        </div>
                      </div>
                    </div>
							    <div class="row g-2">
							  	  <div class="col mb-0">
									    <label for="name">Họ</label>
									    <input type="text" name="firstname" id="firstname" class="form-control" value="{{ isset($record->firstname)?$record->firstname:'' }}" required>                                  
								    </div>
								    <div class="col mb-0">
								  	  <label for="name">Tên đệm</label>
								  	  <input type="text" name="middlename" id="middlename" class="form-control" value="{{ isset($record->middlename)?$record->middlename:'' }}">
                    </div>
                  </div>
							    <div class="row g-2">
                                <div class="col mb-0">
								  <label for="name">Tên</label>
								  <input type="text" name="lastname" id="lastname" class="form-control" value="{{ isset($record->lastname)?$record->lastname:'' }}" required>
                                </div>
								<div class="col mb-0">
								  <label for="name">email</label>
								  <input type="email" name="email" id="email" class="form-control" value="{{ isset($record->email)?$record->email:'' }}">
                                </div>
                                </div>
								<div class="row g-2">
                                  <div class="col mb-0">
								  	<label for="username">Tài khoản</label>
									<input type="text" name="username" id="username" class="form-control" value="{{ isset($record->username)?$record->username:'' }}" required  autocomplete="off">
                                  </div>
                                  <div class="col mb-0">
								  	<label for="password"> Mật khẩu</label>
									<input type="password" name="password" id="password" class="form-control" value="" autocomplete="off">
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
								  <label for="type" class="control-label">Loại tài khoản</label>
									<select name="type" id="type" class="form-select" required>
									<option value="1" {{ isset($record->type)?$record->type:'' }}>Quản trị</option>
									<option value="2" {{ isset($record->type)?$record->type:'' }}>Người dùng</option>
									</select>
                                  </div>
                                  <div class="col mb-0">
                                    <!-- <label for="dobBasic" >Ảnh</label>
                                    <input class="form-control" type="file" id="formFile" name="avatar"> -->
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
					@if(Request::get("notify") == "username-exists")
					<div class="alert alert-danger">Tài khoản đã tồn tại !</div>
					@endif
					@if(Request::get("notify") == "email-exists")
					<div class="alert alert-danger" role="alert">email đã được đăng ký!</div>
					@endif
          @if(Request::get("notify") == "creat-success")
					<div class="alert alert-primary" role="alert">Tạo tài khoản thành công</div>
					@endif
          @if(Request::get("notify") == "update-success")
            <div class="alert alert-primary" role="alert">Cập nhật tài khoản thành công</div>
          @endif
          @if(Request::get("notify") == "delete-success")
					<div class="alert alert-danger">Đã xóa tài khoản !</div>
					@endif
              <div class="card">
                <h5 class="card-header">Danh sách tài khoản</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr style="text-align: center;">
                        <th>STT</th>
						            <th>Ngày cập nhật</th>
                        <th>Ảnh đại diện</th>
                        <th>Họ Tên</th>
						            <th>Tài khoản</th>
                        <th>Loại tài khoản</th>
                        <th>Hành động</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" style="text-align: center;">
                    <?php 
                      $stt=1;
                    ?>
                    @foreach($data as $row)
                                <tr>
                      <td class="text-center">{{$stt++}}</td>
                      <td>{{ $row->date_updated }}</td>
                      <td class="text-center">
                        <ul class="users-list m-0 avatar-group d-flex align-items-center" style="list-style: none;">
                          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                            <img src="{{asset('upload/user/'.$row->avatar)}}" alt="Avatar" class="rounded-circle">                           
                          </li>
                        </ul>                        
                        </td>
                        <td>{{ $row->firstname }} {{ $row->middlename }} {{ $row->lastname }}</td>
                        <td>{{ $row->username }}</td>
                        <td style="text-align: center;">
                        @if ($row->type == 1)
                        <span class="badge bg-label-primary me-1">Quản Trị</span>
                        @elseif ($row->type  == 2)
                          <span class="badge bg-label-primary me-1">Người dùng</span>
                        @else
                          N/A
                        @endif
                      </td>
                        <td>
                          <div class="dropdown" style="text-align: center;">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ url('backend/users/update/'.$row->id) }}"><i class="bx bx-edit-alt me-1"></i> Sửa</a>
                              <a class="dropdown-item" href="{{ url('backend/users/delete/'.$row->id) }}" onclick="return window.confirm('Bạn có xác nhận xóa không');"><i class="bx bx-trash me-1"></i> Xóa</a>
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