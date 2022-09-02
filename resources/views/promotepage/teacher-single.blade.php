@extends('layouts.promote')
@section('content')

<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/belt-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="product.php">ข้อมูลสินค้า</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">สินค้าเเนะนำ</li>
        </ul>
        <p class="text-lighten">สินค้าที่ลดราคามากสุดในร้าน</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teacher details -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mb-5">
        <img class="img-fluid w-100" src="{{asset('template/promote/images/product/belt-3.jpg')}}" alt="teacher">
      </div>
      <div class="col-md-6 mb-5">
        <h3>ชื่อสินค้า</h3>
        <h6 class="text-color">ราคา</h6>
        <p class="mb-5">จัดโปรลดราคามากสุดในร้าน</p>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h4 class="mb-4">ประเภทสินค้า</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color">ชื่อประเภท</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <h4 class="mb-4">ชื่อแบรนด์สินค้า</h4>
            <ul class="list-unstyled">
              <li class="mb-3">แบรน์...</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12">
        <h4 class="mb-4">รายระเอียดสินค้า</h4>
        <p class="mb-5">รายระเอียด...</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">
        <h4 class="mb-4">ดูสินค้าอื่น ๆของทางร้าน</h4>
      </div>
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('template/promote/images/courses/belt.jpg')}}" alt="course thumb">
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><a class="text-color" href="#">สินค้า</a></li>
            </ul>
            <a href="product.php">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p class="card-text mb-4">ราคา</p>
            <a href="product.php" class="btn btn-primary btn-sm">ดูสินเพิ่มเติม</a>
          </div>
        </div>
      </div>
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('template/promote/images/courses/belt-3.jpg')}}" alt="course thumb">
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><a class="text-color" href="#">สินค้า</a></li>
            </ul>
            <a href="product.php">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p class="card-text mb-4">ราคา</p>
            <a href="product.php" class="btn btn-primary btn-sm">ดูสินเพิ่มเติม</a>
          </div>
        </div>
      </div>
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('template/promote/images/courses/belt-2.jfif')}}" alt="course thumb">
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><a class="text-color" href="#">สินค้า</a></li>
            </ul>
            <a href="product.php">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p class="card-text mb-4">ราคา</p>
            <a href="product.php" class="btn btn-primary btn-sm">ดูสินเพิ่มเติม</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /teacher details -->

@stop