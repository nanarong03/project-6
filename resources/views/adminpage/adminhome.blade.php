@extends('layouts.admin')
@section('content')


<style>
.button {

border: none;
color: white;
padding: 16px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
transition-duration: 0.4s;
cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid black;
}

.button1:hover {
  background-color: gray;
  color: white;
}

.button2 {
  background-color: whitesmoke; 
  color: black; 
  border: 2px solid black;
}

.button2:hover {
  background-color: gray;
  color: white;
}

div {text-align: center;}


image{
  width: 100%;
  height: 400px;
  background-image: url('belt.1.jpg');
  background-size: 100% 100%;
  border: 1px solid red;
}

</style>
</head>


      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>



        
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <h2 class="mb-0"> ยินดีต้อน! <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">เข้าสู่เว็บไซต์ของเรา</span>
              </h2>
              <div class="d-flex">
                
                  <i></i><a href="login.php" class="button button2 btn-sm ml-1">เข้าสู่ระบบ</button></a>
                  
                  
                  <i></i><a href="register.php" class="button button2 btn-sm ml-1">สมัครสมาชิก</button></a>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
                <div class="row">
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-warning">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Sales</p>
                            <h2 class="text-white"> $8,753.<span class="h5">00</span>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                        </div>
                        <h6 class="text-white">18.33% Since last month</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-danger">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Margin</p>
                            <h2 class="text-white"> $5,300.<span class="h5">00</span>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                        </div>
                        <h6 class="text-white">13.21% Since last month</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                    <div class="card bg-primary">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Orders</p>
                            <h2 class="text-white"> $1,753.<span class="h5">00</span>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                        </div>
                        <h6 class="text-white">67.98% Since last month</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">
                    <div class="card bg-success">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Affiliate</p>
                            <h2 class="text-white">2368</h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-success"></i>
                        </div>
                        <h6 class="text-white">20.32% Since last month</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12 text-md-right">
                        <button type="button" class="btn btn-icon-text mb-3 mb-sm-0 btn-inverse-primary font-weight-normal">
                          <i class="mdi mdi-email btn-icon-prepend"></i>Download Report </button>
                    </div>

                      <h5>ความรู้เกี่ยวกับยี่ห้อต่าง ๆ</h5>
                        <p class="text-muted"> Gucci
                        Gucci จากอิตาลี ที่ครองใจสายแฟชั่นมาโดยตลอด กับหัวเข็มขัดสัญลักษณ์ Double G (GG) 
                        ที่ได้รับความนิยมสูง โดยส่วนใหญ่แล้วจะใช้วัสดุที่ทำมาจากหนังวัวและหนังจระเข้ ซึ่งจะให้ลุคที่ดูหรูหรามีระดับ 
                        สำหรับเข็มขัดหนังของผู้ชายจะเน้นความเรียบหรู ดูคลาสสิก  ส่วนของผู้หญิงจะเน้นไปทางดีไซน์แฟชั่น มีลวดลาย สีสันที่หลากหลายกว่า
                        CK (Calvin Klein) CK (Calvin Klein) ก็มีเข็มขัดหนังแท้ที่ดีไซน์หัวเข็มขัดสัญลักษณ์ 
                        CK ถูกใจสไตล์คนรุ่นใหม่ เหมาะกับลุค Casual สร้างความสะดุดตามากขึ้น Lacoste
                        Lacoste ที่โดดเด่นในเรื่องการใช้หนังมาผลิตเป็นเครื่องประดับต่าง ๆ ทั้งเข็มขัด กระเป๋าสตางค์และรองเท้า 
                        ซึ่งเครื่องหนังมีอายุการใช้งานยาวนาน ทนทาน ยิ่งใช้นานหนังก็จะยิ่งขึ้นเงา ช่วยเสริมลุคทางการหรือใส่ในชีวิตประจำวันให้ดูดีขึ้นได้ 
                        มีหัวเข็มขัดโลหะสลักลายจระเข้ตัวล็อกแบบอัตโนมัติ สวมใส่ง่ายและเพิ่มความสุขุมมากขึ้น <a class="text-muted font-weight-medium pl-2" href="#"><u>See Details</u></a>
                        </p>
                      </div>
                      <div>
                      <div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body px-0 overflow-auto">
                    <h4 class="card-title pl-4">หนังที่ใช้ทำ</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="bg-light">
                        <tbody>
                          <tr>
                            <td>
                            หนังวัว เป็นเข็มขัดหนังแท้ที่นิยมใส่กันมากที่สุดเลยก็ว่าได้ เพราะเป็นวัสดุที่มีความทนทานสูงและก็มีความอ่อนนุ่มด้วย<br>
                            สีเข็มขัดส่วนใหญ่จะเป็นสีน้ำตาลหรือสีดำ ไม่มีลวดลาย ดูเรียบหรู จึงเหมาะกับลุคทางการหรือแมทช์กับลุคสบาย ๆ ก็ได้<br>
                            หนังจระเข้ ก็เป็นที่นิยมไม่แพ้กัน แต่ราคาค่อนข้างสูง เพราะต้องใช้เทคนิคพิเศษในการผลิต นำมาใส่เสริมลุคเรียบหรูได้ <br>
                            การนำหนังจระเข้มาทำเข็มขัด โดยส่วนใหญ่แล้วจะใช้หนังส่วนท้องและส่วนหลังกระดูกคู่ ที่ให้ลวดลายสวยงาม<br>
                            หนังงู หากใครที่ชอบเข็มขัดที่มีลวดลายและสีสันโดดเด่น ให้เข็มขัดหนังงูเป็นอีกหนึ่งตัวเลือกสำหรับสายแฟชั่น<br>
                            ซึึ่งหนังงูมีลายเฉพาะที่เป็นเอกลักษณ์ของแต่ละชนิด เช่น หนังงูเหลือม ก็นำมาทำเข็มขัดเช่นกัน ทั้งนี้ ก็อยู่ที่รสนิยมของ<br>
                            แต่ละคนด้วยหนังนกกระจอกเทศ ช่วยเสริมลุคของคุณให้โดดเด่นได้ ด้วยลายที่เป็นเอกลักษณ์เฉพาะตัวกับลายจุดรอบเข็มขัด<br>
                            หนังนกกระจอกเทศจะมีความหนากว่าชนิดอื่นและราคาสูง เพราะต้องใช้เทคนิคขั้นสูงในการทำเข็มขัดเช่นกัน <br>
                            สีเข็มขัดสวยและดูดีจากสีของธรรมชาติ สามารถใส่กับลุคกึ่งทางการได้นอกจากนี้ ยังมีหนังปลากระเบน หนังกิ้งก่าและอื่น ๆ <br>
                            ที่ให้ความสวยแปลกตาจากลายของสัตว์ชนิดนั้น การเลือกเข็มขัดจึงบ่งบอกถึงความชอบและรสนิยมของผู้สวมใส่
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 grid-margin stretch-card">              
            </div>
          </div>


            <div class="row">
              <div class="col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-black">สินค้าที่หน้าสนใจ</h4>
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            

              <div class="col-xl-4 grid-margin stretch-card">
              </div>

              
              <div class="col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p1 class="card-title text-black">ดูสินค้าเพิ่มเติม</p1>
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          
            <div class="row">
              <div class="col-xl-4 grid-margin stretch-card">
                  <div class="card-body">
                    <img src="assets/images/dashboard/belt.1.jpg"  style="width:325px; height:325px;" >
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                      </ul>
                    </div>
                  </div>
              </div>
              

              <div class="col-xl-4 grid-margin stretch-card">
                  <div class="card-body">
                  <img src="assets/images/dashboard/belt.2.jpg"  style="width:325px; height:325px;">
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                      </ul>
                    </div>
                  </div>
              </div>


              <div class="col-xl-4 grid-margin stretch-card">
                <div class="card-body">
                  <img src="assets/images/dashboard/belt.3.jpg" style="width:325px; height:325px;">
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                      </ul>
                    </div>
                  </div>
              </div>
            </div>


            <div class="row">
              <div class="col-xl-12 grid-margin stretch-card">
                <div class="card card-calender">
                  <div class="card-body">
                    <div class="row pt-4">
                      <div class="col-sm-12">
                        <div>
                        <h5 class="text-white text-center">สนใจเข้าร่วมเป็นสมาชิก มีส่วนลดมากมาย</h1>
                        <h5 class="text-white text-center">BB belt shop</h5>
                        <h5 class="text-white"><a href="register.php" class="button button1">เข้าร่วม</button></a></h5>
                      </div>
                      <div class="col-sm-12 text-sm-right pt-3 pt-sm-0">
                        <p1 class="text-white m-0">ความเป็นมาเกี่ยวกับเข็มขัด</p>
                        <p1 class="text-white m-0 text-right">ที่เริ่มต้นจากการใช้เก็บสิ่งของ<br>
                        บันทึกเกี่ยวกับการใช้เข็มขัดของมนุษย์ <br>
                        เริ่มต้นในช่วงยุคสำริดเมื่อ 5 – 3<br>
                        พันปีก่อน ในฐานะของที่ผู้ชายสวมใส่ก่อน<br> 
                        หลังจากนั้นเมื่อเทรนด์แฟชั่นของมนุษย์<br>
                        เปลี่ยนไปตามกาลเวลา<br>
                        ก็ปรากฏหลักฐานว่าผู้เองก็ใส่เข็มขัดด้วย
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-xl-4 grid-margin stretch-card">
                <!--activity-->
              
                <!--activity ends-->
              </div>
            </div>
            <div class="row">
              
              <div class="col-xl-4 col-md-6 grid-margin stretch-card">
                <!--datepicker-->
                
                <!--datepicker ends-->
              </div>
              <div class="col-xl-4 col-md-6 stretch-card grid-margin stretch-card">
                <!--browser stats-->
               
                <!--browser stats ends-->
              </div>
            </div>
          </div>

@stop
