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
              <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword"
                placeholder="Password">
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
            <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword"
              placeholder="Password">
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
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="teacher.html">หน้าแรก</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">ที่อยู่ - ติดต่อ</li>
        </ul>
        <p class="text-lighten">หน้านี้สามารถดูที่อยู่และติดต่อเราได้</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">ค้นหาที่ตั้งของเรา</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <form action="#">
        <div class="col-lg-5">
        <p class="mb-5">VCG5+MC5 Unnamed Road ตำบล เสาธงหิน อำเภอบางใหญ่ นนทบุรี 11140</p>
        <a href="tel:+6609-0945-7900" class="text-color h5 d-block">+6609-0945-7900</a>
        <a href="mailto:tae0972126801@gmail.com" class="mb-5 text-color h5 d-block">tae0972126801@gmail.com</a>
      </div>
    </form>
</section>
<!-- /contact -->

<!-- gmap -->
<section class="section pt-0">
  <!-- Google Map -->
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15493.5628152732!2d100.39645632666011!3d13.875571244277937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2916713cffc13%3A0x909b1034858a7805!2z4Lij4LmJ4Liy4LiZ4LiC4Lit4LmA4Lil4LmI4LiZIOC4muC4teC4muC4tSDguJrguLLguIfguYPguKvguI3guYgo4Lij4LmJ4Liy4LiZ4LiB4Lit4Lil4LmM4Lif4Lic4Lih4Lii4Liy4LinKQ!5e0!3m2!1sth!2sth!4v1658653253909!5m2!1sth!2sth"
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
  <!-- /gmap -->
@stop
