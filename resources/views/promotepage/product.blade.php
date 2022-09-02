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
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">หน้าสินค้าทั้งหมด</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">หน้านี้จะแจ้งข่าวสาร และกิจกรรมต่าง ๆของทางร้าน</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teachers -->
<section class="section">
  <div data-ref="mixitup-target" class="container">
    <div class="row">
      <div class="col-12">
        <!-- teacher category list -->
        <ul class="list-inline text-center filter-controls mb-5">
          <li class="list-inline-item m-3 text-uppercase" data-filter=".arts">ทั้งหมด</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".bio-science">เขียมขัด</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".business-study">กระเป๋าตัง</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".law">ผ้าเช็ดหน้า</li>
        </ul>
      </div>
    </div>
    <!-- teacher list -->
    <div class="row" data-ref="mixitup-container">
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts law">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/product/flannel1.jpg" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p>ราคา</p>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5  arts bio-science">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('template/promote/images/product/belt-3.jpg')}}" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p>ราคา</p>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts business-study">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('template/promote/images/product/wallet2.jpg')}}" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p>ราคา</p>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 bio-science science arts">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('template/promote/images/product/belt-4.jpg')}}" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p>ราคา</p>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 law arts">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('template/promote/images/product/flannel2.jpg')}}" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p>ราคา</p>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 science arts">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('template/promote/images/product/belt-3.jpg')}}" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p>ราคา</p>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 bio-science arts">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('template/promote/images/product/belt-5.jpg')}}" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p>ราคา</p>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 bio-science arts">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('template/promote/images/product/belt-2.jpg')}}" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p>ราคา</p>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 business-study arts">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('template/promote/images/product/wallet1.jpg')}}" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p>ราคา</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /teachers -->

@stop