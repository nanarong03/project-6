<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+443003030266"><strong>CALL</strong> +66  090-945-7900</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">เข้าสู่ระบบ</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">สมัครสมาชิค</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="index.php"><img src="{{ asset('template/promote/images/belt.png') }} " alt="logo" width = 250px></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">หน้าแรก</a>
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                ข้อมูลสินค้า
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="product.php">สินค้า</a>
                <a class="dropdown-item" href="teacher-single.php">สินค้าเเนะนำ</a>
          <!--  <a class="dropdown-item" href="notice.php">Notice</a>
                <a class="dropdown-item" href="notice-single.php">Notice Details</a>
                <a class="dropdown-item" href="research.php">Research</a>
                <a class="dropdown-item" href="scholarship.php">Scholarship</a>
                <a class="dropdown-item" href="course-single.php">Course Details</a>
                <a class="dropdown-item" href="event-single.php">Event Details</a>
                <a class="dropdown-item" href="blog-single.php">Blog Details</a> -->
              </div>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about.php">ข่าวสารกิจกรรม</a>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="contact.php">ที่อยู่ - ติดต่อ</a>
              
            </li>

            <li class="nav-item @@contact">
              <a class="nav-link" href="{{ url('/admin/home') }}">admin</a>
            </li>

            <li class="nav-item @@contact">
              <a class="nav-link" href="{{ route('login') }}">login</a>
            </li>

            <li class="nav-item @@contact">
              <a class="nav-link" href="{{ route('register') }}">register</a>
            </li>




            @if (Route::has('login'))
              @auth
              <li class="nav-item @@contact"><a class="nav-link" href="{{ url('/admin/home') }}">admin</a></li>

            @else
            <li class="nav-item @@contact"><a class="nav-link" href="{{ route('login') }}">login</a></li>

            @if (Route::has('register'))
            <li class="nav-item @@contact"><a class="nav-link" href="{{ route('register') }}">register</a></li>

            @endif

            @endauth
            
            @endif

          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->