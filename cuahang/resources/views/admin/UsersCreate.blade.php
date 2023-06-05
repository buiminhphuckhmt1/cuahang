@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<div class="card card-outline rounded-0 card-navy" style="background:none; box-shadow:none">
@if(Request::get("notify") == "username-exists")
	<div class="alert alert-danger">Tài khoản đã tồn tại</div>
	@endif
	<div class="card-body">
		<div class="">
			<div id="msg"></div>
			<form method="post" action="{{ $action }}" id="manage-user" enctype="multipart/form-data">	
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="name">Họ</label>
					<input type="text" name="firstname" id="firstname" class="form-control" value="{{ isset($record->firstname)?$record->firstname:'' }}" required>
				</div>
				<div class="form-group">
					<label for="name">Tên đệm</label>
					<input type="text" name="middlename" id="middlename" class="form-control" value="{{ isset($record->middlename)?$record->middlename:'' }}">
				</div>
				<div class="form-group">
					<label for="name">Tên</label>
					<input type="text" name="lastname" id="lastname" class="form-control" value="{{ isset($record->lastname)?$record->lastname:'' }}" required>
				</div>
				<div class="form-group">
					<label for="name">email</label>
					<input type="email" name="email" id="email" class="form-control" value="{{ isset($record->email)?$record->email:'' }}">
                </div>
				<div class="form-group">
					<label for="username">Tài khoản</label>
					<input type="text" name="username" id="username" class="form-control" value="{{ isset($record->username)?$record->username:'' }}" required  autocomplete="off">
				</div>
				<div class="form-group">
					<label for="password"> Mật khẩu</label>
					<input type="password" name="password" id="password" class="form-control" value="" autocomplete="off">
					<small><i>Để trống phần này nếu bạn không muốn thay đổi mật khẩu...</i></small>
				</div>
                <div class="form-group">
                    <label for="type" class="control-label">Loại tài khoản</label>
                    <select name="type" id="type" class="form-control form-control-sm rounded-0" required>
                    <option value="1" {{ isset($record->type)?$record->type:'' }}>Administrator</option>
                    <option value="2" {{ isset($record->type)?$record->type:'' }}>Registered User</option>
                    </select>
                </div>
				<div class="form-group">
					<label for="" class="control-label">Ảnh đại diện</label>
					<div class="custom-file">
		              <input type="file" class="custom-file-input" id="customFile" name="avatar" >
		            </div>
				</div>
                <div class="form-group d-flex">
                    <div class="col-md-10">
                        <input type="submit" value="Lưu" class="btn btn-primary">
                        <a href="{{ url('backend/users') }}" class="btn btn-primary   rounded-0" form="manage-user"><i class="fa fa-angle-left"></i> Trở về</a>
                    </div>
				</div>
			</form>
		</div>
	</div>
</div>
<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>
@endsection