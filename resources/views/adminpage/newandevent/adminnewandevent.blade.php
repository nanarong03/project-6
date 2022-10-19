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
  background-color: red;
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
             
            <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ตารางข่าวสารและกิจกรรม  <td> <a href="{{url('admin/newandevent/add')}}" class="button-success">เพิ่มข้อมูล</button></a></td> </h4>
                    
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th><div>New name</div></th>
                            <th><div>New details</div></th>
                            <th><div>New image</div></th>
                            <th><div>Edit</div></th>
                            <th><div>Delete</div></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($newandevent as $row)
                          <tr class="table table-bordered">
                            <td>{{ $row ->id}}</td>
                            <td>{{ $row ->name}}</td>
                            <td>{{ $row ->details}}</td>
                            <td>{{ $row ->image}}</td>
                            <td><a href="{{url('admin/newandevent/edit')}}">
                              <button class="">Edit</button></a></td>
                              <form><td><button type="delete" class="delete">
                                Delete</button></td></form>
                          </tr>
                          @endforeach
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
