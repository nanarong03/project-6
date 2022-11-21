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

<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="url('template/promote/images/banner/belt.jpg')">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3"
              data-animation-in="fadeInLeft" data-delay-in=".1">BB belt shop</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3"
              data-animation-in="fadeInLeft" data-delay-in=".4">ร้านขายเข็มขัด บีบี</p>
            <a href="contact.php" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5"
              data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">ที่อยู่ - ที่ติดต่อ</a>
          </div>
        </div>
      </div>
      <div class="hero-slider-item">

      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class="bg-gray">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg- align-self-end">
        <!-- <section class="hero-section bg-cover" data-background="images/banner/belt-index-top.jpg"> -->

        <img class="img-fluid w-100" src="{{ asset('template/promote/images/banner/belt-index-top.jpg') }}  " alt="banner-feature">
      </div>
      <div class="col-xl-8 col-lg-7">
        <h3>ความรู้เกี่ยวกับยี่ห้อต่าง ๆ</h3>
        <p> </p><br>
        <div class="row feature-blocks bg-gray justify-content-between">
          <h5>Gucci</h5>
          <p> Gucci จากอิตาลี ที่ครองใจสายแฟชั่นมาโดยตลอด กับหัวเข็มขัดสัญลักษณ์ Double G (GG) ที่ได้รับความนิยมสูง
            โดยส่วนใหญ่แล้วจะใช้วัสดุที่ทำมาจากหนังวัวและหนังจระเข้ ซึ่งจะให้ลุคที่ดูหรูหรามีระดับ
            สำหรับเข็มขัดหนังของผู้ชายจะเน้นความเรียบหรู ดูคลาสสิก ส่วนของผู้หญิงจะเน้นไปทางดีไซน์แฟชั่น มีลวดลาย
            สีสันที่หลากหลายกว่า</p>
          <h5>CK (Calvin Klein)</h5>
          <p> CK (Calvin Klein) ก็มีเข็มขัดหนังแท้ที่ดีไซน์หัวเข็มขัดสัญลักษณ์ CK ถูกใจสไตล์คนรุ่นใหม่ เหมาะกับลุค
            Casual สร้างความสะดุดตามากขึ้น </p>
          <h5>Lacoste</h5>
          <p>Lacoste ที่โดดเด่นในเรื่องการใช้หนังมาผลิตเป็นเครื่องประดับต่าง ๆ ทั้งเข็มขัด กระเป๋าสตางค์และรองเท้า
            ซึ่งเครื่องหนังมีอายุการใช้งานยาวนาน ทนทาน ยิ่งใช้นานหนังก็จะยิ่งขึ้นเงา
            ช่วยเสริมลุคทางการหรือใส่ในชีวิตประจำวันให้ดูดีขึ้นได้ มีหัวเข็มขัดโลหะสลักลายจระเข้ตัวล็อกแบบอัตโนมัติ
            สวมใส่ง่ายและเพิ่มความสุขุมมากขึ้น</p>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">หนังที่ใช้ทำ</h2>
        <p> - หนังวัว เป็นเข็มขัดหนังแท้ที่นิยมใส่กันมากที่สุดเลยก็ว่าได้
          เพราะเป็นวัสดุที่มีความทนทานสูงและก็มีความอ่อนนุ่มด้วย สีเข็มขัดส่วนใหญ่จะเป็นสีน้ำตาลหรือสีดำ ไม่มีลวดลาย
          ดูเรียบหรู จึงเหมาะกับลุคทางการหรือแมทช์กับลุคสบาย ๆ ก็ได้
        </p>
        <p>
          - หนังจระเข้ ก็เป็นที่นิยมไม่แพ้กัน แต่ราคาค่อนข้างสูง เพราะต้องใช้เทคนิคพิเศษในการผลิต
          นำมาใส่เสริมลุคเรียบหรูได้ การนำหนังจระเข้มาทำเข็มขัด โดยส่วนใหญ่แล้วจะใช้หนังส่วนท้องและส่วนหลังกระดูกคู่
          ที่ให้ลวดลายสวยงาม
        </p>
        <p>
          - หนังงู หากใครที่ชอบเข็มขัดที่มีลวดลายและสีสันโดดเด่น ให้เข็มขัดหนังงูเป็นอีกหนึ่งตัวเลือกสำหรับสายแฟชั่น
          ซึึ่งหนังงูมีลายเฉพาะที่เป็นเอกลักษณ์ของแต่ละชนิด เช่น หนังงูเหลือม ก็นำมาทำเข็มขัดเช่นกัน ทั้งนี้
          ก็อยู่ที่รสนิยมของแต่ละคนด้วย
        </p>
        <p>
          - หนังนกกระจอกเทศ ช่วยเสริมลุคของคุณให้โดดเด่นได้ ด้วยลายที่เป็นเอกลักษณ์เฉพาะตัวกับลายจุดรอบเข็มขัด
          หนังนกกระจอกเทศจะมีความหนากว่าชนิดอื่นและราคาสูง เพราะต้องใช้เทคนิคขั้นสูงในการทำเข็มขัดเช่นกัน
          สีเข็มขัดสวยและดูดีจากสีของธรรมชาติ สามารถใส่กับลุคกึ่งทางการได้
        </p>
        <p>
          นอกจากนี้ ยังมีหนังปลากระเบน หนังกิ้งก่าและอื่น ๆ ที่ให้ความสวยแปลกตาจากลายของสัตว์ชนิดนั้น
          การเลือกเข็มขัดจึงบ่งบอกถึงความชอบและรสนิยมของผู้สวมใส่
        </p>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="{{ asset('template/promote/images/about/belt-1.jpg') }}" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- courses -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">สินค้าเเนะนำ</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="product.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">ดูสินค้า</a>
          </div>
        </div>
      </div>
    </div>
    <!-- course list -->
    <div class="row justify-content-center">
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
      @foreach($products as $row)
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('admin/upload/present/' .$row->picture )}}" alt="course thumb">
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title">{{$row->name}}</h4>
            </a>
            <p class="card-text mb-4">{{$row->price}}</p>
          </div>
        </div>
      </div>
      <!-- course item -->
      <!-- <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('template/promote/images/courses/belt-2.jfif') }}" alt="course thumb">
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p class="card-text mb-4"> ราคา</p>
          </div>
        </div>
      </div> -->
      <!-- course item -->
      <!-- <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('template/promote/images/courses/belt-3.jpg') }}" alt="course thumb">
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title">ชื่อสินค้า - ประเภท</h4>
            </a>
            <p class="card-text mb-4"> ราคา</p>
          </div>
        </div>
      </div> -->
      <!-- mobile see all button -->
      <div class="row">
        <div class="col-12 text-center">
          <a href="courses.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
        </div>
      </div>
      @endforeach
    </div>
