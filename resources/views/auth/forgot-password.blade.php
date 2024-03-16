<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>MV-Ecom</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/imgs/theme/favicon.svg') }}" />
    <!-- Template CSS -->
    @include('frontend.body.styles')
</head>

<body>
    <!-- Quick view -->
    @include('frontend.body.quick_view')
    <!-- Header  -->
    @include('frontend.body.header')

   <!-- End Header  -->

   <main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span>  My Account
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-12 m-auto">
                    <div class="row">
                        <div class="heading_s1">
                            <img class="border-radius-15" src="{{ asset('frontend/assets/imgs/page/reset_password.svg') }}" alt="" />
                            <h2 class="mb-15 mt-15">Email Password Reset</h2>
                            <p class="mb-30">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                        </div>
<div class="col-lg-6 col-md-8">
<div class="login_wrap widget-taber-content background-white">
    <div class="padding_eight_all bg-white">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                    {{session('status')}}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
        @csrf
            <div class="form-group">
                <input type="email" id="email" value="{{ old('email')}}" required autofocus name="email" placeholder="Email *" />
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-heading btn-block hover-up" name="login">Email Password Reset Link</button>
            </div>
        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('frontend.body.footer')
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{ asset('frontend/assets/imgs/theme/loading.gif') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
    @include('frontend.body.scripts')
</body>

</html>