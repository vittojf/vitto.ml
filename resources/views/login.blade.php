@extends('Frestorage')

@section('secciones')
<header id="headerlog" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="#header" class="scrollto">Frestorage</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#header" class="logo mr-auto scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <div id="topbar" class="d-none d-lg-flex align-items-center ">
            <div class="container d-flex align-items-center">
                <div class="cta">
                    <a href="#about" class="scrollto">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!--LOGIN-->
<div class="card border-primary  w-50 p-3 mx-auto  align-self-center" style="margin:10% 0 5% 0;">
    <div class="card-header text-primary display-4">Login</div>
    <div class="card-body  w-100 p-5 mx-auto">


        <div class="col-lg-12 mt-5 mt-lg-0  " data-aos="fade-left" data-aos-delay="100">

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

</div>

</div>
</div>
@endsection
