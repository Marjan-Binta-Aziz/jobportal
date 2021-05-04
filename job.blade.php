@extends('admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <br><br>
    <section class="content">
      <section>
        @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
      @endif
     </section>
      <div class="container-fluid" >
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header ">
                <h3 class="card-title ">Category Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Serial no</th>
                      <th>Category Name</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php($i = 1)
                  @foreach($category as $all_category)
                    <tr>
                    <td>{{$i++}}</td>
                    <td>{{$all_category->id}}</td>
                    <td>{{$all_category->cname}}</td>
                    <td>{{$all_category->status}}</td>
                    <td> 
                    <form action="{{url('/category/destroy', $all_category->id)}}">
                    <a class="btn btn-secondary" href="{{route('admin.catshow' , $all_category->id)}}">Show</a>
                    <a class="btn btn-secondary" href="{{route('admin.catedit' , $all_category->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>    
      </div> 
      {{-- {!! $category->links() !!} --}}
    </section>
  </div> 
@endsection
































@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
  <!DOCTYPE html>
  <html>
      <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
         
          <meta name="description" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
         
    </head>
      <body class="hold-transition sidebar-mini layout-fixed">
                <!-- header -->
                <section id="header">
                  <div class="menu-bar">
                      <nav class="navbar navbar-expand-lg navbar-right">
                          <div class="container-fluid">
                            <a class="navbar-brand" href="#"><img src="{{asset('admin/dist/img/images/logo2.png')}}" alt="logo" width="40px" height="40px"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                              <ul class="navbar-nav ml-right">
                                <li class="nav-item">
                                  <a class="nav-link" aria-current="page" href="#">All Jobs</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Companines</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Walk-in</a>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Jobs Catagories
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Govt. Jobs</a></li>
                                    <li><a class="dropdown-item" href="#">Private Jobs</a></li>
                                    <li><a class="dropdown-item" href="#">Full Time</a></li>
                                    <li><a class="dropdown-item" href="#">Part Time</a></li>
                                    <li><a class="dropdown-item" href="#">Internship</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </nav>
                  </div>
              </section>        
          <div class="banner text-center" > 
              <h1>JOBS AROUND YOU</h1> 
              <p>WE HELP TO FIND YOUR DREAMS</p>   
          </div>
          <div class="search-job text-center">
          <input type="text" class="form-control" placeholder="Search Keywords">
          <input type="text" class="form-control" placeholder="Company">
          <input type="text" class="form-control" placeholder="Location">
          <input type="button" class="btn btn-dark" value="Find Jobs">
          </div>
  
  
          <!----top recuiters -->
          <section id="recruiters">
          <div class="contatiner text-center">
          <h3>TOP RECRUITERS</h3>
          <div>
            <img src="{{asset('admin/dist/img/images/companylogo.png')}}" alt="company logo" width="40%">
          </div>
          </div>
      </section>
      <!------------Recent Jobs-------------------->
      <section id="jobs">
        <div class="container">
          <h3>RECENT JOBS</h3>
          <div class="company-details">
            <div class="job-update">
              <h4><b>Senior php Devoloper</b> </h4>
              <p>private Ltd.</p>
              <i class="fas fa-briefcase"></i><span> 0-2 years</span><br>
              <i class="fas fa-lira-sign"></i><span> 25000-35000</span><br>
              <i class="fas fa-map-marker"></i><span> Dhaka</span><br>
              <p>Skills : <i class="fas fa-angle-double-right"></i><small> java</small><small> php</small><small> HTML, CSS</small></p>
              <p>Discription :<i class="fas fa- angle-double-right"></i>dhfoooooooooooooouthuithjhgh<a href="#">Read more</a></p>
            </div>
            <div class="apply-btn">
              <button type="button" class="btn btn-dark"> Apply</button>
            </div>
          </div>
          <ul class="page-link text-center">
            <li class="left-arrow"><i class="fas fa-arrow-circle-left"></i></li>
            <li class="active">1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li class="right-arrow"><i class="fas fa-arrow-circle-right"></i></li>
          </ul>
        </div>
      </section>
  
      <!-- Site Status  -->
      <section id="site-stats">
        <div class="container">
          <h3>JOB SITE STATS</h3>
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-6">
                  <div class="stats-box">
                    <i class="fas fa-user-o"></i><span><small>100k</small></span>
                    <p>Job Seekers</p>
                  </div>
                </div>
                
                <div class="col-6">
                  <div class="stats-box">
                    <i class="fas fa-slideshare"></i><span><small>500 +</small></span>
                    <p>Employer</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-6">
                  <div class="stats-box">
                    <i class="fas fa-hand-peace-o"></i><span><small>10 +</small></span>
                    <p>Active Jobs</p>
                  </div>
                </div>
  
                <div class="col-6">
                  <div class="stats-box">
                    <i class="fas fa-building-o"></i><span><small>400 +</small></span>
                    <p>Employer</p>
                  </div>
                </div>                  
              </div>
            </div>
          </div>
        </div>
      </section>
          
      <!-- App Banner -->
      <section id="app-banner" class="text-center">
        <h2>Find Jobs On Mobile, Download Jobclues App</h2>
        <!-- <img src="images/store.png" alt="applestore"> -->
        <img src="{{asset('admin/dist/img/images/apple.png')}}" alt="apple">
        <img src="{{asset('admin/dist/img/images/play.png')}}" alt="paly">
      </section>
  
      <!-- footer -->
      <section id="footer" class="text-center">
        <a href=""><img src="{{asset('admin/dist/img/images/social.jpg')}}" alt="social logo"></a>
        <hr>
        <p><i class="far fa-copyright"></i> Made by <i class="far fa-heart "></i>  marjan 2021</p>
      </section>
          <script src="" async defer></script>
      </body>
</html>
</section>
</div>
<aside class="control-sidebar control-sidebar-dark">
</aside>
</div>
@endsection