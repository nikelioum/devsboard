<!doctype html>
<html lang="el">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <title>Hello, world!</title>
  </head>
  <body>


<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="/">DevsBoard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
      </ul>
    </div>
  </div>
</nav>

<section class="intro text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>DevsBoard</h1>
      </div>
      <div class="col-md-12">
        <h4>We Work Remotely is the largest remote work community in the world. With over 3M visitors, WWR is the number one destination to find and list incredible remote jobs.</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <img src="" alt="devsvoard promote">
      </div>
      <div class="col-md-3">
        <img src="" alt="devsvoard promote">
      </div>
      <div class="col-md-3">
        <img src="" alt="devsvoard promote">
      </div>
      <div class="col-md-3">
        <img src="" alt="devsvoard promote">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="#webdevelopers">WEB DEVELOPERS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#webdesigners">WEB DESIGNERS</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>



<section class="category-job-board" id="webdevelopers">
  <div class="container card category-board">
  
  <div class="row">
   <div class="col-md-12">
    <h3 class="job-hashtag">#WEB DEVELOPER</h3>
   </div>
  </div>

  <div class="row">
    @foreach($web_developer_jobs as $web_developer_job)
    <div class="col-md-12">
      <div class="card job-card shadow-sm">
        <div class="row">
        <div class="col-md-8">
        <p>{{$web_developer_job->job_company_name}}</p>
        <h4>{{$web_developer_job->job_title}}</h4>
        <p>{{$web_developer_job->job_location}}</p>
        </div>
        <div class="col-md-4">
        <p class="ms-auto">{{$web_developer_job->created_at}}</p>
        <a class="btn btn-primary my-auto" href="{{$web_developer_job->job_url}}" target="_blank">Check now</a>
        </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  </div>
</section>

<section class="category-job-board" id="webdesigners">
  <div class="container card category-board">
  
  <div class="row">
   <div class="col-md-12">
    <h3 class="job-hashtag">#WEB DESIGNER</h3>
   </div>
  </div>

  <div class="row">
    @foreach($web_designer_jobs as $web_designer_job)
    <div class="col-md-12">
      <div class="card job-card shadow-sm">
        <div class="row">
        <div class="col-md-8">
        <p>{{$web_designer_job->job_company_name}}</p>
        <h4>{{$web_designer_job->job_title}}</h4>
        <p>{{$web_designer_job->job_location}}</p>
        </div>
        <div class="col-md-4">
        <p class="ms-auto">{{$web_designer_job->created_at}}</p>
        <a class="btn btn-primary my-auto" href="{{$web_designer_job->job_url}}" target="_blank">Check now</a>
        </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  </div>
</section>

















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>