@extends('Frestorage')

@section('secciones')

<header id="headerlog" class="fixed-top navbar ">

    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="#header" class="scrollto">Frestorage</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#header" class="logo mr-auto scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <div id="topbar" class="d-lg-flex align-items-center ">
            <div class="container d-flex align-items-center">
                <div class="cta">
                    <a href="#about" class="scrollto">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    
</header>


<div id="mdia"class="card w-75 border-primary  mx-auto " style="max-width: 75rem;  ">

  <div class="card-header">Login</div>
  
  <div class="card-body text-primary">
   
            <form action="" method="post" role="form" class="php-email-form">

                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder=" Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                </div>

                <div class="form-group ">
                    <input type="password" class="form-control" name="subject" id="subject" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                </div>

                <div class="text-center mb-3 mt-4 "><button type="submit">Login</button></div>
                <div class="text-center"><button type="submit">login with facebook</button></div>
            </form>
  </div>
</div>
<!--LOGIN-->

@endsection
