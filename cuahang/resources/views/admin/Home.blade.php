<!-- load file layout.badle.php vào đây -->
@extends("admin.Layouthome")
@section("do-du-lieu-vao-layout-home")
<?php
      $user = Auth::user()
    ?>
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-6 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Xin chúc mừng {{$user->firstname}} {{$user->middlename}} {{$user->lastname}}</h5>
                          <p class="mb-4">
                            Bạn đã có  <span class="fw-bold"></span> lượt truy cập vào website của mình.
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img src="{{ asset('admin/assets/admin/layout2/assets/img/illustrations/man-with-laptop-light.png') }}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-4 order-0">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(102, 102, 255, 1);transform: ;msFilter:;"><path d="M4 18h2v4.081L11.101 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2z"></path><path d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z"></path></svg> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(102, 102, 255, 1);transform: ;msFilter:;"><path d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
							</div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class=" mb-1">Tổng số lượt xem</span>
                          <h3 class="card-title mb-2"></h3>
                          <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(102, 102, 255, 1);transform: ;msFilter:;"><path d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z"></path><path d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm1.5 7H8c-3.309 0-6 2.691-6 6v1h2v-1c0-2.206 1.794-4 4-4h3c2.206 0 4 1.794 4 4v1h2v-1c0-3.309-2.691-6-6-6z"></path></svg>                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              </div>
                            </div>
                          </div>
                          <span>Tổng người dùng</span>
                          <h3 class="card-title text-nowrap mb-1"></h3>
                          <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                        </div>
                      </div>
                    </div>
					<div class="col-lg-4 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(102, 102, 255, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 5.589 2 10c0 2.907 1.897 5.516 5 6.934V22l5.34-4.005C17.697 17.854 22 14.32 22 10c0-4.411-4.486-8-10-8zM9.302 13.986H7.503v-1.798l4.976-4.97 1.798 1.799-4.975 4.969zm5.823-5.816-1.799-1.798 1.372-1.371 1.799 1.798-1.372 1.371z"></path></svg>
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <span class="d-block mb-1">Tổng số lượt phản hồi</span>
                          <h3 class="card-title text-nowrap mb-2"></h3>
                          <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
				<div class="col-lg-12 mb-4 order-0">
					<div class="row">
					<!-- Order Statistics -->
					<div class="col-md-6 col-lg-4 order-0 mb-4">
					<div class="card h-100">
						<div class="card-header d-flex align-items-center justify-content-between pb-0">
						<div class="card-title mb-0">
              <h5 class="m-0 me-2">Thống kê bài viết theo danh mục</h5>
							<small class="text-muted">Tổng số bài viết: </small></br>
						</div>
						</div>
						<div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                        <div class="d-flex flex-column align-items-center gap-1">
                          <h2 class="mb-2"></h2>
                          <span >Bài viết &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                        </div>
                        <div id="orderStatisticsChart"></div>
                        
            </div>
						<ul class="p-0 m-0 mt-3">
							<li class="d-flex mb-2 pb-1">
							<div class="avatar flex-shrink-0 me-3">
								<span class="avatar-initial rounded bg-label-primary">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(102, 102, 255, 1);transform: ;msFilter:;"><path d="M17.868 4.504A1 1 0 0 0 17 4H3a1 1 0 0 0-.868 1.496L5.849 12l-3.717 6.504A1 1 0 0 0 3 20h14a1 1 0 0 0 .868-.504l4-7a.998.998 0 0 0 0-.992l-4-7zM16.42 18H4.724l3.145-5.504a.998.998 0 0 0 0-.992L4.724 6H16.42l3.429 6-3.429 6z"></path></svg>
								</span>
							</div>
							<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
								<div class="me-2">
								<h6 class="mb-0"></h6>
								<!-- <small class="text-muted">Mobile, Earbuds, TV</small> -->
								</div>
								<div class="user-progress">
								<small class="fw-semibold"></small>
								</div>
							</div>
							</li>
						</ul>
						</div>
					</div>
					</div>
					<!--/ Order Statistics -->

					<!-- Expense Overview -->
					<div class="col-md-6 col-lg-4 order-0 mb-4">
					    <div class="card">
              <div class="card-header  align-items-center justify-content-between pb-0">
                <div class="card-title mb-0">
                  <h5 class="m-0 me-2">Thống kê lượt truy cập</h5>
                  <small class="text-muted">2023</small></br>
                </div>
              </div>
              
                        <div id="totalRevenueChart" class="px-2"></div>
              </div>
					</div>
					<div class="col-md-6 col-lg-4 order-0 mb-4">
            
                <div class="card d-block">
                  <h5 class="card-header m-0 me-2 pb-3">Thống kê bài viết theo tuần</h5>
                  <div class="card-body px-0">
                    <div class="tab-content p-0">
                      <div class="tab-pane fade show active" >
                        <div class="d-flex p-4 pt-3">
                          <div>
                            <div class="d-flex align-items-center">
                                <!-- <small class="text-success fw-semibold">
                                  <i class="bx bx-chevron-up"></i>
                                  42.9%
                                </small> -->
                            </div>
                          </div>
                        </div>
                        <div id="incomeChart"></div>
                      </div>
                    </div>
                  </div>

                  <h5 class="card-header m-0 me-2 pb-3">Thống kê bài viết theo tháng</h5>
                  <div class="card-body px-0">
                    <div class="tab-content p-0">
                      <div class="tab-pane fade show active" >
                        <div class="d-flex p-4 pt-3">
                          <div>
                            <div class="d-flex align-items-center">
                                <!-- <small class="text-success fw-semibold">
                                  <i class="bx bx-chevron-up"></i>
                                  42.9%
                                </small> -->
                            </div>
                          </div>
                        </div>
                        <div id="incomemonthChart"></div>
                      </div>
                    </div>
                  </div>
                </div>
					</div>
					<!--/ Expense Overview -->
				</div>
				</div>
              </div>
            </div>
   
            <!-- / Content -->
@endsection