</section>
<!-- /courses -->

<!-- cta -->
<section class="section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h6 class="text-white font-secondary mb-0">สนใจเข้าร่วมเป็นสมาชิก มีส่วนลดมากมาย</h6>
        <h2 class="section-title text-white">BB belt shop</h2>
        <a href="contact.html" class="btn btn-secondary">เข้าร่วม</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->

{{-- <!-- success story -->
<section class="section bg-cover" data-background="images/backgrounds/belt-r.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h3 class="section-title">ความเป็นมาเกี่ยวกับเข็มขัด</h3>
          <p>ที่เริ่มต้นจากการใช้เก็บสิ่งของ
            บันทึกเกี่ยวกับการใช้เข็มขัดของมนุษย์ เริ่มต้นในช่วงยุคสำริดเมื่อ 5 - 3 พันปีก่อน
            ในฐานะของที่ผู้ชายสวมใส่ก่อน หลังจากนั้นเมื่อเทรนด์แฟชั่นของมนุษย์เปลี่ยนไปตามกาลเวลา
            ก็ปรากฏหลักฐานว่าผู้เองก็ใส่เข็มขัดด้วย</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story --> --}}

<!--Row-->
{{-- <section class="section bg-cover" data-background="images/backgrounds/belt-row.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
      </div>
    </div>
  </div>
</section> --}}

<!-- footer -->
<footer>
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="{{ asset('template/promote/images/belt.png') }}" alt="logo"
              width=250px></a>
          <ul class="list-unstyled">
            <li class="mb-4">VCG5+MC5 Unnamed Road ตำบล เสาธงหิน อำเภอบางใหญ่ นนทบุรี 11140</li>
            <li class="mb-2">090-945-7900</li>
            <li class="mb-2">tae0972126801@gmail.com</li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.facebook.com/themefisher"><i
                  class="ti-facebook text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places">
</script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>



@stop
