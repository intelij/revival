<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Impilo Revival - A vehicle for change in Impilo Bulawayo Hospital</title>
    <meta name="description" content="Impilo Revival is a charity organisation dedicated to raising funds to buy essential, life saving medical equipment and medicines for Bulawayo hospitals in crisis.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/default/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/default/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/default/css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/default/font/flaticon.css">
    <!-- Star Animation CSS -->
    <link rel="stylesheet" href="/default/css/star-animation.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/default/style.css">
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--	TODO Khulu images change-->
<!--	<section class="fxt-template-animation fxt-template-layout22" data-bg-image="img/header.png">-->
<section class="fxt-template-animation fxt-template-layout22" data-bg-image="/default/img/impilo.jpg">
    <!-- Star Animation Start Here -->
    <div class="star-animation">
        <div id="stars1"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div id="stars4"></div>
        <div id="stars5"></div>
    </div>
    <!-- Star Animation End Here -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 fxt-none-991">
                <div class="fxt-header">
                    <div class="fxt-transformY-50 fxt-transition-delay-1">
{{--                        <a href="#" class="fxt-logo"><img src="/default/img/logo-white.png" alt="Gyapom Health" style="max-width: 190px;"></a>--}}
                    </div>
                    <div class="fxt-transformY-50 fxt-transition-delay-2">
                        <h1>Impilo Revival</h1>
                        <p>Providing needed aid to Impilo Hospital.</p>
                    </div><!---->
                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                        <p>Hospital revival - urgently in need of funds to ensure the hospitals are fully functional institutions</p>
                        <p>Medical Equipment and supplies - urgently need additional medical equipment and medical drugs as well as other supplies</p>
                        <p>Patient and family support – to ensure the holistic approach of medicine is practiced</p>
                        <p>Where your money goes - the money so generously donated by our supporters is used to fund our programme in buying and supplying essential medical equipment</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 fxt-bg-color">
                <div class="fxt-content">
                    <div class="fxt-form">
                        <h2>Complete The Form Below And Be Part Of Needed Change</h2>
                        <p>To be part of this great initiative</p>
                        <!--							<p>Care, whenever and whenever it is needed.</p>-->
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                        @endif
                        <form method="post" action="requestdemo">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="input-label">Contact Person</label>
                                <input type="text" id="name" class="form-control" name="name" placeholder="Contact Person" required="required">
                                <i toggle="#name" class="fa fa-fw fa-user toggle-password field-icon"></i>
                            </div>
                            <div class="form-group">
                                <label for="company" class="input-label">Company Name</label>
                                <input type="text" id="company" class="form-control" name="company" placeholder="Company Name (if applicable)" required="required">
                                <i toggle="#company" class="fa fa-fw fa-building toggle-password field-icon"></i>
                            </div>
                            <div class="form-group">
                                <label for="email" class="input-label">Business Email</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="demo@business.com" required="required">
                                <i toggle="#email" class="fa fa-fw fa-envelope toggle-password field-icon"></i>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="input-label">Phone Number</label>
                                <input id="phone" type="phone" class="form-control" name="phone" placeholder="+44 123 456 7890" required="required">
                                <i toggle="#phone" class="fa fa-fw fa-phone toggle-password field-icon"></i>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="fxt-btn-fill">Register Interest</button>
                            </div>
                        </form>
                    </div>
                    <div class="fxt-footer">
                        <!--							<p>Have an account?<a href="login-22.html" class="switcher-text2 inline-text">Log in</a></p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- jquery-->
<script src="/default/js/jquery-3.5.0.min.js"></script>
<!-- Popper js -->
<script src="/default/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="/default/js/bootstrap.min.js"></script>
<!-- Imagesloaded js -->
<script src="/default/js/imagesloaded.pkgd.min.js"></script>
<!-- Validator js -->
<script src="/default/js/validator.min.js"></script>
<!-- Custom Js -->
<script src="/default/js/main.js"></script>

</body>

</html>
