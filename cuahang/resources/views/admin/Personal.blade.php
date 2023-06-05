@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<div class="card card-outline rounded-0 card-navy" style="background:none; box-shadow:none">
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Thông tin tài khoản</h4>
              @if(Request::get("notify") == "personal-success")
                    <div class="alert alert-primary" role="alert">Cập nhật tài khoản thành công</div>
                @endif
              <div class="row">
                <div class="col-xxl">
                      <form method="post" action="{{ $action }}" id="formupdateuser" enctype="multipart/form-data">
					  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="card mb-4">
                    <h5 class="card-header">Thông tin tài khoản</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{asset('upload/user/'.$record->avatar)}}"  alt="user-avatar" class="d-block rounded-circle" height="100" width="100" id="uploadedAvatar">
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Tải ảnh lên</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input  type="file" name="avatar" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Định dạng</span>
                          </button>

                          <p class="text-muted mb-0">Cho phép JPG, GIF hoặc PNG. Kích thước tối đa 800K</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstname" class="form-label">Họ</label>
                            <input class="form-control" type="text" id="firstname" name="firstname" value="{{ isset($record->firstname)?$record->firstname:'' }}" autofocus="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="middlename" class="form-label">Tên đệm</label>
                            <input class="form-control" type="text" name="middlename" id="middlename" value="{{ isset($record->middlename)?$record->middlename:'' }}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastname" class="form-label">Tên</label>
                            <input class="form-control" type="text" name="lastname" id="lastname" value="{{ isset($record->lastname)?$record->lastname:'' }}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control" type="email" id="email" name="email" value="{{ isset($record->email)?$record->email:'' }}" readonly>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="type" class="form-label">Loại tài khoản</label>
                            <select  name="type" id="tupe" class="select2 form-select">
                              <option value="1" @if($record->type=='1'){{ 'selected' }} @endif>Quản trị</option>
									            <option value="2" @if($record->type=='2'){{ 'selected' }} @endif>Người dùng</option>
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="username">Tài khoản</label>
                            <div class="input-group input-group-merge">
                              <input type="text" id="username" name="username" class="form-control" value="{{ isset($record->username)?$record->username:'' }}" readonly>
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password" value="">
                            <small><i>Để trống phần này nếu bạn không muốn thay đổi mật khẩu...</i></small>  
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Lưu</button>
                          <a href="{{ url('backend/users') }}"><button type="submit" class="btn btn-outline-secondary">Trở về</button></a>
                        </div>
                    </div>
                    <!-- /Account -->
                  </div>
                </form>
              </div>
            </div>
          </div>
@endsection